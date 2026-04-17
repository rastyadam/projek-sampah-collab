<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Kantin Nusa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #4a90e2;
            --error-color: #e74c3c;
            --success-color: #2ecc71;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-card {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            transition: all 0.3s ease;
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
            position: relative;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
            font-size: 14px;
        }

        input, select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #eee;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
            box-sizing: border-box;
        }

        input:focus { border-color: var(--primary-color); outline: none; }

        .password-wrapper { position: relative; }

        .pw-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aaa;
        }

        .btn-main {
            width: 100%;
            padding: 14px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-main:hover { background: #357abd; }

        .alert {
            background: #fdeaea;
            color: var(--error-color);
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 13px;
            text-align: center;
            border: 1px solid #f5c6cb;
        }

        .alert-success {
            background: #eafff2;
            color: var(--success-color);
            border-color: #c3e6cb;
        }

        .toggle-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .toggle-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .hidden { display: none; }
    </style>
</head>
<body>

<div class="login-card">
    <div id="loginSection">
        <h2>Login Sistem</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any() || session('lockout'))
            <div class="alert" id="error-alert">
                {{ session('lockout') ? 'Terlalu banyak percobaan. Tunggu sebentar.' : $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label>Login Sebagai:</label>
                <select name="role" id="roleSelector" onchange="updateUI()">
                    <option value="siswa">Siswa</option>
                    <option value="admin">Admin</option>
                    <option value="penjual">Penjual</option>
                </select>
            </div>

            <div class="input-group">
                <label id="identitasLabel">NISN</label>
                <input type="text" name="identitas" id="identitasInput" placeholder="Masukkan NISN" required value="{{ old('identitas') }}">
            </div>

            <div class="input-group">
                <label>Password</label>
                <div class="password-wrapper">
                    <input type="password" name="password" class="passwordField" placeholder="Masukkan Password" required>
                    <i class="fa-solid fa-eye pw-icon" onclick="togglePassword(this)"></i>
                </div>
            </div>

            <button type="submit" class="btn-main" id="submitBtn">Masuk</button>
        </form>

        <div class="toggle-link">
            Belum punya akun? <a onclick="switchForm('register')">Daftar Siswa</a>
        </div>
    </div>

    <div id="registerSection" class="hidden">
        <h2>Daftar Siswa</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="hidden" name="role" value="siswa">

            <div class="input-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap Sesuai Absen" required>
            </div>

            <div class="input-group">
                <label>NISN</label>
                <input type="text" name="identitas" placeholder="Masukkan NISN" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <div class="password-wrapper">
                    <input type="password" name="password" class="passwordField" placeholder="Minimal 6 karakter" required>
                    <i class="fa-solid fa-eye pw-icon" onclick="togglePassword(this)"></i>
                </div>
            </div>

            <div class="input-group">
                <label>Konfirmasi Password</label>
                <div class="password-wrapper">
                    <input type="password" name="password_confirmation" class="passwordField" placeholder="Ulangi Password" required>
                </div>
            </div>

            <button type="submit" class="btn-main">Daftar Sekarang</button>
        </form>

        <div class="toggle-link">
            Sudah punya akun? <a onclick="switchForm('login')">Login di sini</a>
        </div>
    </div>
</div>

<script>
    // Ganti Form Login ke Register atau Sebaliknya
    function switchForm(type) {
        if(type === 'register') {
            document.getElementById('loginSection').classList.add('hidden');
            document.getElementById('registerSection').classList.remove('hidden');
        } else {
            document.getElementById('registerSection').classList.add('hidden');
            document.getElementById('loginSection').classList.remove('hidden');
        }
    }

    // Update Label Login
    function updateUI() {
        const role = document.getElementById('roleSelector').value;
        const label = document.getElementById('identitasLabel');
        const input = document.getElementById('identitasInput');
        const config = {
            siswa: { label: 'NISN', placeholder: 'Masukkan NISN' },
            admin: { label: 'Kode Admin', placeholder: 'Masukkan Kode Admin' },
            penjual: { label: 'Nama Penjual', placeholder: 'Masukkan Nama Penjual' }
        };
        label.innerText = config[role].label;
        input.placeholder = config[role].placeholder;
    }

    // Show/Hide Password
    function togglePassword(btn) {
        const input = btn.parentElement.querySelector('input');
        if (input.type === 'password') {
            input.type = 'text';
            btn.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            input.type = 'password';
            btn.classList.replace('fa-eye-slash', 'fa-eye');
        }
    }

    // Timer Lockout
    @if(session('lockout'))
        (function() {
            let timeLeft = 60;
            const btn = document.getElementById('submitBtn');
            btn.disabled = true;
            const timer = setInterval(() => {
                btn.innerText = `Terkunci (${timeLeft}s)`;
                timeLeft--;
                if (timeLeft < 0) {
                    clearInterval(timer);
                    btn.disabled = false;
                    btn.innerText = 'Masuk';
                }
            }, 1000);
        })();
    @endif
</script>

</body>
</html>