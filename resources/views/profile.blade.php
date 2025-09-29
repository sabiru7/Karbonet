<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Pelanggan - MyLangganan</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #0B5345;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
    }
    .navbar {
      background: #1E8449 !important;
    }
    .profile-card {
      background: #145A32;
      border-radius: 12px;
      box-shadow: 0px 4px 15px rgba(0,0,0,0.5);
      padding: 25px;
      text-align: center;
    }
    .profile-card img {
      border: 3px solid #2ECC71;
    }
    .highlight {
      color: #2ECC71;
      font-weight: 600;
    }
    .subscription-box {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }
    .subscription-box img {
      width: 40px;
      margin-bottom: 10px;
    }
    .promo-banner {
      background: linear-gradient(135deg, #27AE60, #145A32);
      border-radius: 10px;
      padding: 25px;
      color: #fff;
      text-align: center;
    }
    footer {
      margin-top: 40px;
      padding: 15px 0;
      background: rgba(0,0,0,0.7);
      text-align: center;
      font-size: 14px;
      color: #bbb;
    }
    table {
      color: #fff;
    }
    table thead {
      color: #2ECC71;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">🌐 MyLangganan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Tagihan</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Paket Saya</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Promo</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Bantuan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Container -->
  <div class="container mt-4">
    <div class="row">
      <!-- Profile -->
      <div class="col-lg-4 mb-4">
        <div class="profile-card">
          <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
               class="rounded-circle mb-3" alt="Foto Profil"/>
          <h4 class="mb-0">Budi Santoso</h4>
          <p>ID Pelanggan: <span class="highlight">123456789</span></p>
          <p>Paket: <span class="highlight">Premium 100 Mbps</span></p>
          <button class="btn btn-success w-100 my-2">📄 Lihat Tagihan</button>
          <button class="btn btn-outline-light w-100 my-2">⚡ Ubah Paket</button>
        </div>
      </div>

      <!-- Ringkasan Layanan & Lainnya -->
      <div class="col-lg-8">
        <div class="row g-3">
          <div class="col-md-4">
            <div class="subscription-box text-center">
              <img src="https://img.icons8.com/ios-filled/100/2ECC71/wifi.png" alt="Internet">
              <h6>Internet</h6>
              <p class="highlight fs-5">100 Mbps</p>
              <div class="progress">
                <div class="progress-bar bg-success" style="width: 70%"></div>
              </div>
              <small>700GB / 1TB</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="subscription-box text-center">
              <img src="https://img.icons8.com/ios-filled/100/2ECC71/tv.png" alt="TV">
              <h6>TV</h6>
              <p class="highlight fs-5">85 Channel</p>
              <span class="badge bg-success">Aktif</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="subscription-box text-center">
              <img src="https://img.icons8.com/ios-filled/100/2ECC71/phone.png" alt="Telepon">
              <h6>Telepon</h6>
              <p class="highlight fs-5">021-123456</p>
              <span class="badge bg-success">Aktif</span>
            </div>
          </div>
        </div>

        <!-- Riwayat Pembayaran -->
        <div class="subscription-box mt-4">
          <h5>💳 Riwayat Pembayaran</h5>
          <table class="table table-sm table-borderless mt-2">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>15 Sep 2025</td>
                <td>Rp 350.000</td>
                <td><span class="badge bg-success">Berhasil</span></td>
              </tr>
              <tr>
                <td>15 Agu 2025</td>
                <td>Rp 350.000</td>
                <td><span class="badge bg-success">Berhasil</span></td>
              </tr>
              <tr>
                <td>15 Jul 2025</td>
                <td>Rp 350.000</td>
                <td><span class="badge bg-success">Berhasil</span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Promo -->
        <div class="promo-banner mt-4">
          <h4>🎉 Promo Spesial</h4>
          <p>Upgrade ke <b>200 Mbps</b> hanya tambah <span class="highlight">Rp 50.000/bulan</span>!</p>
          <button class="btn btn-light btn-sm">Upgrade Sekarang</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>© 2025 MyLangganan. All rights reserved.</footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
