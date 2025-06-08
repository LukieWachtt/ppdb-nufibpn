<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Data Siswa</title>
  <link rel="stylesheet" href="../css/form3.css" />
</head>
<body>
  <div class="form-wrapper">
    <header class="form-header">
      <img src="../img/Rectangle 6.png" alt="Logo Yayasan Nurul Fikri">
    </header>
    
    <nav class="form-nav">
      <div class="nav-item active">Siswa<br><span class="active">Data Calon Siswa</span></div>
      <div class="nav-item nih">Kesehatan<br><span class="nih">Data kesehatan</span></div>
      <div class="nav-item woke">Domisili<br><span class="woke">Alamat siswa</span></div>
      <div class="nav-item">Wali Murid<br><span>Data Wali murid</span></div>
      <div class="nav-item">Prestasi siswa<br><span>Data Prestasi</span></div>
      <div class="nav-item">Konfirmasi<br><span>Pendaftaran</span></div>
    </nav>

    <section class="form-section">
      <h2>Domisili Siswa</h2>
      <p>Data Alamat Calon Siswa Baru</p>
      <form class="data-form" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
          <input type="text" name="alamat" placeholder="Alamat *" required value="{{ $inputs['alamat'] ?? null }}"/>
          <input type="text" name="alamat_lengkap" placeholder="Alamat Lengkap *" required value="{{ $inputs['alamat_lengkap'] ?? null }}"/>
        </div>

        <div class="form-row">
            <input type="text" name="kode_pos" placeholder="Kode Pos *" required value="{{ $inputs['kode_pos'] ?? null }}"/>
            <input type="text" name="negara" placeholder="Negara *" required value="{{ $inputs['negara'] ?? null }}"/>
        </div>

        <div class="form-row">
            <input type="text" name="kota" placeholder="Kota *" required value="{{ $inputs['kota'] ?? null }}"/>
            <input type="text" name="provinsi" placeholder="Provinsi *" required value="{{ $inputs['provinsi'] ?? null }}"/>
        </div>

        @foreach ($inputs as $name => $value)
        @if (!in_array($name, [
          'alamat',
          'alamat_lengkap',
          'kode_pos',
          'negara',
          'kota',
          'provinsi',
          'next-page',
        ]))
        <input hidden name="{{ $name }}" value="{{ $value }}"/>
        @endif
        @endforeach

        <input hidden name="next-page" next-page value="4">
        <div class="form-buttons">
          <button type="submit" next-page="2" formnovalidate class="btn back"><</button>
          <button type="submit" next-page="4" class="btn next">></button>
          <script src="../js/registration-form.js"></script>
        </div>
      </form>
    </section>
  </div>
</body>
</html>
