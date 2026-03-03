<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Nusa | Satu Klik, Sejuta Rasa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    
    <style>
        :root {
            --maroon-nusa: #7a1d1d;
            --gold-nusa: #f39c12;
            --cream-nusa: #fdfaf5;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--cream-nusa);
            overflow-x: hidden;
            color: #333;
        }

        /* --- NAVIGATION --- */
        .navbar {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.8) !important;
            transition: 0.4s;
            z-index: 1000;
        }

        /* --- HERO SECTION --- */
        .hero-header-nusa {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url("{{ asset('kantinusa.jpg') }}") no-repeat center center;
            background-size: cover;
            margin-top: -75px; /* Menembus Navbar */
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(74, 17, 17, 0.9) 0%, rgba(0, 0, 0, 0.4) 100%);
            z-index: 1;
        }

        .title-hero {
            font-size: clamp(40px, 5vw, 65px);
            font-weight: 800;
            color: white;
            line-height: 1.1;
        }

        .subtitle-hero {
            color: rgba(255,255,255,0.8);
            font-size: 1.1rem;
            margin: 20px 0 35px;
            max-width: 550px;
        }

        /* --- BUTTONS (EFEK MENDEM) --- */
        .btn-nusa-solid {
            background: var(--gold-nusa);
            color: white;
            padding: 15px 35px;
            border-radius: 50px;
            border: none;
            font-weight: 700;
            box-shadow: 0 6px 0 #d68910;
            transition: 0.1s;
        }

        .btn-nusa-solid:active {
            transform: translateY(4px);
            box-shadow: 0 2px 0 #d68910;
        }

        .btn-nusa-outline {
            background: transparent;
            color: white;
            padding: 15px 35px;
            border-radius: 50px;
            border: 2px solid white;
            font-weight: 700;
            transition: 0.3s;
        }

        .btn-nusa-outline:hover {
            background: white;
            color: var(--maroon-nusa);
        }

        /* --- FLOATING IMAGE & GLOW --- */
        .hero-image-container {
            position: relative;
            z-index: 5;
            text-align: center;
        }

        .glow-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 80%;
            background: radial-gradient(circle, rgba(243, 156, 18, 0.3) 0%, transparent 70%);
            filter: blur(50px);
            z-index: -1;
        }

        .img-siswi {
            max-width: 85%;
            filter: drop-shadow(0 0px 0px rgba(0,0,0,0.4));
            animation: float 6s ease-in-out infinite;
            border: 8px solid white;
            border-radius: 30px;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-25px) rotate(1deg); }
        }

        /* --- SIDEBAR --- */
        .sidebar {
            position: fixed;
            top: 0;
            right: -350px;
            width: 320px;
            height: 100%;
            background: linear-gradient(180deg, #7a1d1d 0%, #4a1111 100%);
            color: white;
            padding: 30px;
            transition: 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            z-index: 9999;
            box-shadow: -10px 0 30px rgba(0,0,0,0.3);
        }

        .sidebar.show { right: 0; }

        .menu-list { list-style: none; padding: 0; margin-top: 40px; }
        .menu-list li a {
            padding: 12px 15px;
            color: rgba(255,255,255,0.8);
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            transition: 0.3s;
            border-radius: 10px;
            margin-bottom: 5px;
        }

        .menu-list li:hover a { background: rgba(255,255,255,0.1); color: white; padding-left: 25px; }

        /* --- WAVES --- */
        .waves-box {
            margin-top: -100px;
            position: relative;
            z-index: 10;
        }

       /* --- STEP SECTION STYLE --- */
.step-card {
    background: white;
    padding: 40px 20px;
    border-radius: 30px;
    position: relative;
    transition: all 0.4s ease;
    border: 1px solid rgba(0,0,0,0.03);
    z-index: 2;
}

.step-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 20px 40px rgba(122, 29, 29, 0.1) !important;
}

