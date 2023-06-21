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

    .signup-form h1 {
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
  </style>
</head>
<body>
  @include('navbar')

  <div class="container">
    <div class="signup-form">
      
      <h1>Signup</h1>
      <form action="/process_signup" method="POST">
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control" name="username" placeholder="Enter username">
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" placeholder="Enter password">
        </div>
        <div class="mb-3">
          <input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
        </div>
      </form>
      <p>Do you have an account? <a href="/login">Login</a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
