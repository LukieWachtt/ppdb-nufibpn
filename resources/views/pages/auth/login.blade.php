<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>
  <button class="back-button" onclick="window.history.back()"><</button>

  <div class="main-container">
    <div class="login-card">
      <div class="login-image">
        <img src="../img/login.png" alt="Login Image" />
      </div>

      <div class="login-form">
        <h2>Log In</h2>
        <form action="{{ route('login') }}" method="POST">
          @csrf

          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />

          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />

          <input type="checkbox" name="remember" hidden required checked>
          <button type="submit">Masuk</button>
        </form>
        <p>Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
      </div>
    </div>
  </div>
</body>
</html>