.step-icon-wrapper {
    width: 80px;
    height: 80px;
    background: var(--cream-nusa);
    color: var(--gold-nusa);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    transition: 0.4s;
    border-bottom: 5px solid var(--gold-nusa);
}

.step-card:hover .step-icon-wrapper {
    background: var(--gold-nusa);
    color: white;
    transform: rotate(10deg);
}

/* Step 4 Khusus */
.main-step {
    background: var(--maroon-nusa) !important;
    color: white !important;
    border-bottom-color: var(--gold-nusa) !important;
}

/* Angka Urutan */
.step-number {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 2.5rem;
    font-weight: 800;
    color: rgba(0,0,0,0.05);
    line-height: 1;
    transition: 0.4s;
}

.step-card:hover .step-number {
    color: var(--gold-nusa);
    opacity: 0.2;
}



        /* Container Lingkaran */
.profile-img-wrapper {
    width: 95px;
    height: 95px;
    border-radius: 50%; /* Ini kunci lingkarannya */
    border: 3px solid rgba(255, 255, 255, 0.2);
    overflow: hidden; /* Memotong gambar yang keluar jalur */
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--maroon-nusa);
    transition: 0.4s ease;
}

/* Gambar di dalam lingkaran */
.img-admin {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Biar gambar gak penyet/lonjong */
}

/* Efek Hover Lingkaran */
.profile-img-wrapper:hover {
    transform: scale(1.05);
    border-color: var(--gold-nusa);
    box-shadow: 0 0 20px rgba(243, 156, 18, 0.4);
}

/* Penyesuaian Indikator Online */
.indicator-online {
    transform: translate(-5px, -5px); /* Geser dikit biar pas di lengkungan bawah */
    z-index: 2;
}

/* Tulisan kecil di bawah Nama */
small {
    display: block;
    letter-spacing: 0.5px;
}
/* --- ABOUT SECTION ENHANCEMENT --- */
.image-wrapper-nusa {
    position: relative;
    z-index: 2;
    transition: all 0.5s ease;
}

.main-img-nusa {
    border: 8px solid white;
    transition: 0.5s;
    object-fit: cover;
}

.main-img-nusa:hover {
    transform: translateY(-5px) rotate(1deg);
}

/* Dekorasi Bulat di Belakang */
.shape-blob {
    position: absolute;
    top: -20px;
    left: -20px;
    width: 300px;
    height: 300px;
    background: var(--gold-nusa);
    opacity: 0.1;
    border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
    z-index: 1;
    animation: blob-anim 10s infinite alternate linear;
}

.shape-blob-2 {
    position: absolute;
    bottom: -30px;
    right: 20px;
    width: 200px;
    height: 200px;
    background: var(--maroon-nusa);
    opacity: 0.05;
    border-radius: 50%;
    z-index: 1;
}

@keyframes blob-anim {
    from { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; }
    to { border-radius: 60% 40% 30% 70% / 50% 60% 40% 60%; }
}

/* Badge Melayang (Kiri Atas) */
.floating-badge {
    position: absolute;
    top: -30px;
    left: -30px;
    background: white;
    padding: 12px 20px;
    border-radius: 20px;
    z-index: 10;
    display: flex;
    align-items: center;
    gap: 12px;
}

