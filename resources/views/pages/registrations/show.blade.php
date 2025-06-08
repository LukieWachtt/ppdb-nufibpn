@php
$type_menu = 'dashboard';
@endphp

@extends('layouts.app')

@section('title', 'Registrasi ' . $registration->nama)

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
   <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pendaftar</h1>
        </div>

        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Data</h4>
                    <div class="card-header-action">
                        <a href="{{ route('registrations.edit', $registration) }}" class="btn btn-primary">Edit&ThickSpace;&ThickSpace;<i class="fas fa-pencil"></i></a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            {{-- <thead>
                                <tr>
                                    <th>Nama Calon Siswa </th>
                                    <th>Nama Orangtua</th>

                                </tr>
                            </thead> --}}
                            <tbody>
                                @php
                                $fieldsAndValues = Arr::except($registration->getAttributes(), ['id', 'user_id']);
                                $fieldsAndValues['didaftarkan_oleh'] = $registration->user->name;
                                @endphp
                                @foreach ($fieldsAndValues as $field => $value)
                                <tr>
                                    <td>
                                        {{ ucwords(str_replace(['_'], [' '], $field)) }}
                                    </td>
                                    <td>
                                        {{ $value }}
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
</div>

        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
