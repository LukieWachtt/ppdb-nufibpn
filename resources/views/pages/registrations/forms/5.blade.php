<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Data Siswa</title>
  <link rel="stylesheet" href="../css/form5.css" />
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
      <div class="nav-item yaha">Wali Murid<br><span class="yaha">Data Wali murid</span></div>
      <div class="nav-item hola">Prestasi siswa<br><span class="hola">Data Prestasi</span></div>
      <div class="nav-item">Konfirmasi<br><span>Pendaftaran</span></div>
    </nav>

    <section class="form-section">
      <h2>Data Prestas Siswa</h2>
      <p>Data prestasi calon siswa baru</p>
      <form class="data-form" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
            <div class="file-input">
              <label>Sertifikat 1 {{ ($inputs['sertifikat_1'] ?? null) === null ? '*' : '✓ (' . $inputs['sertifikat_1'] . ')' }}</label>
              <input type="file" name="sertifikat_1"/>
            </div>
            <div class="file-input">
              <label>Sertifikat 2 {{ ($inputs['sertifikat_2'] ?? null) === null ? '*' : '✓ (' . $inputs['sertifikat_2'] . ')' }}</label>
              <input type="file"  name="sertifikat_2"/>
            </div>
            <div class="file-input">
              <label>Sertifikat 3 {{ ($inputs['sertifikat_3'] ?? null) === null ? '*' : '✓ (' . $inputs['sertifikat_3'] . ')' }}</label>
              <input type="file"  name="sertifikat_3"/>
            </div>
            <div class="file-input">
              <label>Sertifikat 4 {{ ($inputs['sertifikat_4'] ?? null) === null ? '*' : '✓ (' . $inputs['sertifikat_4'] . ')' }}</label>
              <input type="file"  name="sertifikat_4"/>
            </div>
        </div>

        @foreach ($inputs as $name => $value)
        @if (!in_array($name, [
          'next-page',
        ]))
        <input hidden name="{{ $name }}" value="{{ $value }}"/>
        @endif
        @endforeach

        <input hidden name="next-page" next-page>
        <div class="form-buttons">
          <button type="submit" next-page="4" formnovalidate class="btn back"><</button>
          <button type="submit" formaction="{{ route('registrations.store') }}" class="btn submit">Submit</button>
          <script src="../js/registration-form.js"></script>
        </div>
      </form>
    </section>
  </div>
</body>
</html>