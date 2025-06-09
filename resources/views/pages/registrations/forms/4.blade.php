<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Data Siswa</title>
  <link rel="stylesheet" href="{{ asset('css/form4.css') }}" />
</head>
<body>
  <div class="form-wrapper">
    <header class="form-header">
      <img src="{{ asset('img/Rectangle 6.png') }}" alt="Logo Yayasan Nurul Fikri">
    </header>
    
    <nav class="form-nav">
      <div class="nav-item active">Siswa<br><span class="active">Data Calon Siswa</span></div>
      <div class="nav-item nih">Kesehatan<br><span class="nih">Data kesehatan</span></div>
      <div class="nav-item woke">Domisili<br><span class="woke">Alamat siswa</span></div>
      <div class="nav-item yaha">Wali Murid<br><span class="yaha">Data Wali murid</span></div>
      <div class="nav-item">Prestasi siswa<br><span>Data Prestasi</span></div>
      <div class="nav-item">Konfirmasi<br><span>Pendaftaran</span></div>
    </nav>

    <section class="form-section">
      <h2>Data Wali Murid</h2>
      <p>Data calon wali siswa baru</p>
      <form class="data-form" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
          <input type="text" name="nama_ayah" placeholder="Nama Lengkap Ayah *" required value="{{ $inputs['nama_ayah'] ?? null }}"/>
          <input type="text" name="nama_ibu" placeholder="Nama Lengkap Ibu *" required value="{{ $inputs['nama_ibu'] ?? null }}"/>
        </div>

        <div class="form-row">
            <input type="text" name="nomor_telepon_wali" placeholder="Nomor wali murid (ayah atau ibu) *" required value="{{ $inputs['nomor_telepon_wali'] ?? null }}"/>
        </div>

        <div class="form-row">
            <select name="pekerjaan_wali" required><option value="" {{ ($inputs['pekerjaan_wali'] ?? null) === null ? 'selected' : null }} disabled>Pekerjaan *</option><option value="kantoran" {{ ($inputs['pekerjaan_wali'] ?? null) === 'kantoran' ? 'selected' : null }}>Kantoran</option><option value="guru" {{ ($inputs['pekerjaan_wali'] ?? null) === 'guru' ? 'selected' : null }}>Guru</option><option value="lainnya" {{ ($inputs['pekerjaan_wali'] ?? null) === 'lainnya' ? 'selected' : null }}>Lainnya</option></select>
            <select name="rentang_penghasilan_wali_jt" required><option value="" {{ ($inputs['rentang_penghasilan_wali_jt'] ?? null) === null ? 'selected' : null }} disabled>Rentang Penghasilan *</option><option value="0-5" {{ ($inputs['rentang_penghasilan_wali_jt'] ?? null) === '0-5' ? 'selected' : null }}>5 juta ke bawah</option><option value="5-10" {{ ($inputs['rentang_penghasilan_wali_jt'] ?? null) === '5-10' ? 'selected' : null }}>5-10 juta</option><option value="10+" {{ ($inputs['rentang_penghasilan_wali_jt'] ?? null) === '10+' ? 'selected' : null }}>10 juta ke atas</option></select>
        </div>

        @foreach ($inputs as $name => $value)
        @if (!in_array($name, [
          'nama_ayah',
          'nama_ibu',
          'nomor_telepon_wali',
          'pekerjaan_wali',
          'rentang_penghasilan_wali_jt',
          'next-page',
        ]))
        <input hidden name="{{ $name }}" value="{{ $value }}"/>
        @endif
        @endforeach

        <input hidden name="next-page" next-page value="5">
        <div class="form-buttons">
          <button type="submit" next-page="3" formnovalidate class="btn back"><</button>
          <button type="submit" next-page="5" class="btn next">></button>
          <script src="{{ asset('js/registration-form.js') }}"></script>
        </div>
      </form>
    </section>
  </div>
</body>
</html>
