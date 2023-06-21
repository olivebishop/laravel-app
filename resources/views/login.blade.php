<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <style>
    /* Custom Styles */
    body {
      background-color: lightgray;
    }

    .login-form {
      max-width: 400px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }

    .login-form h2 {
      color: blue;
      margin-bottom: 30px;
    }

    .form-control:focus {
      border-color: lightgray;
      box-shadow: none;
    }

    .login-form .btn-primary {
      background-color: blue;
      border-color: blue;
    }

    .login-form .btn-primary:hover {
      background-color: darkblue;
      border-color: darkblue;
    }

    .signup-link {
      color: black;
    }

    .signup-link:hover {
      color: blue;
      text-decoration: none;
    }
  </style>
</head>
<body>
@include('navbar')
  <div class="container">
    <div class="login-form">
      
      <h2>Login</h2>
      <form action="/process_login" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <p class="text-center mt-3">Don't have an account? <a href="/signup" class="signup-link">Sign up here</a></p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
