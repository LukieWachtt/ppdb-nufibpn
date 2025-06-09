<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Data Siswa</title>
  <link rel="stylesheet" href="{{ asset('css/form2.css') }}" />
</head>
<body>
  <div class="form-wrapper">
    <header class="form-header">
      <img src="{{ asset('img/Rectangle 6.png') }}" alt="Logo Yayasan Nurul Fikri">
    </header>
    
    <nav class="form-nav">
      <div class="nav-item active">Siswa<br><span class="active">Data Calon Siswa</span></div>
      <div class="nav-item nih">Kesehatan<br><span class="nih">Data kesehatan</span></div>
      <div class="nav-item">Domisili<br><span>Alamat siswa</span></div>
      <div class="nav-item">Wali Murid<br><span>Data Wali murid</span></div>
      <div class="nav-item">Prestasi siswa<br><span>Data Prestasi</span></div>
      <div class="nav-item">Konfirmasi<br><span>Pendaftaran</span></div>
    </nav>

    <section class="form-section">
      <h2>Data Kesehatan Siswa</h2>
      <p>Data Kesehatan Calon Siswa Baru</p>
      <form class="data-form" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
          <input type="number" name="berat_badan_kg" placeholder="Berat Badan | Kg *" required value="{{ $inputs['berat_badan_kg'] ?? null }}"/>
          <input type="number" name="tinggi_badan_cm" placeholder="Tinggi Badan | Cm *" required value="{{ $inputs['tinggi_badan_cm'] ?? null }}"/>
        </div>

        <div class="form-row">
          <input type="text" name="penyakit_keturunan" placeholder="Penyakit Keturunan *" required value="{{ $inputs['penyakit_keturunan'] ?? null }}"/>
          <input type="text" name="penyakit_menular" placeholder="Penyakit Menular *" required value="{{ $inputs['penyakit_menular'] ?? null }}"/>
        </div>

        @foreach ($inputs as $name => $value)
        @if (!in_array($name, [
          'berat_badan_kg',
          'tinggi_badan_cm',
          'penyakit_keturunan',
          'penyakit_menular',
          'next-page',
        ]))
        <input hidden name="{{ $name }}" value="{{ $value }}"/>
        @endif
        @endforeach

        <input hidden name="next-page" next-page value="3">
        <div class="form-buttons">
          <button type="submit" next-page="1" formnovalidate class="btn back"><</button>
          <button type="submit" next-page="3" class="btn next">></button>
          <script src="{{ asset('js/registration-form.js') }}"></script>
        </div>
      </form>
    </section>
  </div>
</body>
</html>
