<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function home() {
        if (Auth::check()) {
            $user = Auth::user();
            return redirect()->route('registrations.index');
        } else {
            return redirect()->route('login');
        }
    }
}
