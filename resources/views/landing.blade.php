<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page - KarboNet</title>
  <link rel="stylesheet" href="css/landing.css">
  <style>
    /* Tambahan CSS untuk navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #0B5345; /* hijau gelap biar konsisten */
      padding: 15px 30px;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    .navbar .logo {
      font-size: 20px;
      font-weight: bold;
      color: #fff;
    }
    .navbar .logo span {
      color: #2ECC71; /* hijau terang */
    }
    .navbar ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }
    .navbar ul li a {
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      transition: color 0.3s;
    }
    .navbar ul li a:hover {
      color: #2ECC71;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">METRO <span>KarboNet</span></div>
    <ul>
      <li><a href="#about">Tentang</a></li>
      <li><a href="#visi-misi">Visi Misi</a></li>
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#paket">Paket</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="header">
    <div class="logo">METRO <span>KarboNet</span></div>
    <h1>Internet Cepat dan Stabil<br>Untuk Bisnis Anda</h1>
    <p>Dapatkan pengalaman internet terbaik dengan layanan prima untuk mendukung produktivitas Anda.</p>
    <button class="btn">Lihat Paket</button>
  </header>

  <!-- Tentang dan Filosofi -->
  <section id="about" class="about">
    <div class="card">
      <h2>Tentang Kami</h2>
      <p>
        Kami adalah penyedia layanan internet yang berkomitmen untuk menghadirkan koneksi cepat,
        stabil, dan aman. Fokus kami adalah kepuasan pelanggan dan mendukung produktivitas bisnis
        dengan jaringan terbaik.
      </p>
    </div>
    <div class="card">
      <h2>Filosofi Nama</h2>
      <p>
        Nama KarboNet mencerminkan semangat energi tanpa henti seperti karbon yang menjadi sumber
        kekuatan. Kami percaya koneksi internet harus selalu tersedia dan mendukung segala aktivitas.
      </p>
    </div>
  </section>

  <!-- Visi dan Misi -->
  <section id="visi-misi" class="visi-misi">
    <h2>Visi dan Misi</h2>
    <div class="grid">
      <div class="box">Menjadi penyedia internet terdepan yang terpercaya untuk seluruh lapisan masyarakat.</div>
      <div class="box">Memberikan pelayanan prima, cepat tanggap, dan berkualitas untuk semua pelanggan.</div>
    </div>
  </section>

  <!-- Highlight -->
  <section class="highlight">
    <p>Solusi Internet Cepat, Stabil, dan Andal untuk Bisnis Anda!</p>
  </section>

  <!-- Layanan Kami -->
  <section id="layanan" class="layanan">
    <h2>Layanan Kami</h2>
    <div class="grid">
      <div class="box">Instalasi Cepat dan Mudah</div>
      <div class="box">Support Responsif 24/7</div>
      <div class="box">Jaringan Stabil & Aman</div>
    </div>
  </section>

  <!-- Paket Internet -->
  <section id="paket" class="paket">
    <h2>Paket Internet</h2>
    <div class="grid">
      <div class="box">
        <h3>Paket Ekonomis</h3>
        <p>Kecepatan 20 Mbps</p>
        <p>Harga Terjangkau</p>
      </div>
      <div class="box">
        <h3>Paket Standar</h3>
        <p>Kecepatan 50 Mbps</p>
        <p>Cocok untuk keluarga</p>
      </div>
      <div class="box">
        <h3>Paket Premium</h3>
        <p>Kecepatan 100 Mbps</p>
        <p>Untuk bisnis & gaming</p>
      </div>
    </div>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="kontak">
    <h2>Hubungi Kami</h2>
    <p>Email: support@karbonet.id | Telp: (021) 123-456</p>
  </section>

  <footer>
    <p>&copy; 2025 KarboNet. All Rights Reserved.</p>
  </footer>

  <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>
