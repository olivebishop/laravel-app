<!DOCTYPE html>
<html>
<head>
  <title>Swahili Dishes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <style>
    /* Custom Styles */
    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
    }

    nav li {
      margin-right: 20px;
      cursor: pointer;
    }

    .navbar-toggler {
      border: none;
      padding: 0;
      background-color: transparent;
      outline: none;
    }

    .navbar-toggler-icon {
      background-color: white;
    }

    .navbar-toggler:hover .navbar-toggler-icon {
      background-color: lightgray;
    }

    nav li:hover {
      color: blue;
    }

    hr {
      border-color: white;
    }

    .brand-text .blue-text {
      color: blue;
    }

    .brand-text .black-text {
      color: black;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/"><span class="brand-text"><span class="blue-text">Swahili</span><span class="black-text">Dishes</span>👨‍🍳</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/">home</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">about</a></li>
          <li class="nav-item"><a class="nav-link" href="/service">services</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact">contact</a></li>
          <li class="nav-item">
            <a class="btn btn-primary ms-3" href="/signup">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
