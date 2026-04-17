<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa - Kantin Nusa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --maroon-nusa: #7a1d1d;
            --gold-nusa: #f39c12;
            --cream-nusa: #fdfaf5;
        }
        body { background-color: var(--cream-nusa); font-family: 'Inter', 'Segoe UI', sans-serif; }
        
        .main-container { max-width: 900px; margin: 50px auto; padding: 0 20px; }
        
        .profile-header { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 30px; border-top: 5px solid var(--maroon-nusa); }
        .sub-header { text-transform: uppercase; color: #888; letter-spacing: 1px; font-size: 0.8rem; font-weight: 600; margin-bottom: 5px; }
        .full-name { font-size: 2.2rem; font-weight: 700; color: var(--maroon-nusa); margin-bottom: 25px; }
        
        .info-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px 40px; }
        .data-label { text-transform: uppercase; color: #a0a0a0; font-size: 0.75rem; font-weight: 600; margin-bottom: 3px; }
        .data-value { font-weight: 500; color: #333; font-size: 0.95rem; }

        .section-title { font-size: 1.1rem; font-weight: 600; color: var(--maroon-nusa); margin-bottom: 15px; display: flex; align-items: center; }
        .section-title i { margin-right: 10px; font-size: 0.9rem; }
        
        .active-order-card { background: #fff; border-radius: 10px; padding: 20px 40px; box-shadow: 0 1px 5px rgba(0,0,0,0.03); margin-bottom: 30px; display: flex; align-items: center; }
        .order-icon-box { width: 50px; height: 50px; background: #f8f9fa; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 20px; border: 1px solid var(--gold-nusa); color: var(--maroon-nusa); }
        
        .order-progress { position: relative; width: 200px; height: 4px; background: #e0e0e0; border-radius: 2px; margin-right: 20px; }
        .order-progress::after { content: ''; position: absolute; left: 0; top: 0; width: 50%; height: 100%; background: var(--gold-nusa); border-radius: 2px; }
        .progress-point { width: 10px; height: 10px; background: #fff; border: 2px solid #e0e0e0; border-radius: 50%; position: absolute; top: -3px; }
        .progress-point.done { background: var(--gold-nusa); border-color: var(--gold-nusa); }
        .point-label { position: absolute; color: #888; font-size: 0.7rem; top: 12px; white-space: nowrap; transform: translateX(-50%); }

        .history-card { background: #fff; border-radius: 10px; padding: 10px 20px; box-shadow: 0 1px 5px rgba(0,0,0,0.03); }
        .history-item { display: flex; align-items: center; padding: 15px 0; border-bottom: 1px solid #f1f1f1; }
        .history-item:last-child { border-bottom: none; }
        .history-date { text-align: center; margin-right: 20px; color: #555; width: 40px;}
        .history-date .month { text-transform: uppercase; font-size: 0.7rem; font-weight: 600; color: #a0a0a0;}
        .history-date .day { font-size: 1.1rem; font-weight: 600; }
        .history-item-info { flex-grow: 1; }
        .item-title { font-weight: 500; color: #333; font-size: 0.95rem; }
        .item-meta { font-size: 0.8rem; color: #a0a0a0; }
        .history-price { font-weight: 600; color: var(--maroon-nusa); font-size: 0.95rem; }

        .btn-maroon { background-color: var(--maroon-nusa); color: white; border: none; }
        .btn-maroon:hover { background-color: #5e1616; color: white; }
        .btn-outline-maroon { border: 2px solid var(--maroon-nusa); color: var(--maroon-nusa); }
        .btn-outline-maroon:hover { background-color: var(--maroon-nusa); color: white; }
    </style>
</head>
<body>

<div class="main-container">
    <div class="profile-header">
        <div class="sub-header" style="color: var(--gold-nusa);">CURATED STUDENT PROFILE</div>
        <div class="full-name">{{ $nama }}</div> 
        <div class="info-grid">
            <div><div class="data-label">Email Address</div><div class="data-value">{{ $email }}</div></div>
            <div><div class="data-label">Student NISN</div><div class="data-value">{{ $nisn }}</div></div>
            <div><div class="data-label">Classroom</div><div class="data-value">{{ $kelas }} - {{ $jurusan }}</div></div>
            <div><div class="data-label">Academic Year</div><div class="data-value">2023/2024</div></div>
        </div>
    </div>

    <div class="section-title"><i class="fas fa-file-alt"></i> Pesanan Berjalan</div>
    <div class="active-order-card">
        <div class="order-icon-box"><i class="fas fa-hamburger"></i></div>
        <div class="flex-grow-1">
            <div class="fw-bold">Paket Ayam Bakar Madu</div>
            <div class="text-muted small">Order #CUR-9921</div>
        </div>
        <div class="order-progress">
            <div class="progress-point done" style="left: 0;"><span class="point-label">Diterima</span></div>
            <div class="progress-point done" style="left: 50%;"><span class="point-label" style="color: var(--maroon-nusa); font-weight: 600;">Dibuat</span></div>
            <div class="progress-point" style="left: 100%;"><span class="point-label">Siap Diambil</span></div>
        </div>
    </div>

    <div class="section-title">
        <i class="fas fa-history"></i> Riwayat Pesanan
        <a href="#" class="ms-auto text-decoration-none" style="font-size: 0.8rem; color: var(--gold-nusa);">Lihat Semua Arsip</a>
    </div>
    <div class="history-card">
        <div class="history-item">
            <div class="history-date"><div class="month">Oct</div><div class="day">24</div></div>
            <div class="history-item-info"><div class="item-title">Nasi Goreng Spesial + Telur</div><div class="item-meta">Kantin Utama • Tunai</div></div>
            <div class="history-price">Rp 18.500</div>
        </div>
        <div class="history-item">
            <div class="history-date"><div class="month">Oct</div><div class="day">22</div></div>
            <div class="history-item-info"><div class="item-title">Es Teh Manis & Batagor</div><div class="item-meta">Kantin Kejujuran • Kantin Nusa Wallet</div></div>
            <div class="history-price">Rp 12.000</div>
        </div>
    </div>

    <div class="d-flex gap-3 mt-4">
        <a href="{{ route('home') }}" class="btn btn-outline-maroon flex-fill">
            <i class="fas fa-home me-2"></i> Kembali ke Kantin Nusa
        </a>
        {{-- <form action="{{ route('logout') }}" method="POST" class="flex-fill">
            @csrf
            <button type="submit" class="btn btn-maroon w-100">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
            </button>
        </form> --}}
    </div>
</div>
</body>
</html>