<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <style>
    /* Custom Styles */
    body {
      background-color: lightgray;
    }

    .signup-form {
      max-width: 400px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }

    .signup-form h2 {
      color: blue;
      margin-bottom: 30px;
    }

    .form-control:focus {
      border-color: lightgray;
      box-shadow: none;
    }

    .signup-form .btn-primary {
      background-color: blue;
      border-color: blue;
    }

    .signup-form .btn-primary:hover {
      background-color: darkblue;
      border-color: darkblue;
    }

    .login-link {
      color: black;
    }

    .login-link:hover {
      color: blue;
      text-decoration: none;
    }
  </style>
</head>
<body>
@include('navbar')
  <div class="container">
    <div class="signup-form">
      <h2>Sign Up</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password">
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
        <p class="text-center mt-3">Already have an account? <a href="/login" class="login-link">Login here</a></p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
