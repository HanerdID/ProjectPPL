<!DOCTYPE html>
<html>

<head>
  <title>SIMONIKA Login</title>
  <style>
    body {
      background: linear-gradient(90deg, #FFB6C1, #87CEEB);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: #fff;
      padding: 60px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .login-container h1 {
      font-size: 30px;
      color: #333;
      text-decoration: underline;
      letter-spacing: 10px;
      text-align: center;
      line-height: 10px;
    }

    .login-container p {
      font-weight: 600;
    }

    .form-group {
      margin: 20px 0;
    }

    .form-group input {
      width: 92%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn-login {
      background: #1E90FF;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-left: 100px;
    }

    .btn-reset-password {
      background: #FF6347;
      color: #fff;
      padding: 10px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h1>SIMONIKA</h1>
    <p>Sistem Monitoring Mahasiswa Informatika</p>
    <form action="process-login.php" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="example@gmail.com" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <button class="btn-reset-password" type="button">Reset Password</button>
        <button class="btn-login" type="submit">Login</button>
      </div>
    </form>
  </div>
</body>

</html>