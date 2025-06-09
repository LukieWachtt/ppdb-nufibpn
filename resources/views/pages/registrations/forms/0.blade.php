<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPDB Yayasan Nurul Fikri</title>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <a onclick="history.back();" class="back-button"><</a>
      <img src="{{ asset('img/Rectangle 6.png') }}" alt="Logo Yayasan Nurul Fikri" class="logo">
      <h1 class="yayasan-title">YAYASAN <br> NURUL FIKRI <br> BALIKPAPAN</h1>
      <div class="image">
        <img src="{{ asset('img/register.png') }}" alt="anak1">
      </div>
    </div>
    <div class="right-panel">
      <div class="content-box">
        <h2>Ketentuan Pendaftaran Di Yayasan Nurul Fikri Balikpapan</h2>
        <p><strong>Baca ketentuan dan centang checkbox untuk melanjutkan</strong></p>
        <ol>
          <li>Setiap calon siswa wajib mengisi form pendaftaran dengan lengkap.</li>
          <li>Data-data yang diisikan pada form PPDB Online harus sesuai dengan data asli dan benar adanya.</li>
          <li>Siapkan file foto berwarna dalam format JPG maksimal berukuran 3MB atau foto langsung menggunakan kamera HP dengan background dinding polos yang akan di-upload melalui form pendaftaran PPDB Online.</li>
          <li>Siapkan file KTP ayah dan ibu, file Kartu Keluarga, file Akte Kelahiran calon siswa dalam format JPG/PDF atau foto langsung menggunakan kamera dengan jelas dan tidak buram yang akan di-upload melalui form pendaftaran PPDB Online.</li>
          <li>Siapkan nilai rapor kelas 7 dan 8 semester I dan II untuk pengisian kolom nilai yang akan dimasukkan dalam form isian nilai rapor pada PPDB Online.</li>
          <li>Calon siswa yang sudah mendaftar dan isi form PPDB Online bisa melakukan login ke akun yang dibuat dalam dashboard PPDB Online menggunakan email dan password yang digunakan saat mendaftar untuk mengakses informasi yang berkaitan dengan PPDB.</li>
          <li>Calon siswa yang sudah mendaftar secara online membayar biaya pendaftaran sebesar Rp. 300.000 melalui nomor rekening yang tertera di halaman dashboard PPDB Online.</li>
          <li>Calon siswa yang sudah mendaftarkan diri melalui PPDB Online wajib melengkapi dokumen persyaratan yang sudah ditentukan oleh Panitia PPDB.</li>
          <li>Setiap calon siswa yang mendaftar wajib mengikuti tes seleksi yang diadakan oleh panitia PPDB.</li>
          <li>Data yang sudah diberikan kepada Panitia PPDB hanya digunakan untuk keperluan penerimaan siswa baru dan data tidak akan dipublikasikan serta dijaga kerahasiaannya oleh Panitia PPDB.</li>
        </ol>
      </div>
      
    </div>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        @foreach ($inputs as $name => $value)
        @if (!in_array($name, [
          'next-page',
        ]))
        <input hidden name="{{ $name }}" value="{{ $value }}"/>
        @endif
        @endforeach
        <input hidden name="next-page" next-page value="1">
        <button type="submit" next-page="1" class="next-button">></button>
        <script src="{{ asset('js/registration-form.js') }}"></script>
      </form>
  </div>
</body>
</html>