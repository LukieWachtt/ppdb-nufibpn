@extends('layouts.app')

@section('title', 'General Dashboard')

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
            <h1>Dashboard Pendaftar</h1>
        </div>

        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Latest Posts</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Nama Calon Siswa </th>
                                    <th>Nama Orangtua</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Herman bin Hussein
                                        <div class="table-links">
                                            in <a href="#">SMP Nurul Fikri</a>

                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-600">
                                            <img src="{{ asset('img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1">
                                            Bagus Dwi Cahya
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                           data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                           data-confirm-yes="alert('Deleted')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Repeatable rows -->
                                <tr>
                                    <td>
                                        Laravel 5 Tutorial - Installation
                                        <div class="table-links">
                                            in <a href="#">Web Development</a>
                                            <div class="bullet"></div>
                                            <a href="#">View</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-600">
                                            <img src="{{ asset('img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1">
                                            Bagus Dwi Cahya
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                           data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                           data-confirm-yes="alert('Deleted')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
   <tr>
                                    <td>
                                        Laravel 5 Tutorial - Installation
                                        <div class="table-links">
                                            in <a href="#">Web Development</a>
                                            <div class="bullet"></div>
                                            <a href="#">View</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-600">
                                            <img src="{{ asset('img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1">
                                            Bagus Dwi Cahya
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                           data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                           data-confirm-yes="alert('Deleted')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

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
