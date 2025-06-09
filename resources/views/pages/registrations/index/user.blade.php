@php
use App\Models\User;
$type_menu = 'dashboard';
if (!isset($user)) {
    $user = Auth::user();
}
@endphp

@extends('layouts.app')

@section('title', 'Dashboard Registrasi')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="../library/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet"
        href="../library/summernote/dist/summernote-bs4.min.css">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Halo, {{ $user->name }}</h1>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Data Pendaftaran Anda</h4>
                    <div class="card-header-action">
                        <a href="{{ route('registrations.create') }}" class="btn btn-primary"><i class="fas fa-add"></i>&nbsp;Daftar</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    @if ($registrations->isEmpty())
                                    <th colspan="3">Anda belum membuat pendaftaran</th>
                                    @else
                                    <th>Nama Calon Siswa </th>
                                    <th>Didaftarkan Oleh</th>
                                    <th>Status Penerimaan</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registrations as $registration)
                                <tr>
                                    <td>
                                        {{ $registration->nama }}
                                        <div class="table-links">
                                            didaftarkan pada {{ $registration->created_at->format('d/m/Y H:i') }}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('users.show', $registration->user_id) }}" class="font-weight-600">
                                            <img src="../img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1">
                                            {{ $registration->user->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <div class="btn btn-{{ $registration->diterima != null ? ($registration->diterima ? 'success' : 'danger') : 'secondary' }}">@if ($registration->diterima != null) <i class="fas fa-{{ $registration->diterima ? 'check' : 'x' }}"></i> @endif &nbsp;{{ $registration->diterima != null ? ($registration->diterima ? 'Diterima' : 'Ditolak') : 'Menunggu' }}</div>
                                    </td>
                                    <td>
                                        <a href="{{ route('registrations.show', $registration) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        {{-- <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                           data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                           data-confirm-yes="alert('Deleted')">
                                            <i class="fas fa-trash"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- table-responsive -->
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
        </section>
        {{-- <div class="main-content">
            
        </div> --}}
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="../library/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="../library/chart.js/dist/Chart.min.js"></script>
    <script src="../library/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../library/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../library/summernote/dist/summernote-bs4.min.js"></script>
    <script src="../library/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../js/page/index-0.js"></script>
@endpush
