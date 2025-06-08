<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign_in</title>
  <link rel="stylesheet" href="css/sign_in.css" />
</head>
<body>
  <button class="back-button" onclick="window.history.back()"><</button>

  <div class="main-container">
    <div class="Sign_in-card">
      <div class="Sign_in-image">
        <img src="../img/sign_in.png" alt="Sign_in Image" />
      </div>

      <div class="Sign_in-form">
        <h2>Sign In</h2>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
          @csrf

          <label for="name">Nama</label>
          <input type="text" id="name" name="name" required />

          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />

          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />

          <label for="password" title="Ulangi password anda">Konfirmasi password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" required title="Ulangi password anda"/>

          <input type="checkbox" name="remember" hidden required checked>
          <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>
