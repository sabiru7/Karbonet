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
