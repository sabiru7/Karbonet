<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karbonet - Internet Provider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        :root {
            --primary: #065F46;
            --secondary: #15803D;
            --accent: #16A34A;
            --light-green: #33754C;
            --dark: #1a2b47;
            --light: #f8f9fa;
        }
        
        body {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .brand-container {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }
        
        .brand-logo {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .brand-logo i {
            font-size: 50px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .brand-name {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .brand-tagline {
            font-weight: 500;
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .form-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .form-left {
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            padding: 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }
        
        .feature-list li {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
        }
        
        .feature-list i {
            background: rgba(255, 255, 255, 0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 18px;
        }
        
        .form-right {
            padding: 40px;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .form-title {
            color: var(--dark);
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .form-subtitle {
            color: #6c757d;
        }
        
        .form-card {
            display: none;
        }
        
        .form-card.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-control {
            border-radius: 50px;
            padding: 12px 25px;
            margin-bottom: 20px;
            border: 2px solid #e1e5eb;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 0.25rem rgba(22, 163, 74, 0.25);
        }
        
        .input-icon {
            position: relative;
        }
        
        .input-icon i {
            position: absolute;
            left: 20px;
            top: 14px;
            color: #6c757d;
        }
        
        .input-icon input {
            padding-left: 50px;
        }
        
        .btn-primary {
            background: linear-gradient(to right, var(--primary), var(--accent));
            border: none;
            color: white;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to right, var(--secondary), var(--light-green));
        }
        
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
        
        .form-toggle {
            color: #6c757d;
        }
        
        .form-toggle a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }
        
        .social-login {
            text-align: center;
            margin: 25px 0;
        }
        
        .social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            margin: 0 5px;
            color: white;
            font-size: 18px;
            transition: all 0.3s;
        }
        
        .social-btn:hover {
            transform: translateY(-3px);
        }
        
        .facebook {
            background: #3b5998;
        }
        
        .google {
            background: #dd4b39;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        
        .divider span {
            padding: 0 10px;
            color: #6c757d;
        }
        
        .password-toggle {
            position: absolute;
            right: 20px;
            top: 14px;
            cursor: pointer;
            color: #6c757d;
        }
        
        .form-check-input:checked {
            background-color: var(--accent);
            border-color: var(--accent);
        }
        
        @media (max-width: 992px) {
            .form-left {
                display: none;
            }
        }
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            min-width: 300px;
            animation: slideIn 0.3s forwards;
        }
        
        @keyframes slideIn {
            from { transform: translateX(100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
    </style>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            const showRegister = document.getElementById('show-register');
            const showLogin = document.getElementById('show-login');
            const formTitle = document.getElementById('form-title');
            const formSubtitle = document.getElementById('form-subtitle');
            
            // Password toggle functionality
            function setupPasswordToggle(passwordFieldId, toggleButtonId) {
                const passwordField = document.getElementById(passwordFieldId);
                const toggleButton = document.getElementById(toggleButtonId);
                
                toggleButton.addEventListener('click', function() {
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text';
                        toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
                    } else {
                        passwordField.type = 'password';
                        toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
                    }
                });
            }
            
            setupPasswordToggle('loginPassword', 'loginPasswordToggle');
            setupPasswordToggle('registerPassword', 'registerPasswordToggle');
            setupPasswordToggle('confirmPassword', 'confirmPasswordToggle');
            
            // Switch to Register Form
            showRegister.addEventListener('click', function(e) {
                e.preventDefault();
                loginForm.classList.remove('active');
                registerForm.classList.add('active');
                formTitle.textContent = 'Buat Akun Baru';
                formSubtitle.textContent = 'Daftar sekarang untuk menikmati layanan internet hijau';
            });
            
            // Switch to Login Form
            showLogin.addEventListener('click', function(e) {
                e.preventDefault();
                registerForm.classList.remove('active');
                loginForm.classList.add('active');
                formTitle.textContent = 'Masuk ke Akun Anda';
                formSubtitle.textContent = 'Selamat datang kembali! Silakan masuk untuk mengelola layanan Anda.';
            });
            
            // Login Form Validation
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const username = document.getElementById('loginUsername').value;
                const password = document.getElementById('loginPassword').value;
                
                if (username && password) {
                    // Simulate successful login
                    showNotification('Login berhasil! Selamat datang kembali.', 'success');
                    
                    // Clear form
                    this.reset();
                } else {
                    showNotification('Harap isi semua field yang diperlukan.', 'error');
                }
            });
            
            // Register Form Validation
            document.getElementById('registerForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const firstName = document.getElementById('firstName').value;
                const lastName = document.getElementById('lastName').value;
                const email = document.getElementById('registerEmail').value;
                const phone = document.getElementById('registerPhone').value;
                const password = document.getElementById('registerPassword').value;
                const confirmPassword = document.getElementById('confirmPassword').value;
                const termsAgree = document.getElementById('termsAgree').checked;
                
                if (!firstName || !lastName || !email || !phone || !password || !confirmPassword) {
                    showNotification('Harap isi semua field yang diperlukan.', 'error');
                    return;
                }
                
                if (password !== confirmPassword) {
                    showNotification('Kata sandi dan konfirmasi kata sandi tidak cocok.', 'error');
                    return;
                }
                
                if (!termsAgree) {
                    showNotification('Anda harus menyetujui Syarat & Ketentuan.', 'error');
                    return;
                }
                
                // Simulate successful registration
                showNotification('Pendaftaran berhasil! Selamat bergabung dengan GREENNET.', 'success');
                
                // Clear form
                this.reset();
                
                // Switch to login form after successful registration
                setTimeout(() => {
                    registerForm.classList.remove('active');
                    loginForm.classList.add('active');
                    formTitle.textContent = 'Masuk ke Akun Anda';
                    formSubtitle.textContent = 'Selamat datang kembali! Silakan masuk untuk mengelola layanan Anda.';
                }, 2000);
            });
            
            // Notification function
            function showNotification(message, type) {
                // Remove any existing notifications
                const existingAlert = document.querySelector('.notification');
                if (existingAlert) {
                    existingAlert.remove();
                }
                
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `alert alert-${type === 'success' ? 'success' : 'danger'} notification`;
                notification.innerHTML = `
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                
                document.body.appendChild(notification);
                
                // Auto dismiss after 3 seconds
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.remove();
                    }
                }, 3000);
            }
        });
    </script>
</body>
</html>