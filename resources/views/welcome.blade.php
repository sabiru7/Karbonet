<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karbonet - Internet Provider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="brand-container">
            <div class="brand-logo">
                <i class="fas fa-wifi"></i>
            </div>
            <h1 class="brand-name">Karbonet</h1>
            <p class="brand-tagline">Internet Hijau untuk Masa Depan</p>
        </div>
        
        <div class="form-container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="form-left">
                        <h2>Selamat Datang di Karbonet</h2>
                        <p>Layanan internet ramah lingkungan dengan teknologi terdepan.</p>
                        
                        <ul class="feature-list">
                            <li><i class="fas fa-bolt"></i> Internet hingga 300 Mbps</li>
                            <li><i class="fas fa-globe"></i> Jangkauan hampir sekota depok</li>
                            <li><i class="fas fa-shield-alt"></i> Keamanan jaringan terjamin</li>
                        </ul>
                        
                        <div class="mt-auto">
                            <p>"Layanan internet Karbonet dengan dukungan pelanggan 24/7"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="form-right">
                        <div class="form-header">
                            <h3 class="form-title" id="form-title">Masuk ke Akun Anda</h3>
                            <p class="form-subtitle" id="form-subtitle">Selamat datang kembali! Silakan masuk untuk mengelola layanan Anda.</p>
                        </div>
                        
                        <!-- Login Form -->
                        <div class="form-card active" id="login-form">
                            <div class="social-login">
                                <a href="#" class="social-btn facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-btn google"><i class="fab fa-google"></i></a>
                                <a href="#" class="social-btn" style="background: var(--light-green);"><i class="fas fa-envelope"></i></a>
                            </div>
                            
                            <div class="divider">
                                <span>Atau gunakan akun Anda</span>
                            </div>
                            
                            <form id="loginForm">
                                <div class="input-icon">
                                    <i class="fas fa-user"></i>
                                    <input type="text" class="form-control" id="loginUsername" placeholder="Nama pengguna atau email" required>
                                </div>
                                
                                <div class="input-icon">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" class="form-control" id="loginPassword" placeholder="Kata sandi" required>
                                    <span class="password-toggle" id="loginPasswordToggle"><i class="fas fa-eye"></i></span>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberLogin">
                                        <label class="form-check-label" for="rememberLogin">
                                            Ingat saya
                                        </label>
                                    </div>
                                    <a href="#" class="text-decoration-none">Lupa kata sandi?</a>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </form>
                            
                            <div class="form-footer">
                                <p class="form-toggle">
                                    Belum punya akun? <a id="show-register">Daftar sekarang</a>
                                </p>
                            </div>
                        </div>
                        
                        <!-- Register Form -->
                        <div class="form-card" id="register-form">
                            <form id="registerForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-icon">
                                            <i class="fas fa-user"></i>
                                            <input type="text" class="form-control" id="firstName" placeholder="Nama depan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-icon">
                                            <i class="fas fa-user"></i>
                                            <input type="text" class="form-control" id="lastName" placeholder="Nama belakang" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="input-icon">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" class="form-control" id="registerEmail" placeholder="Alamat email" required>
                                </div>
                                
                                <div class="input-icon">
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" class="form-control" id="registerPhone" placeholder="Nomor telepon" required>
                                </div>
                                
                                <div class="input-icon">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" class="form-control" id="registerPassword" placeholder="Kata sandi" required>
                                    <span class="password-toggle" id="registerPasswordToggle"><i class="fas fa-eye"></i></span>
                                </div>
                                
                                <div class="input-icon">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi kata sandi" required>
                                    <span class="password-toggle" id="confirmPasswordToggle"><i class="fas fa-eye"></i></span>
                                </div>
                                
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="termsAgree" required>
                                    <label class="form-check-label" for="termsAgree">
                                        Saya menyetujui <a href="#" class="text-decoration-none">Syarat & Ketentuan</a> dan <a href="#" class="text-decoration-none">Kebijakan Privasi</a>
                                    </label>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </form>
                            
                            <div class="form-footer">
                                <p class="form-toggle">
                                    Sudah punya akun? <a id="show-login">Masuk di sini</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>