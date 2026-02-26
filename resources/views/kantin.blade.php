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
            background: url("{{ asset('images/bg-hero-makanan.jpg') }}") no-repeat center center;
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

        /* --- CARDS --- */
        .card-product {
            border: none;
            border-radius: 20px;
            transition: 0.4s;
            overflow: hidden;
        }

        .card-product:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(122, 29, 29, 0.1) !important;
        }

        .step-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transition: 0.3s;
            border-bottom: 5px solid var(--maroon-nusa);
        }

        .step-icon:hover {
            background: var(--gold-nusa);
            color: white !important;
            transform: scale(1.1) rotate(5deg);
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

    <section class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold" style="color: var(--maroon-nusa);">Gak Pake <span class="text-warning">Antre</span></h2>
            <p class="text-muted">Cara baru makan enak di sekolah.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="step-icon"><i class="fas fa-search fa-2x text-warning"></i></div>
                <h5 class="fw-bold">Pilih Menu</h5>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="step-icon"><i class="fas fa-credit-card fa-2x text-warning"></i></div>
                <h5 class="fw-bold">Bayar Digital</h5>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="step-icon"><i class="fas fa-concierge-bell fa-2x text-warning"></i></div>
                <h5 class="fw-bold">Tunggu Notif</h5>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                <div class="step-icon" style="background: var(--maroon-nusa);"><i class="fas fa-utensils fa-2x text-white"></i></div>
                <h5 class="fw-bold">Ambil & Makan</h5>
            </div>
        </div>
    </section>

   <div id="sidebar" class="sidebar">
    <div class="d-flex justify-content-end mb-4">
        <i class="fas fa-times fa-2x cursor-pointer" onclick="closeMenu()"></i>
    </div>

    <div class="text-center mb-4">
        <div class="position-relative d-inline-block">
            <img src="https://ui-avatars.com/api/?name=Admin+Kantin&background=f39c12&color=fff" class="profile-circle shadow" width="90">
            <span class="position-absolute bottom-0 end-0 bg-success border border-2 border-white rounded-circle p-2" title="Online"></span>
        </div>
        <h5 class="mt-3 mb-0 fw-bold">Admin Kantin</h5>
        <small class="opacity-75">Satu Klik, Sejuta Rasa</small>
    </div>

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

        <li>
            <a href="#"><i class="fas fa-history"></i> Riwayat Pesanan</a>
        </li>
        
        <hr class="border-light opacity-25 my-4">
        
        <li>
            <a href="#" class="text-warning fw-bold">
                <i class="fas fa-sign-out-alt"></i> Keluar Sistem
            </a>
        </li>
    </ul>
</div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
        function openMenu() { document.getElementById("sidebar").classList.add("show"); }
        function closeMenu() { document.getElementById("sidebar").classList.remove("show"); }
    </script>
</body>
</html>