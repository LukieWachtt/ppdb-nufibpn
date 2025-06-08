<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../style.css" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <section class="header">
    <div class="navbar-wrapper">
      <div class="items-left">
        <a href="#"><img src="../img/logo.png" alt=""></a>
        <h3>Nurul Fikri Balikpapan</h3>
      </div>
      <div class="items-right">
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Jenjang Sekolah</a></li>
          <li><a href="#">Brosur</a></li>
        </ul>
        <div class="btn-wrapper">
          <a href="{{ route('register') }}"><button class="btn-sign-up">Sign up</button></a>
          <a href="{{ route('login') }}"><button class="btn-login">Login</button></a>
        </div>
      </div>
    </div>
    <div class="first-section">
      <img src="" alt="">
    </div>
    <div class="text">
      <h1 class="title">Ayo Daftar ke</h1>
      <h1 class="title2">Nurul Fikri Balikpapan <span>!</span></h1>
      <h2 class="subtitle">Wujudkan generasi Islami yang berkompeten dan berakhlak mulia bersama kami di Nurul Fikri
        Balikpapan</h2>
      <div class="button">
        <a href="#">
          <a href="{{ route('register') }}" class="button2">Daftar Sekarang</a>
        </a>
      </div>
    </div>
  </section>

  <!-- tentang sekolah -->
  <section class="tentang-sekolah">
    <div class="container">
      <div class="image">
        <img src="../img/about.png" alt="Tentang Sekolah">
      </div>
      <div class="content">
        <h2>Sekolah <span>Qur'an</span> dan Karakter</h2>
        <p>
          <span>Nurul Fikri Balikpapan</span> berkomitmen membentuk Generasi Robbani yang cerdas, ceria, dan berakhlak
          mulia. Dengan
          pendidikan Islami yang ramah dan menyenangkan, kami menanamkan nilai-nilai agama, membiasakan budaya Islami,
          serta mendukung pengembangan potensi siswa.
        </p>
      </div>
    </div>
  </section>

  <!-- jenjang sekolah -->
  <section class="jenjang-sekolah">
    <h2>Jenjang Sekolah</h2>
    <div class="container">
      <div class="card">
        <img src="../img/KBTK.png" alt="TK">
        <div class="card-content">
          <div class="card-title">KB/TKIT Nurul Fikri Balikpapan</div>
          <div class="card-text">PPDB untuk jenjang TK.</div>
          <button class="btn-jjg">See More</button>
        </div>
      </div>

      <div class="card">
        <img src="../img/SDIT.png" alt="SD">
        <div class="card-content">
          <div class="card-title">SDIT Nurul Fikri Balikpapan</div>
          <div class="card-text">PPDB untuk jenjang SD.</div>
          <button class="btn-jjg">See More</button>
        </div>
      </div>

      <div class="card">
        <img src="../img/SMPIT.png" alt="SMP">
        <div class="card-content">
          <div class="card-title">SMPIT Nurul Fikri Balikpapan</div>
          <div class="card-text">PPDB untuk jenjang SMP.</div>
          <button class="btn-jjg">See More</button>
        </div>
      </div>
    </div>
    <h3>
      Cari Sekolah Qur'an dan Karakter beserta Membangun Generasi Berilmu, Berakhlak, dan Berdaya Saing dengan Cahaya
      Al-Qur'an? Ayo ke <span>Nurul Fikri Balikpapan</span>!
    </h3>
  </section>
</body>

</html>