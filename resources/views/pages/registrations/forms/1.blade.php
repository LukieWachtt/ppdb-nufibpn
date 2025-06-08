<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Data Siswa</title>
  <link rel="stylesheet" href="../css/form1.css" />
</head>
<body>
  <div class="form-wrapper">
    <header class="form-header">
      <img src="../img/Rectangle 6.png" alt="Logo Yayasan Nurul Fikri">
    </header>
    
    <nav class="form-nav">
      <div class="nav-item active">Siswa<br><span class="active">Data Calon Siswa</span></div>
      <div class="nav-item">Kesehatan<br><span>Data kesehatan</span></div>
      <div class="nav-item">Domisili<br><span>Alamat siswa</span></div>
      <div class="nav-item">Wali Murid<br><span>Data Wali murid</span></div>
      <div class="nav-item">Prestasi siswa<br><span>Data Prestasi</span></div>
      <div class="nav-item">Konfirmasi<br><span>Pendaftaran</span></div>
    </nav>

    <section class="form-section">
      <h2>Data Siswa</h2>
      <p>Data Calon Siswa Baru</p>
      <form class="data-form" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
          <input type="text" placeholder="Nama *" name="nama" required value="{{ $inputs['nama'] ?? null }}"/>
          <select name="jenis_kelamin" required><option value="" {{ ($inputs['jenis_kelamin'] ?? null) === null ? 'selected' : null }} disabled>Jenis Kelamin *</option><option value="laki-laki" {{ ($inputs['jenis_kelamin'] ?? null) === 'laki-laki' ? 'selected' : null }}>Laki-laki</option><option value="perempuan" {{ ($inputs['jenis_kelamin'] ?? null) === 'perempuan' ? 'selected' : null }}>Perempuan</option></select>
          <input type="date" required title="Tanggal lahir" name="tanggal_lahir" value="{{ $inputs['tanggal_lahir'] ?? null }}"/>
          <input type="text" placeholder="Tempat lahir *" name="tempat_lahir" required value="{{ $inputs['tempat_lahir'] ?? null }}"/>
        </div>

        <div class="form-row">
          <select name="anak_ke" required><option value="" {{ ($inputs['anak_ke'] ?? null) === null ? 'selected' : null }} disabled>Anak ke *</option><option value="1" {{ ($inputs['anak_ke'] ?? null) === '1' ? 'selected' : null }}>1</option><option value="2" {{ ($inputs['anak_ke'] ?? null) === '2' ? 'selected' : null }}>2</option><option value="3" {{ ($inputs['anak_ke'] ?? null) === '3' ? 'selected' : null }}>3</option><option value="4" {{ ($inputs['anak_ke'] ?? null) === '4' ? 'selected' : null }}>4</option><option value="5" {{ ($inputs['anak_ke'] ?? null) === '5' ? 'selected' : null }}>5</option><option value="6" {{ ($inputs['anak_ke'] ?? null) === '6' ? 'selected' : null }}>6</option><option value="7" {{ ($inputs['anak_ke'] ?? null) === '7' ? 'selected' : null }}>7</option><option value="8" {{ ($inputs['anak_ke'] ?? null) === '8' ? 'selected' : null }}>8</option><option value="9" {{ ($inputs['anak_ke'] ?? null) === '9' ? 'selected' : null }}>9</option></select>
          <select name="berapa_bersaudara" required><option value="" {{ ($inputs['berapa_bersaudara'] ?? null) === null ? 'selected' : null }} disabled>Bersaudara *</option><option value="1" {{ ($inputs['berapa_bersaudara'] ?? null) === '1' ? 'selected' : null }}>1</option><option value="2" {{ ($inputs['berapa_bersaudara'] ?? null) === '2' ? 'selected' : null }}>2</option><option value="3" {{ ($inputs['berapa_bersaudara'] ?? null) === '3' ? 'selected' : null }}>3</option><option value="4" {{ ($inputs['berapa_bersaudara'] ?? null) === '4' ? 'selected' : null }}>4</option><option value="5" {{ ($inputs['berapa_bersaudara'] ?? null) === '5' ? 'selected' : null }}>5</option><option value="6" {{ ($inputs['berapa_bersaudara'] ?? null) === '6' ? 'selected' : null }}>6</option><option value="7" {{ ($inputs['berapa_bersaudara'] ?? null) === '7' ? 'selected' : null }}>7</option><option value="8" {{ ($inputs['berapa_bersaudara'] ?? null) === '8' ? 'selected' : null }}>8</option><option value="9" {{ ($inputs['berapa_bersaudara'] ?? null) === '9' ? 'selected' : null }}>9</option></select>
          <input type="number" name="nik" placeholder="NIK *" required value="{{ $inputs['nik'] ?? null }}"/>
          <select name="agama" required><option value="" {{ ($inputs['agama'] ?? null) === null ? 'selected' : null }} disabled>Agama *</option><option value="islam" {{ ($inputs['agama'] ?? null) === 'islam' ? 'selected' : null }}>Islam</option></select>
        </div>

        <div class="form-row">
          <select name="jenjang" required><option value="" {{ ($inputs['jenjang'] ?? null) === null ? 'selected' : null }} disabled>Pilihan Jenjang *</option><option value="sd" {{ ($inputs['jenjang'] ?? null) === 'sd' ? 'selected' : null }}>SD</option><option value="smp" {{ ($inputs['jenjang'] ?? null) === 'smp' ? 'selected' : null }}>SMP</option><option value="sma" {{ ($inputs['jenjang'] ?? null) === 'sma' ? 'selected' : null }}>SMA</option></select>
          <div class="phone-input">
            <span>+62</span>
            <input type="tel" name="nomor_telepon_siswa" placeholder="No Telepon Siswa *" required value="{{ $inputs['nomor_telepon_siswa'] ?? null }}"/>
          </div>
          <div class="file-input">
            <label>Pas Foto {{ ($inputs['pas_foto_siswa'] ?? null) === null ? '*' : '✓ (' . $inputs['pas_foto_siswa'] . ')' }}</label>
            <input type="file" name="pas_foto_siswa" {{ ($inputs['pas_foto_siswa'] ?? null) === null ? 'required' : null }}/>
          </div>
          <div class="file-input">
            <label>Kartu Keluarga {{ ($inputs['kartu_keluarga'] ?? null) === null ? '*' : '✓ (' . $inputs['kartu_keluarga'] . ')' }}</label>
            <input type="file" name="kartu_keluarga" {{ ($inputs['kartu_keluarga'] ?? null) === null ? 'required' : null }}/>
          </div>
        </div>

        @foreach ($inputs as $name => $value)
        @if (!in_array($name, [
          'nama',
          'jenis_kelamin',
          'tanggal_lahir',
          'tempat_lahir',
          'anak_ke',
          'berapa_bersaudara',
          'nik',
          'agama',
          'jenjang',
          'nomor_telepon_siswa',
          'next-page',
        ]))
        <input hidden name="{{ $name }}" value="{{ $value }}"/>
        @endif
        @endforeach
        
        <input hidden name="next-page" next-page value="2">
        <div class="form-buttons">
          <input type="submit" next-page="0" formnovalidate class="btn back" value="<"/>
          <input type="submit" next-page="2" class="btn next" value=">"/>
          <script src="../js/registration-form.js"></script>
        </div>
      </form>
    </section>
  </div>
</body>
</html>
