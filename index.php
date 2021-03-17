<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.80.0" />
  <title>Fixed top navbar example · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/" />

  <!-- Bootstrap core CSS -->
  <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Fontawesome CSS -->
  <link href="/assets/libs/fontawesome/css/all.min.css" rel="stylesheet" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json" />
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3" />
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico" />
  <meta name="theme-color" content="#7952b3" />

  <link rel="stylesheet" href="/assets/css/app.css" />
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">CI3Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown-1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown-1">
              <li><a href="/admin-category.html" class="dropdown-item">Kategori</a> </li>
              <li><a href="/admin-product.html" class="dropdown-item">Produk</a> </li>
              <li><a href="/admin-order.html" class="dropdown-item">Order</a> </li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/cart.html" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart (0)</a>
          </li>
          <li class="nav-item">
            <a href="/login.html" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="/register.html" class="nav-link">Register</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown-2">
              <li>
                <a href="/profile.html" class="dropdown-item">Profile</a>
              </li>
              <li><a href="/orders.html" class="dropdown-item">Orders</a></li>
              <li><a href="#" class="dropdown-item">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container">

  </main>

  <script src="/assets/libs/jquery/jquery-3.6.0.min.js"></script>
  <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>