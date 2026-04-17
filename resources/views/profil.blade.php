<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa - Kantin Nusa Premium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --maroon-nusa: #7a1d1d;
            --maroon-light: #a32a2a;
            --gold-nusa: #f39c12;
            --cream-nusa: #fbfbfb;
            --glass: rgba(255, 255, 255, 0.9);
            --shadow-soft: 0 20px 40px rgba(0,0,0,0.05);
        }

        body { 
            background-color: var(--cream-nusa); 
            background-image: 
                radial-gradient(at 0% 0%, rgba(122, 29, 29, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(243, 156, 18, 0.05) 0px, transparent 50%);
            font-family: 'Plus Jakarta Sans', sans-serif; 
            color: #2d3436;
            min-height: 100vh;
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .main-container { 
            max-width: 850px; 
            margin: 50px auto; 
            padding: 0 25px; 
            animation: fadeInUp 0.8s ease-out;
        }
        
        .profile-header { 
            background: var(--glass);
            backdrop-filter: blur(15px);
            padding: 40px; 
            border-radius: 30px; 
            box-shadow: var(--shadow-soft); 
            margin-bottom: 35px; 
            border: 1px solid rgba(255, 255, 255, 1);
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 8px;
            background: linear-gradient(90deg, var(--maroon-nusa), var(--gold-nusa));
        }

        /* Tambahan Style Foto Profil */
        .profile-top-section {
            display: flex;
            align-items: center;
            gap: 25px;
            margin-bottom: 30px;
        }

        .profile-avatar-container {
            position: relative;
            flex-shrink: 0;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 25px;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .avatar-badge {
            position: absolute;
            bottom: -5px;
            right: -5px;
            background: var(--gold-nusa);
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            border: 3px solid white;
        }
        /* End Tambahan */
        
        .sub-header { 
            text-transform: uppercase; 
            color: var(--gold-nusa); 
            letter-spacing: 3px; 
            font-size: 0.75rem; 
            font-weight: 800; 
            margin-bottom: 5px; 
        }

        .full-name { 
            font-size: 2.2rem; 
            font-weight: 800; 
            color: var(--maroon-nusa); 
            letter-spacing: -1px;
            line-height: 1.1;
            margin-bottom: 0;
        }
        
        .info-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 20px 60px; 
        }

        .data-label { 
            text-transform: uppercase; 
            color: #b2bec3; 
            font-size: 0.7rem; 
            font-weight: 700; 
            margin-bottom: 6px; 
            letter-spacing: 1px;
        }

        .data-value { 
            font-weight: 700; 
            color: #2d3436; 
            font-size: 1.05rem; 
        }

        .section-title { 
            font-size: 1.2rem; 
            font-weight: 800; 
            color: var(--maroon-nusa); 
            margin: 45px 0 20px 5px; 
            display: flex; 
            align-items: center; 
        }

        .section-title i { margin-right: 12px; font-size: 1rem; color: var(--gold-nusa); }
        
        .active-order-card { 
            background: white; 
            border-radius: 25px; 
            padding: 30px 40px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.03); 
            border: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .active-order-card:hover { 
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.06);
        }

        .order-icon-box { 
            width: 65px; height: 65px; 
            background: #fff8f0; 
            border-radius: 20px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            margin-right: 25px; 
            border: 1px solid rgba(243, 156, 18, 0.2); 
            color: var(--gold-nusa);
            font-size: 1.6rem;
        }
        
        .order-progress { 
            position: relative; 
            width: 250px; 
            height: 8px; 
            background: #f1f1f1; 
            border-radius: 20px; 
            margin-right: 30px; 
        }

        .order-progress::after { 
            content: ''; 
            position: absolute; 
            left: 0; top: 0; width: 50%; height: 100%; 
            background: linear-gradient(90deg, var(--maroon-nusa), var(--gold-nusa)); 
            border-radius: 20px; 
            box-shadow: 0 2px 10px rgba(243, 156, 18, 0.3);
            animation: pulse 2s infinite ease-in-out;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }
        
        .progress-point { 
            width: 16px; height: 16px; 
            background: #fff; 
            border: 4px solid #eee; 
            border-radius: 50%; 
            position: absolute; 
            top: -4px; 
            z-index: 2;
        }

        .progress-point.done { 
            border-color: var(--gold-nusa); 
            background: white;
        }

        .point-label { 
            position: absolute; 
            color: #888; 
            font-size: 0.7rem; 
            top: 22px; 
            white-space: nowrap; 
            transform: translateX(-50%); 
            font-weight: 600;
        }

        .history-card { 
            background: white; 
            border-radius: 25px; 
            padding: 10px 30px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            border: 1px solid #f0f0f0;
        }

        .history-item { 
            display: flex; 
            align-items: center; 
            padding: 22px 0; 
            border-bottom: 1px solid #f8f8f8; 
            transition: transform 0.2s ease;
        }

        .history-item:last-child { border-bottom: none; }
        .history-item:hover { transform: scale(1.01); }

        .history-date { 
            text-align: center; 
            margin-right: 25px; 
            background: #f8f9fa;
            padding: 10px;
            border-radius: 15px;
            min-width: 60px;
        }

        .history-date .month { text-transform: uppercase; font-size: 0.65rem; font-weight: 800; color: #a0a0a0; }
        .history-date .day { font-size: 1.2rem; font-weight: 800; color: var(--maroon-nusa); line-height: 1; }
        
        .history-item-info { flex-grow: 1; }
        .item-title { font-weight: 700; color: #2d3436; font-size: 1rem; margin-bottom: 2px; }
        .item-meta { font-size: 0.8rem; color: #b2bec3; font-weight: 500; }
        .history-price { font-weight: 800; color: var(--maroon-nusa); font-size: 1.05rem; }

        .btn-nusa {
            padding: 16px 30px;
            border-radius: 18px;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-size: 0.95rem;
        }

        .btn-maroon { 
            background: linear-gradient(135deg, var(--maroon-nusa), var(--maroon-light)); 
            color: white; 
            border: none; 
            box-shadow: 0 10px 20px rgba(122, 29, 29, 0.15);
        }

        .btn-maroon:hover { 
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(122, 29, 29, 0.25);
        }

        .btn-outline-maroon { 
            border: 2px solid var(--maroon-nusa); 
            color: var(--maroon-nusa); 
            background: transparent;
        }

        .btn-outline-maroon:hover { 
            background: var(--maroon-nusa); 
            color: white; 
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .full-name { font-size: 1.8rem; }
            .info-grid { grid-template-columns: 1fr; gap: 20px; }
            .order-progress { display: none; }
            .profile-top-section { flex-direction: column; text-align: center; gap: 15px; }
        }
    </style>
</head>
<body>

<div class="main-container">
    <div class="profile-header">
        <div class="profile-top-section">
            <div class="profile-avatar-container">
                <img src="https://ui-avatars.com/api/?name={{ $nama }}&background=7a1d1d&color=fff&size=128" class="profile-avatar" alt="Avatar">
                <div class="avatar-badge"><i class="fas fa-check"></i></div>
            </div>
            <div>
                <div class="sub-header">CURATED STUDENT PROFILE</div>
                <div class="full-name">{{ $nama }}</div> 
            </div>
        </div>
        
        <div class="info-grid">
            <div>
                <div class="data-label"><i class="far fa-envelope me-1"></i> Email Address</div>
                <div class="data-value">{{ $email }}</div>
            </div>
            <div>
                <div class="data-label"><i class="far fa-id-badge me-1"></i> Student NISN</div>
                <div class="data-value">{{ $nisn }}</div>
            </div>
            <div>
                <div class="data-label"><i class="fas fa-graduation-cap me-1"></i> Classroom</div>
                <div class="data-value">{{ $kelas }} - {{ $jurusan }}</div>
            </div>
            <div>
                <div class="data-label"><i class="far fa-calendar-alt me-1"></i> Academic Year</div>
                <div class="data-value">2023/2024</div>
            </div>
        </div>
    </div>

    <div class="section-title"><i class="fas fa-utensils"></i> Pesanan Berjalan</div>
    <div class="active-order-card">
        <div class="order-icon-box">
            <i class="fas fa-hamburger"></i>
        </div>
        <div class="flex-grow-1">
            <div class="fw-800" style="font-weight: 800; font-size: 1.1rem;">Paket Ayam Bakar Madu</div>
            <div class="text-muted small">Order #CUR-9921 • <span class="text-success fw-bold">Sedang Diproses</span></div>
        </div>
        <div class="order-progress">
            <div class="progress-point done" style="left: 0;"><span class="point-label">Diterima</span></div>
            <div class="progress-point done" style="left: 50%;"><span class="point-label" style="color: var(--maroon-nusa); font-weight: 700;">Dibuat</span></div>
            <div class="progress-point" style="left: 100%;"><span class="point-label">Siap</span></div>
        </div>
    </div>

    <div class="section-title">
        <i class="fas fa-history"></i> Riwayat Pesanan
        <a href="#" class="ms-auto text-decoration-none" style="font-size: 0.85rem; color: var(--gold-nusa); font-weight: 700;">Lihat Semua <i class="fas fa-arrow-right ms-1"></i></a>
    </div>
    <div class="history-card">
        <div class="history-item">
            <div class="history-date">
                <div class="month">Oct</div>
                <div class="day">24</div>
            </div>
            <div class="history-item-info">
                <div class="item-title">Nasi Goreng Spesial + Telur</div>
                <div class="item-meta">Kantin Utama • Tunai</div>
            </div>
            <div class="history-price">Rp 18.500</div>
        </div>
        <div class="history-item">
            <div class="history-date">
                <div class="month">Oct</div>
                <div class="day">22</div>
            </div>
            <div class="history-item-info">
                <div class="item-title">Es Teh Manis & Batagor</div>
                <div class="item-meta">Kantin Kejujuran • Kantin Nusa Wallet</div>
            </div>
            <div class="history-price">Rp 12.000</div>
        </div>
    </div>

    <div class="d-flex gap-3 mt-5 mb-5">
        <a href="{{ route('home') }}" class="btn btn-nusa btn-outline-maroon flex-fill text-center text-decoration-none">
            <i class="fas fa-home me-2"></i> Beranda Kantin
        </a>
        <button class="btn btn-nusa btn-maroon flex-fill">
            <i class="fas fa-edit me-2"></i> Lengkapi Profil
        </button>
    </div>
</div>

</body>
</html>