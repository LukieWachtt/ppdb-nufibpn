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
                        <form method="POST">
                        @csrf
                        @if (Auth::user()->id == $registration->user_id)
                        @method('DELETE')
                        <button formaction="{{ route('registrations.destroy', $registration) }}" type="submit" class="btn btn-danger" onclick="return confirm('Hapus pendaftaran ini?\nAksi ini tidak bisa dibatalkan, dan anda akan harus membuat pendaftaran ulang.');"><i class="fas fa-trash"></i>&nbsp;Hapus</button>
                        &nbsp;
                        <a href="{{ route('registrations.edit', $registration) }}" class="btn btn-primary"><i class="fas fa-pencil"></i>&nbsp;Edit</a>
                        @endif
                        &nbsp;
                        @if (Auth::user()->role == 0)
                        <button formaction="{{ route('registrations.reject', $registration) }}" type="submit" class="btn btn-danger"><i class="fas fa-x"></i>&nbsp;Tolak</button>
                        &nbsp;
                        <button formaction="{{ route('registrations.accept', $registration) }}" type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;Terima</button>
                        @endif
                        </form>
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
                                        @if (Str::startsWith($field, 'file_'))
                                        <img style="height: 12rem; margin: 1rem 0; border-radius: 0.25rem;" src="{{ asset('storage/uploads/' . Str::after($field, 'file_') . '/' . $value) }}" alt="">
                                        @else
                                        {{ $value }}
                                        @endif
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