.icon-box-badge {
    width: 45px;
    height: 45px;
    background: rgba(243, 156, 18, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

/* Card Stats (Kanan Bawah) */
.floating-stats {
    position: absolute;
    bottom: 20px;
    right: -20px;
    background: white;
    padding: 10px 18px;
    border-radius: 50px;
    z-index: 10;
    border-left: 4px solid #2ecc71;
}

.dot-live {
    width: 10px;
    height: 10px;
    background: #2ecc71;
    border-radius: 50%;
    animation: pulse-green 2s infinite;
}

@keyframes pulse-green {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(46, 204, 113, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(46, 204, 113, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(46, 204, 113, 0); }
}

/* Styling Tambahan */
.status-badge-revo {
    background: rgba(122, 29, 29, 0.1);
    color: var(--maroon-nusa);
    letter-spacing: 1px;
    font-weight: 700;
}

.card-feature {
    padding: 15px;
    background: white;
    border-radius: 18px;
    border: 1px solid rgba(0,0,0,0.05);
    transition: 0.3s;
}

.card-feature:hover {
    transform: translateY(-3px);
    border-color: var(--gold-nusa);
}

.icon-feature {
    width: 40px;
    height: 40px;
    color: white;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
}
/* Efek kartu agar rapi di slider */
.swiper-slide {
    height: auto; /* Biar tinggi kartu sama rata */
}

.card-menu {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05) !important;
}

.card-menu:hover {
    transform: translateY(-5px);
}

.price-badge {
    position: absolute;
    top: 0;
    right: 0;
    background: #ffc107;
    color: #000;
    font-weight: 800;
    padding: 8px 15px;
    border-bottom-left-radius: 20px;
    z-index: 10;
}

/* Warna titik navigasi swiper */
.swiper-pagination-bullet-active {
    background: var(--maroon-nusa) !important;
}

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top px-4">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#" style="color: var(--maroon-nusa);">
                <i class="fas fa-utensils me-2"></i> KANTIN NUSA
            </a>
            <button class="btn btn-primary rounded-pill px-4 border-0" style="background: var(--maroon-nusa);" onclick="openMenu()">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <section class="hero-header-nusa">
        <div class="hero-overlay"></div>
        <div class="container position-relative" style="z-index: 5;">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-7" data-aos="fade-right">
                    <span class="badge px-3 py-2 mb-3 bg-warning text-dark fw-bold">
                        <i class="fas fa-star me-2"></i> SATU KLIK, SEJUTA RASA
                    </span>
                    <h1 class="title-hero">Juaranya <span class="text-warning">Rasa</span>,<br>Juaranya <span style="color: var(--gold-nusa);">Gaya.</span></h1>
                    <p class="subtitle-hero">
                        Modernisasikan lidahmu bersama <b>Kantin Nusa</b>. Nikmati hidangan legendaris sekolah dengan sistem digital paling canggih. Pesan dari kelas, ambil tanpa malas!
                    </p>
                    
                    <div class="d-flex gap-3">
                        <button class="btn-nusa-solid">
                            <i class="fas fa-shopping-cart me-2"></i> Pesan Sekarang
                        </button>
                        <button class="btn-nusa-outline">
                            <i class="fas fa-wallet me-2"></i> Top Up Saldo
                        </button>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="zoom-in">
                    <div class="hero-image-container">
                        <div class="glow-circle"></div>
                        <img src="{{ asset('') }}" class="img-siswi" alt="Kantin Nusa">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="waves-box">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none" style="height: 100px; width: 100%;">
            <defs><path id="wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" /></defs>
            <g class="parallax">
                <use xlink:href="#wave" x="48" y="0" fill="rgba(122, 29, 29, 0.05)" />
                <use xlink:href="#wave" x="48" y="7" fill="#fdfaf5" />
            </g>
        </svg>
    </div>


   <div id="sidebar" class="sidebar">
    <div class="d-flex justify-content-end mb-4">
        <i class="fas fa-times fa-2x cursor-pointer" onclick="closeMenu()"></i>
    </div>

    <div class="text-center mb-4">
    <div class="position-relative d-inline-block">
        <div class="profile-img-wrapper shadow-lg">
            <img src="https://ui-avatars.com/api/?name=Admin+Kantin&background=f39c12&color=fff" class="img-admin" alt="Admin">
        </div>
        <span class="position-absolute bottom-0 end-0 bg-success border border-2 border-white rounded-circle p-2 indicator-online" title="Online"></span>
    </div>
    <h5 class="mt-3 mb-0 fw-bold text-white">Admin Kantin</h5>
    <small class="text-warning opacity-75 fw-medium">Administrator Utama</small>
</div>
<hr>

    <ul class="menu-list">
        <li>
            <a href="#"><i class="fas fa-home"></i> Beranda</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-utensils"></i> Menu Kantin</a>
        </li>
        
        <li>
            <a href="#" class="d-flex justify-content-between align-items-center">
                <span><i class="fas fa-shopping-basket"></i> Pesanan Masuk</span>
                <span class="badge bg-danger rounded-pill pulse-badge">5</span>
            </a>
        </li>

        <li>
            <a href="#"><i class="fas fa-wallet"></i> Transaksi Saldo</a>
        </li>

        <li>
            <a href="#"><i class="fas fa-percentage"></i> Promo & Diskon</a>
        </li>

        <li>
            <a href="#"><i class="fas fa-chart-line"></i> Laporan Penjualan</a>
        </li>

        
        <hr class="border-light opacity-25 my-4">
        
        <li>
            <a href="#" class="text-warning fw-bold">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </li>
    </ul>
</div>

<section class="container py-5 my-5">
    <div class="row align-items-center g-5">
        
        <div class="col-md-5 position-relative" data-aos="zoom-in">
            <div class="shape-blob shadow-lg"></div>
            <div class="shape-blob-2 shadow-sm"></div>
            
            <div class="floating-badge shadow-lg d-none d-md-flex" data-aos="fade-down" data-aos-delay="500">
                <div class="icon-box-badge">
                    <i class="fas fa-award text-warning"></i>
                </div>
                <div class="text-badge">
                    <span class="d-block fw-bold">#1 Kantin</span>
                    <small>Digital Terbaik</small>
                </div>
            </div>

            <div class="image-wrapper-nusa">
                <img src="{{ asset('kantinusa.jpg') }}" 
                     class="img-fluid rounded-5 shadow-lg main-img-nusa" 
                     alt="Kantin Nusa Digital">
            </div>

            <div class="floating-stats shadow-lg d-none d-md-block" data-aos="fade-up" data-aos-delay="700">
                <div class="d-flex align-items-center gap-2">
                    <div class="dot-live"></div>
                    <span class="fw-bold" style="font-size: 0.8rem;">120+ Pesanan Hari Ini</span>
                </div>
            </div>
        </div>

        <div class="col-md-7" data-aos="fade-left">
            <div class="ps-md-4">
                <span class="badge px-3 py-2 mb-3 status-badge-revo">
                    <i class="fas fa-rocket me-2"></i>REVOLUSI KANTIN
                </span>
                <h2 class="display-6 fw-bold mb-4" style="color: var(--maroon-nusa); line-height: 1.3;">
                    Modernisasi Rasa <span class="text-warning">Nusantara</span> <br>dalam Genggaman
                </h2>
                <p class="text-dark opacity-75 mb-4" style="font-size: 1.1rem; line-height: 1.7;">
                    <strong>Kantin Nusa</strong> bukan sekadar aplikasi pemesanan. Kami adalah jembatan yang menghubungkan kenyamanan teknologi modern dengan kelezatan warisan kuliner Indonesia.
                </p>
                
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="card-feature shadow-sm h-100">
                            <div class="d-flex align-items-center">
                                <div class="icon-feature bg-warning"><i class="fas fa-bolt"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Pesanan Instan</h6>
                                    <small class="text-muted">Pesan dari kelas</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-feature shadow-sm h-100">
                            <div class="d-flex align-items-center">
                                <div class="icon-feature bg-danger"><i class="fas fa-hand-holding-heart"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Bayar Tanpa Ribet</h6>
                                    <small class="text-muted">Cashless via Saldo</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-feature shadow-sm h-100">
                            <div class="d-flex align-items-center">
                                <div class="icon-feature bg-success"><i class="fas fa-apple-alt"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Nutrisi Terjaga</h6>
                                    <small class="text-muted">Higienis & Sehat</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-feature shadow-sm h-100">
                            <div class="d-flex align-items-center">
                                <div class="icon-feature bg-primary"><i class="fas fa-chart-pie"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Laporan Real-time</h6>
                                    <small class="text-muted">Pantau pengeluaran</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-feature shadow-sm h-100">
                            <div class="d-flex align-items-center">
                                <div class="icon-feature bg-info text-white"><i class="fas fa-running"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Bebas Antre</h6>
                                    <small class="text-muted">Ambil tanpa nunggu</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-feature shadow-sm h-100">
                            <div class="d-flex align-items-center">
                                <div class="icon-feature bg-secondary"><i class="fas fa-ticket-alt"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Diskon Pelajar</h6>
                                    <small class="text-muted">Banyak promo seru</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> </div>
        </div>
    </div>
</section>

   <section class="container py-5 my-5 position-relative">
    <div class="text-center mb-5" data-aos="fade-up">
        <span class="badge px-3 py-2 mb-2 bg-warning text-dark fw-bold rounded-pill">HOW IT WORKS</span>
        <h2 class="display-5 fw-bold" style="color: var(--maroon-nusa);">Gak Pake <span class="text-warning">Antre</span></h2>
        <p class="text-muted mx-auto" style="max-width: 500px;">Nikmati kemudahan pesan makan hanya dengan 4 langkah praktis tanpa perlu berdesakan.</p>
    </div>

    <div class="row g-4 text-center position-relative">
        <div class="step-line d-none d-lg-block"></div>

        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="step-card">
                <div class="step-number">01</div>
                <div class="step-icon-wrapper">
                    <i class="fas fa-search fa-2x"></i>
                </div>
                <h5 class="fw-bold mt-4 mb-2">Pilih Menu</h5>
                <p class="small text-muted">Cek menu favoritmu hari ini melalui aplikasi.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="step-card">
                <div class="step-number">02</div>
                <div class="step-icon-wrapper">
                    <i class="fas fa-credit-card fa-2x"></i>
                </div>
                <h5 class="fw-bold mt-4 mb-2">Bayar Digital</h5>
                <p class="small text-muted">Transaksi aman dan cepat dengan saldo digital.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="step-card">
                <div class="step-number">03</div>
                <div class="step-icon-wrapper">
                    <i class="fas fa-concierge-bell fa-2x"></i>
                </div>
                <h5 class="fw-bold mt-4 mb-2">Tunggu Notif</h5>
                <p class="small text-muted">Santai di kelas sampai ada notif pesanan siap.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="step-card active">
                <div class="step-number">04</div>
                <div class="step-icon-wrapper main-step">
                    <i class="fas fa-utensils fa-2x"></i>
                </div>
                <h5 class="fw-bold mt-4 mb-2">Ambil & Makan</h5>
                <p class="small text-muted">Ambil di loket khusus tanpa perlu mengantre.</p>
            </div>
        </div>
    </div>
</section>
<section class="container py-5 mb-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <span class="badge px-3 py-2 mb-2" style="background: rgba(243, 156, 18, 0.1); color: #f39c12; font-weight: 600; letter-spacing: 1px;">HIDANGAN TERLARIS</span>
        <h2 class="display-5 fw-bold" style="color: var(--maroon-nusa);">Menu Favorit <span class="text-warning">Hari Ini</span></h2>
        <p class="text-muted">Nikmati menu pilihan terbaik dari Stan Bu Siti & rekan-rekan.</p>
    </div>

    <div class="swiper menuSwiper pb-5" data-aos="fade-up">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-menu">
                    <div class="position-relative overflow-hidden">
                        <img src="https://img.freepik.com/free-photo/nasi-goreng-indonesian-fried-rice-with-shrimp-crackers-and-fried-egg_114579-2280.jpg" class="card-img-top img-hover" alt="Nasi Goreng" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3 shadow-sm"><i class="fas fa-fire me-1"></i> Terlaris</span>
                        <span class="price-badge">Rp 15k</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1">Nasi Goreng Spesial</h6>
                        <p class="text-muted small mb-3"><i class="fas fa-store me-1 text-danger"></i> Stan Bu Siti</p>
                        <button class="btn btn-nusa-outline w-100 rounded-pill btn-sm fw-bold">Tambah</button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-menu">
                    <div class="position-relative overflow-hidden">
                        <img src="https://img.freepik.com/free-photo/bakso-indonesian-meatball-soup-served-with-noodles-and-tofu_114579-2283.jpg" class="card-img-top img-hover" alt="Bakso" style="height: 200px; object-fit: cover;">
                        <span class="price-badge">Rp 12k</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1">Bakso Urat Mantap</h6>
                        <p class="text-muted small mb-3"><i class="fas fa-store me-1 text-danger"></i> Bakso Pak Kumis</p>
                        <button class="btn btn-nusa-outline w-100 rounded-pill btn-sm fw-bold">Tambah</button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-menu">
                    <div class="position-relative overflow-hidden">
                        <img src="https://img.freepik.com/free-photo/iced-tea-with-lemon_144627-18349.jpg" class="card-img-top img-hover" alt="Es Teh" style="height: 200px; object-fit: cover;">
                        <span class="price-badge">Rp 5k</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1">Es Teh Manis Segar</h6>
                        <p class="text-muted small mb-3"><i class="fas fa-store me-1 text-danger"></i> Kedai Minum</p>
                        <button class="btn btn-nusa-outline w-100 rounded-pill btn-sm fw-bold">Tambah</button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-menu">
                    <div class="position-relative overflow-hidden">
                        <img src="https://img.freepik.com/free-photo/traditional-indonesian-food-ayam-geprek_114579-2285.jpg" class="card-img-top img-hover" alt="Ayam Geprek" style="height: 200px; object-fit: cover;">
                        <span class="price-badge">Rp 13k</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1">Ayam Geprek Lv. 5</h6>
                        <p class="text-muted small mb-3"><i class="fas fa-store me-1 text-danger"></i> Ayam Juara</p>
                        <button class="btn btn-nusa-outline w-100 rounded-pill btn-sm fw-bold">Tambah</button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 card-menu">
                    <div class="position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1630384066242-17a17833c147?auto=format&fit=crop&w=500" class="card-img-top img-hover" alt="Mie Ayam" style="height: 200px; object-fit: cover;">
                        <span class="price-badge">Rp 10k</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1">Mie Ayam Ceker</h6>
                        <p class="text-muted small mb-3"><i class="fas fa-store me-1 text-danger"></i> Mie Ayam Solo</p>
                        <button class="btn btn-nusa-outline w-100 rounded-pill btn-sm fw-bold">Tambah</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="text-center mt-4">
        <a href="#" class="btn btn-warning px-5 py-3 rounded-pill fw-bold shadow-sm text-white">
            Lihat Semua Menu <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
        function openMenu() { document.getElementById("sidebar").classList.add("show"); }
        function closeMenu() { document.getElementById("sidebar").classList.remove("show"); }
        function scrollMenu(val) {
    const container = document.getElementById('menuContainer');
    container.scrollBy({
        left: val,
        behavior: 'smooth'
    });
}
    </script>
    <script>
  var swiper = new Swiper(".menuSwiper", {
    slidesPerView: 2,         // Di HP muncul 2 kartu
    spaceBetween: 20,         // Jarak antar kartu
    loop: true,               // Terus muter (Infinity loop)
    grabCursor: true,         // Kursor berubah jadi tangan (bisa ditarik)
    autoplay: {
      delay: 3000,            // Geser tiap 3 detik
      disableOnInteraction: false, // Tetap auto-play meski sudah digeser manual
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,        // Titik-titik bawah bisa diklik
    },
    breakpoints: {
      768: { slidesPerView: 3 }, // Di Tablet muncul 3
      1024: { slidesPerView: 4 } // Di PC muncul 4
    },
  });
</script>
</body>
</html>