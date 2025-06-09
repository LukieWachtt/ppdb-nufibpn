<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

function generateFileName($extension = null) : string {
    return Str::uuid() . ($extension !== null ? '.' : '') . ($extension ?? '');
}

function cacheFilesAndModifyInputs(array $files, array $inputs) : array {
    foreach ($files as $key => $file) {
        if ($file->isValid()) {
            $fileName = generateFileName($file->extension());
            $file->storeAs('public/uploads/temp/', $fileName);
            $inputs['file_' . $key] = $fileName;
            $inputs[$key] = $file->getClientOriginalName();
        };
    };
    return $inputs;
}

function recacheFilesAndModifyInputs(array $inputs) : array {
    foreach ($inputs as $key => $value) {
        if (Str::startsWith($key, 'file_')) {
            if (!empty($value)) {
                Storage::move('public/uploads/' . Str::after($key, 'file_') . '/' . $value, 'public/uploads/temp/' . $value);
                if (!isset($inputs[Str::after($key, 'file_')])) {
                    $inputs[Str::after($key, 'file_')] = $value;
                }
            } else {
                unset($inputs[$key]);
            }
        }
    };
    return $inputs;
}

class RegistrationController extends Controller
{
    public $recognizedFileFields = [
        'pas_foto_siswa',
        'kartu_keluarga',
        'sertifikat_1',
        'sertifikat_2',
        'sertifikat_3',
        'sertifikat_4'
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('pages.registrations.index.' . ['admin', 'user'][$user->role], ['user' => $user, 'registrations' => $user->role == 0 ? Registration::with('user')->get() : Registration::where('user_id', $user->id)->with('user')->get()]);
        } else {
            return redirect()->route('login'/*, ['next' => '/registrations/create']*/);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if (Auth::check()) {
            // foreach ($request->allFiles() as $key => $file) {
            //     if ($file->isValid()) {
            //         $fileName = generateFileName($file->extension());
            //         $file->storeAs('public/uploads/' . $key, $fileName);
            //         $inputs += ['file_' . $key => $fileName];
            //     }
            // }
            $inputs = $request->all();
            $inputs = cacheFilesAndModifyInputs($request->allFiles(), $inputs);
            return view('pages.registrations.forms.' . ($request['next-page'] ?? '0'), ['inputs' => $inputs]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $inputs = $request->all();
            $inputs = cacheFilesAndModifyInputs($request->allFiles(), $inputs);
            foreach ($this->recognizedFileFields as $key) {
                if (isset($inputs['file_' . $key])) {
                    Storage::move('public/uploads/temp/' . $inputs['file_' . $key], 'public/uploads/' . $key . '/' . $inputs['file_' . $key]);
                }
            }
            Registration::create($inputs + ['user_id' => Auth::user()->id]);
            return redirect()->route('registrations.index')->with('success', 'Pendaftaran berhasil dilakukan');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration) {
        if (Auth::check() && (Auth::user()->role == 0 || Auth::user()->id == $registration->user_id)) {
            return view('pages.registrations.show', ['registration' => $registration]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration, Request $request)
    {
        if (Auth::check() && Auth::user()->id == $registration->user_id) {
            $prevInputs = $registration->toArray();
            $inputs = $request->all();
            $inputs = cacheFilesAndModifyInputs($request->allFiles(), $inputs);
            $inputs = recacheFilesAndModifyInputs(array_replace($prevInputs, $inputs));
            return view('pages.registrations.forms.' . ($request['next-page'] ?? '0'), ['registration' => $registration, 'inputs' => $inputs]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
