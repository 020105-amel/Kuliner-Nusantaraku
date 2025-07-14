<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Makanan Nusantara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to bottom right, rgba(26, 87, 118, 0.8), rgba(41, 128, 185, 0.8)), url('gambar/latar.jpg') no-repeat center center fixed;
    background-size: cover;  /* Agar gambar mencakup seluruh latar belakang */
    color: #f39c12;  /* Teks utama berwarna kuning keemasan */
    padding-top: 80px;
    line-height: 1.6;
  }

  .user-message {
    background-color: #fff3cd;
    color: #856404;
    padding: 8px;
    border-radius: 6px;
    margin-bottom: 5px;
  }

  .admin-message {
    background-color: #d1e7dd;
    color: #0f5132;
    font-style: italic;
    padding: 8px;
    border-radius: 6px;
    margin-bottom: 5px;
  }


  .navbar-custom {
    background: rgba(26, 87, 118, 0.9);  /* Navbar dengan warna biru laut gelap */
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
  }

  .navbar-brand {
    color: #f36838 !important;  /* Warna coral cerah untuk brand */
    font-weight: 600;
    font-size: 1.5rem;
  }

  .navbar-nav .nav-link {
    color: #f39c12 !important;  /* Warna kuning keemasan untuk teks navbar */
    margin-left: 1rem;
    transition: all 0.3s;
  }

  .navbar-nav .nav-link:hover {
    color: #f36838 !important;  /* Warna coral cerah saat hover */
    text-decoration: underline;
  }

  .nav-icon {
    margin-right: 6px;
  }

  /* Hover effect navbar */
  .navbar-nav .nav-item:hover {
    transform: scale(1.03);
  }

  /* Teks utama */
  h1, h2, h3, h4, h5, h6 {
    color: #16a085;  /* Warna teal cerah untuk judul */
  }

  p, li {
    color: #f39c12;  /* Warna kuning keemasan untuk teks */
  }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-egg-fried"></i> Makanan Nusantara</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#kategori">
            <i class="bi bi-grid nav-icon"></i> Kategori
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#unggulan">
            <i class="bi bi-star-fill nav-icon"></i> Unggulan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tentang">
            <i class="bi bi-info-circle nav-icon"></i> Tentang Kami
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="keranjang.php">
            <i class="bi bi-cart-fill nav-icon"></i> Keranjang
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kontak">
            <i class="bi bi-envelope nav-icon"></i> Kontak
          </a>
        </li>
        <?php if (isset($_SESSION['admin_login'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="bi bi-speedometer2 nav-icon"></i> Dashboard Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="logout.php">
              <i class="bi bi-box-arrow-right nav-icon"></i> Logout
            </a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <i class="bi bi-person-circle nav-icon"></i> Login Admin
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
