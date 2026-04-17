<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dapoer Mbak Ros - KantinNusa</title>
    
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root { 
            --primary-ros: #2d5a27; /* Hijau Botol Sehat */
            --secondary-ros: #1e3d1a;
            --gold-nusa: #ffc107;
            --bg-light: #f8f9fa;
        }
        
        body { 
            background-color: var(--bg-light); 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            color: #2d3436;
            overflow-x: hidden;
        }

        /* --- Hero Section --- */
        .hero-store {
            height: 400px;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7)), 
                        url('https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=1200');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            border-bottom-left-radius: 60px;
            border-bottom-right-radius: 60px;
            position: relative;
        }

        .hero-content h1 {
            font-weight: 800;
            font-size: 3.5rem;
            text-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }

        .btn-back {
            position: absolute;
            top: 25px;
            left: 25px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            color: white;
            border-radius: 12px;
            padding: 8px 18px;
            text-decoration: none;
            font-weight: 600;
            border: 1px solid rgba(255,255,255,0.3);
            transition: 0.3s;
            z-index: 10;
        }

        .btn-back:hover {
            background: white;
            color: var(--primary-ros);
        }

        /* --- Menu Cards --- */
        .menu-item-card {
            border-radius: 28px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: none;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
        }
        
        .menu-item-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(45,90,39,0.12);
        }

        .img-container {
            position: relative;
            overflow: hidden;
            height: 200px;
        }

        .img-container img {
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .menu-item-card:hover .img-container img {
            transform: scale(1.1);
        }

        /* --- Badges & Tags --- */
        .badge-promo {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 6px 14px;
            border-radius: 12px;
            font-size: 0.7rem;
            font-weight: 800;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            z-index: 2;
        }

        .price-tag {
            color: var(--primary-ros);
            font-weight: 800;
            font-size: 1.1rem;
        }

        /* --- 🔥 SUPER COOL RATING STYLE --- */
        .rating-chip {
            background: rgba(255, 193, 7, 0.15);
            backdrop-filter: blur(4px);
            padding: 5px 12px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 6px;
            border: 1px solid rgba(255, 193, 7, 0.3);
            transition: all 0.4s ease;
        }

        .rating-chip i {
            color: var(--gold-nusa);
            font-size: 0.9rem;
            filter: drop-shadow(0 0 5px rgba(255, 193, 7, 0.6));
        }

        .rating-chip span {
            font-weight: 800;
            font-size: 0.85rem;
            color: #555;
        }

        .menu-item-card:hover .rating-chip {
            background: var(--gold-nusa);
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
        }

        .menu-item-card:hover .rating-chip i {
            color: white;
            animation: starSpin 0.6s ease-in-out;
            filter: drop-shadow(0 0 5px white);
        }

        .menu-item-card:hover .rating-chip span { color: white; }

        @keyframes starSpin {
            0% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.5); }
            100% { transform: rotate(360deg) scale(1); }
        }

        /* --- Buttons --- */
        .btn-add {
            background: var(--bg-light);
            border: 2px solid #eee;
            color: #444;
            font-weight: 700;
            border-radius: 15px;
            transition: 0.3s;
        }

        .btn-add:hover {
            background: var(--primary-ros);
            border-color: var(--primary-ros);
            color: white;
            transform: scale(1.02);
        }

        /* --- Floating Cart --- */
        .cart-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--primary-ros);
            color: white;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(45,90,39,0.4);
            z-index: 999;
            text-decoration: none;
            transition: 0.3s;
        }

        .cart-float:hover {
            transform: scale(1.1) rotate(-10deg);
            color: white;
        }

        .cart-count {
            position: absolute;
            top: 0;
            right: 0;
            background: var(--gold-nusa);
            color: black;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            font-size: 12px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--primary-ros);
        }

        .cart-item-row { background: #fdfdfd; border: 1px solid #eee; border-radius: 15px; padding: 12px; margin-bottom: 10px; position: relative; }
        .btn-qty { width: 28px; height: 28px; border-radius: 8px; border: 1px solid #ddd; background: white; font-weight: bold; }
        .note-input { font-size: 0.8rem; border: none; border-bottom: 1px dashed #ccc; border-radius: 0; padding: 2px 0; background: transparent; }
        .btn-remove-item { position: absolute; top: 10px; right: 10px; color: #dc3545; cursor: pointer; opacity: 0.7; }

        .section-title {
            position: relative;
            font-weight: 800;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 6px;
            background: var(--gold-nusa);
            border-radius: 10px;
        }

        @media (max-width: 576px) {
            .hero-content h1 { font-size: 2.2rem; }
            .hero-store { border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; }
        }
    </style>
</head>
<body>

   
  <a href="#" class="cart-float" data-bs-toggle="modal" data-bs-target="#cartModal">
        <i class="fas fa-shopping-basket fa-lg"></i>
        <span class="cart-count">0</span>
    </a>
<div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg" style="border-radius: 25px; border:none;">
            <div class="modal-header border-0">
                <h5 class="fw-bold">
                    <i class="fas fa-cart-shopping me-2" style="color: var(--maroon-nusa);"></i>Keranjang Belanja
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div id="cartDetailsList"></div>
                
                <div id="customerInfo" class="mt-4 px-2">
                    <hr>
                    <h6 class="fw-bold mb-3">Informasi Pemesan</h6>
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Nama Lengkap</label>
                        <input type="text" id="customerName" class="form-control rounded-pill border-light-subtle bg-light" placeholder="Masukkan nama Anda">
                    </div>
                    
                   <div class="mb-3">
    <label class="form-label small fw-bold">Nomor Antrean</label>
    <input type="text" id="tableNumber" class="form-control rounded-pill border-light-subtle bg-light fw-bold text-danger" readonly>
    <div class="form-text small" style="font-size: 0.7rem;">*Nomor antrean dibuat otomatis oleh sistem.</div>
</div>
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Metode Pembayaran</label>
                        <input type="text" id="paymentMethod" class="form-control rounded-pill border-light-subtle bg-light fw-bold" value="Tunai (Bayar di Kasir)" readonly>
                    </div>
                </div>

                <div id="cartSummary" class="mt-4" style="display: none;">
                    <hr>
                    <div class="d-flex justify-content-between mb-3 px-2">
                        <span class="fw-bold">Total Bayar</span>
                        <span class="price-tag fs-5 fw-bold text-danger" id="totalPrice">Rp 0</span>
                    </div>
                    <button class="btn w-100 py-3 rounded-pill fw-bold shadow-sm" 
                            style="background: var(--maroon-nusa); color: white;" 
                            onclick="checkoutInternal()">
                        <i class="fas fa-receipt me-2"></i>Konfirmasi Pesanan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="checkoutShopeeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-scrollable">
        <div class="modal-content" style="border-radius: 20px 20px 0 0; border:none; background: #f5f5f5;">
            <div class="modal-header bg-white sticky-top border-0 shadow-sm d-flex align-items-center justify-content-between">
                <button type="button" class="btn p-0" data-bs-dismiss="modal"><i class="fas fa-arrow-left fs-5"></i></button>
                <h5 class="fw-bold mb-0" style="font-size: 1.1rem;">Checkout</h5>
                <div style="width: 24px;"></div>
            </div>
            
            <div class="modal-body p-0">
                <div class="bg-white p-3 mb-2 d-flex align-items-center">
                    <i class="fas fa-map-marker-alt text-danger me-3 fs-4"></i>
                    <div style="font-size: 0.85rem;">
                        <div class="fw-bold">Alamat Pengambilan</div>
                        <div class="text-muted" id="checkoutIdentity">User | Nomor Antrean #001</div>
                        <div class="text-muted">Kantin Utama SMKN 1 Purwosari</div>
                    </div>
                </div>

                <div class="bg-white p-3 mb-2">
                    <div class="fw-bold mb-3" style="font-size: 0.9rem;">
                        <i class="fas fa-store me-2 text-danger"></i> KantinNusa - Dapur Bu Sitti
                    </div>
                    <div id="checkoutItemsList">
                        </div>
                    <div class="d-flex justify-content-between mt-3 pt-3 border-top">
                        <span class="text-muted small">Total Pesanan:</span>
                        <span class="fw-bold text-danger" id="checkoutSubtotal">Rp 0</span>
                    </div>
                </div>

                <div class="bg-white p-3 mb-2">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-bold" style="font-size: 0.9rem;"><i class="fas fa-wallet me-2 text-primary"></i> Metode Pembayaran</span>
                    </div>
                    <div class="p-2 border rounded-3 d-flex justify-content-between align-items-center" style="background: #fffcfb; border-color: #ee4d2d !important;">
                        <span class="small"><i class="fas fa-money-bill-wave text-success me-2"></i> Tunai (Bayar Langsung)</span>
                        <i class="fas fa-check-circle text-danger"></i>
                    </div>
                </div>

                <div class="bg-white p-3 mb-4">
                    <div class="fw-bold mb-2" style="font-size: 0.9rem;"><i class="fas fa-file-invoice-dollar me-2 text-warning"></i> Rincian Pembayaran</div>
                    <div class="d-flex justify-content-between text-muted mb-1 small">
                        <span>Subtotal Produk</span>
                        <span id="detailSubtotal">Rp 0</span>
                    </div>
                    <div class="d-flex justify-content-between text-muted mb-1 small">
                        <span>Biaya Layanan</span>
                        <span>Rp 0</span>
                    </div>
                    <div class="d-flex justify-content-between fw-bold mt-2 pt-2 border-top">
                        <span>Total Pembayaran</span>
                        <span class="text-danger fs-5" id="detailGrandTotal">Rp 0</span>
                    </div>
                </div>
            </div> 

            <div class="modal-footer bg-white border-top p-0 d-flex justify-content-end align-items-center overflow-hidden" style="height: 70px;">
                <div class="me-3 text-end">
                    <div class="small text-muted" style="font-size: 0.7rem;">Total Pembayaran</div>
                    <div class="fw-bold text-danger fs-5" id="footerTotal">Rp 0</div>
                </div>
                <button class="btn h-100 px-4 fw-bold text-white rounded-0" 
                        style="background: #ee4d2d; min-width: 150px; border:none;" 
                        onclick="processFinalOrder()">
                    Buat Pesanan
                </button>
            </div>
        </div>
    </div>
</div>
   <section class="hero-store">
    <a href="{{ url('/') }}" class="btn-back">
        <i class="fas fa-chevron-left me-1"></i> Kembali
    </a>

    <div class="hero-content text-center" data-aos="zoom-in">
        <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill shadow-sm" style="font-weight: 700;">
            <i class="fas fa-leaf me-1"></i> Hidangan Sehat & Premium
        </span>

        <h1 class="display-3" style="font-family: 'Playfair Display', serif; font-weight: 800;">
            Dapoer Mbak Ros
        </h1>

        <p class="lead opacity-75 fw-bold">
            <i class="fas fa-map-marker-alt me-2 text-warning"></i>
            Kantin Pusat <span class="badge bg-success ms-1" style="font-size: 0.7rem;">Gedung Timur</span>
        </p>
    </div>
</section>

    <div class="container py-5">
    
    <div class="mb-5" data-aos="fade-up">
        <h3 class="section-title" style="color: #d63384; border-left: 5px solid #d63384; padding-left: 15px;">Jajanan Kantin Hits</h3>
        <div class="row g-4">
            
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card menu-item-card">
                    <div class="img-container">
                        <span class="badge-promo bg-danger text-white">BESTSELLER</span>
                              <img src="{{ asset('images/sempol.jpg') }}" alt="sempol ayam">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-1 text-truncate">Sempol Ayam Jumbo</h6>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="price-tag">Rp 5.000</span>
                            <div class="rating-chip">
                                <i class="fas fa-star"></i>
                                <span>5.0</span>
                            </div>
                        </div>
                        <button class="btn btn-add w-100 py-2">
                            <i class="fas fa-cart-plus me-2"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card menu-item-card">
                    <div class="img-container">
                          <img src="{{ asset('images/basreng.jpg') }}" alt="basreng">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-1 text-truncate">Basreng Daun Jeruk</h6>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="price-tag">Rp 10.000</span>
                            <div class="rating-chip">
                                <i class="fas fa-star"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                        <button class="btn btn-add w-100 py-2">
                            <i class="fas fa-cart-plus me-2"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card menu-item-card">
                    <div class="img-container">
                        <span class="badge-promo bg-warning text-dark">HOT</span>
                              <img src="{{ asset('images/mie pedes.jpg') }}" alt="mie pedes">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-1 text-truncate">Mie Gacoan Level Up</h6>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="price-tag">Rp 12.000</span>
                            <div class="rating-chip">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <button class="btn btn-add w-100 py-2">
                            <i class="fas fa-cart-plus me-2"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card menu-item-card">
                    <div class="img-container">
                             <img src="{{ asset('images/cilk.jpg') }}" alt="cilok">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-1 text-truncate">Cilok Kuah Mercon</h6>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="price-tag">Rp 8.000</span>
                            <div class="rating-chip">
                                <i class="fas fa-star"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                        <button class="btn btn-add w-100 py-2">
                            <i class="fas fa-cart-plus me-2"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5" data-aos="fade-up">
        <h3 class="section-title" style="color: #fd7e14; border-left: 5px solid #fd7e14; padding-left: 15px;">Cemilan Favorit</h3>
        <div class="row g-4">
            
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card menu-item-card">
                    <div class="img-container">
                        <span class="badge-promo bg-success text-white">LUMER</span>
                          <img src="{{ asset('images/risol.jpg') }}" alt="cilok">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-1 text-truncate">Risol Mayo </h6>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="price-tag">Rp 2.500</span>
                            <div class="rating-chip">
                                <i class="fas fa-star"></i>
                                <span>5.0</span>
                            </div>
                        </div>
                        <button class="btn btn-add w-100 py-2">
                            <i class="fas fa-cart-plus me-2"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card menu-item-card">
                    <div class="img-container">
                          <img src="{{ asset('images/donat.jpg') }}" alt="cilok">
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-1 text-truncate">Donat Gula Halus</h6>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="price-tag">Rp 1.000</span>
                            <div class="rating-chip">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <button class="btn btn-add w-100 py-2">
                            <i class="fas fa-cart-plus me-2"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

           

    <div class="mb-5" data-aos="fade-up">
        <h3 class="section-title" style="color: #0d6efd; border-left: 5px solid #0d6efd; padding-left: 15px;">Minuman Segar</h3>
        <div class="row g-4">
            
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card menu-item-card">
                    <div class="img-container">
                        <span class="badge-promo bg-primary text-white">DINGIN</span>
                          <img src="{{ asset('images/capcin.jpg') }}" alt="cilok">
                    </div>
                    <div class="p-3 text-center">
                        <h6 class="fw-bold mb-1">Capcin (Cincau)</h6>
                        <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
                            <p class="price-tag mb-0">Rp 7.000</p>
                            <div class="rating-chip">
                                <i class="fas fa-star"></i>
                                <span>5.0</span>
                            </div>
                        </div>
                        <button class="btn btn-add w-100 py-2">
                            <i class="fas fa-cart-plus me-2"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

        

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card menu-item-card">
                    <div class="img-container">   <img src="{{ asset('images/jeruk.jpg') }}" alt="cilok">
                    </div>
                    <div class="p-3 text-center">
                        <h6 class="fw-bold mb-1">Es Jeruk Peras</h6>
                        <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
                            <p class="price-tag mb-0">Rp 5.000</p>
                            <div class="rating-chip">
                                <i class="fas fa-star"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                        <button class="btn btn-add w-100 py-2">
                            <i class="fas fa-cart-plus me-2"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg" style="border-radius: 25px; border:none;">
                <div class="modal-body text-center p-4 p-md-5">
                    <div class="mb-4">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 80px; height: 80px; background: #e8f5e9;">
                            <i class="fas fa-check-circle fa-4x" style="color: #28a745;"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-2">Pesanan Diterima!</h4>
                    <p class="text-muted mb-4 small">Silakan tunjukkan struk ini ke kasir Dapur Bu Sitti untuk proses pembayaran.</p>
                    
                    <div id="invoiceDetail" class="text-start p-3 rounded-4 mb-4" 
                         style="background: #fdfdfd; font-size: 0.85rem; border: 2px dashed #eee; font-family: 'Courier New', Courier, monospace;">
                    </div>

                    <button type="button" class="btn w-100 py-3 rounded-pill fw-bold text-white shadow-sm" 
                            style="background: var(--maroon-nusa);" data-bs-dismiss="modal">
                        Tutup & Pesan Lagi
                    </button>
                </div>
            </div>
        </div>
    </div>
<footer class="text-center py-5 bg-white border-top">
    <div class="container">
        <h5 class="fw-bold" style="color: #d63384;">SnackTime Kantin</h5>
        <p class="text-muted small">&copy; 2026 Jajanan Hits - SMKN 1 Purwosari</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true });

    let cart = [];
    const cartBadge = document.querySelector('.cart-count');

    // 1. EVENT LISTENER TAMBAH KE KERANJANG
    document.addEventListener('click', function(e) {
        if(e.target && (e.target.classList.contains('btn-add') || e.target.parentElement.classList.contains('btn-add'))) {
            const btn = e.target.classList.contains('btn-add') ? e.target : e.target.parentElement;
            const card = btn.closest('.card');
            const name = card.querySelector('h6').innerText;
            // Membersihkan string Rp dan titik agar menjadi angka murni
            const price = parseInt(card.querySelector('.price-tag').innerText.replace(/[^0-9]/g, ''));
            
            addToCart(name, price);

            // Efek Feedback Tombol
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-check me-2"></i>Ditambah';
            btn.classList.replace('btn-add', 'btn-success');
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.classList.replace('btn-success', 'btn-add');
            }, 1000);
        }
    });

    // 2. LOGIC DATA KERANJANG
    function addToCart(name, price) {
        const index = cart.findIndex(item => item.name === name);
        if (index > -1) {
            cart[index].qty++;
        } else {
            cart.push({ name, price, qty: 1, note: '' });
        }
        renderCart();
    }

    function changeQty(index, delta) {
        cart[index].qty += delta;
        if (cart[index].qty < 1) cart.splice(index, 1);
        renderCart();
    }

    function removeItem(index) {
        cart.splice(index, 1);
        renderCart();
    }

    function updateNote(index, val) {
        cart[index].note = val;
    }

    // 3. RENDER TAMPILAN KERANJANG (MODAL PERTAMA)
    function renderCart() {
        const listContainer = document.getElementById('cartDetailsList');
        const summary = document.getElementById('cartSummary');
        const totalQty = cart.reduce((total, item) => total + item.qty, 0);
        
        if(cartBadge) cartBadge.innerText = totalQty;
        
        if (cart.length === 0) {
            listContainer.innerHTML = `<div class="text-center py-4 text-muted"><i class="fas fa-box-open fa-3x mb-3 opacity-25"></i><p>Keranjang kosong</p></div>`;
            summary.style.display = 'none';
            return;
        }

        summary.style.display = 'block';
        listContainer.innerHTML = '';
        let totalPrice = 0;

        cart.forEach((item, i) => {
            const subtotal = item.price * item.qty;
            totalPrice += subtotal;
            listContainer.innerHTML += `
                <div class="cart-item-row mb-3 p-2 border-bottom">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="fw-bold">${item.name}</div>
                        <i class="fas fa-times text-danger cursor-pointer" onclick="removeItem(${i})"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn btn-sm btn-outline-secondary py-0 px-2" onclick="changeQty(${i}, -1)">-</button>
                            <span class="fw-bold">${item.qty}</span>
                            <button class="btn btn-sm btn-outline-secondary py-0 px-2" onclick="changeQty(${i}, 1)">+</button>
                        </div>
                        <span class="text-danger fw-bold">Rp ${subtotal.toLocaleString('id-ID')}</span>
                    </div>
                    <input type="text" class="form-control form-control-sm mt-2 bg-light" 
                           placeholder="Tambahkan catatan (ex: pedas)" 
                           onchange="updateNote(${i}, this.value)" value="${item.note}">
                </div>`;
        });
        document.getElementById('totalPrice').innerText = 'Rp ' + totalPrice.toLocaleString('id-ID');
    }

    // 4. FUNGSI PINDAH KE STRUK (CHECKOUT)
    function checkoutInternal() {
        const nameInput = document.getElementById('customerName');
        const antreanInput = document.getElementById('tableNumber');

        // Validasi: Harus isi nama
        if(!nameInput.value.trim()) {
            alert("Silakan masukkan nama pemesan terlebih dahulu!");
            nameInput.focus();
            return;
        }

        if(cart.length === 0) return;

        // Ambil Data Identitas
        const customerName = nameInput.value;
        const antrean = antreanInput ? antreanInput.value : "001";

        // Isi Data ke Modal Struk (Shopee Style)
        const checkoutList = document.getElementById('checkoutItemsList');
        const idLabel = document.getElementById('checkoutIdentity');
        
        if(idLabel) idLabel.innerText = `${customerName} | Antrean #${antrean}`;
        
        checkoutList.innerHTML = ''; 
        let subtotal = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.qty;
            subtotal += itemTotal;
            checkoutList.innerHTML += `
                <div class="d-flex justify-content-between mb-2" style="font-size: 0.85rem;">
                    <div>
                        <div class="fw-bold">${item.name}</div>
                        <div class="text-muted small">x${item.qty} ${item.note ? '('+item.note+')' : ''}</div>
                    </div>
                    <div class="fw-bold text-dark">Rp ${itemTotal.toLocaleString('id-ID')}</div>
                </div>`;
        });

        // Update Rincian Harga di Struk
        const biayaLayanan = 0; // Bisa diisi jika ada biaya admin
        const totalFinal = subtotal + biayaLayanan;

        document.getElementById('checkoutSubtotal').innerText = `Rp ${subtotal.toLocaleString('id-ID')}`;
        document.getElementById('detailSubtotal').innerText = `Rp ${subtotal.toLocaleString('id-ID')}`;
        document.getElementById('detailGrandTotal').innerText = `Rp ${totalFinal.toLocaleString('id-ID')}`;
        document.getElementById('footerTotal').innerText = `Rp ${totalFinal.toLocaleString('id-ID')}`;

        // Transisi Antar Modal
        const cartModalElem = document.getElementById('cartModal');
        const shopeeModalElem = document.getElementById('checkoutShopeeModal');
        
        const modalCart = bootstrap.Modal.getInstance(cartModalElem);
        if(modalCart) modalCart.hide();
        
        setTimeout(() => {
            const modalShopee = new bootstrap.Modal(shopeeModalElem);
            modalShopee.show();
        }, 400);
    }

    // 5. SELESAIKAN PESANAN
    function processFinalOrder() {
        alert('Terima kasih! Pesanan Anda telah diterima. Silakan selesaikan pembayaran di kasir.');
        // Opsional: Reset data
        cart = [];
        renderCart();
        location.reload(); 
    }
    // Variabel untuk menyimpan nomor antrean (Default mulai dari 1)
let currentQueueNumber = localStorage.getItem('lastQueueNumber') ? parseInt(localStorage.getItem('lastQueueNumber')) + 1 : 1;

// Fungsi untuk menampilkan nomor antrean dalam format 001, 002, dst
function formatQueueNumber(number) {
    return number.toString().padStart(3, '0');
}

// Fungsi untuk mengisi input nomor antrean secara otomatis
function updateQueueInput() {
    const inputAntrean = document.getElementById('tableNumber');
    if(inputAntrean) {
        inputAntrean.value = formatQueueNumber(currentQueueNumber);
    }
}

// Jalankan saat halaman pertama kali dibuka
window.onload = function() {
    updateQueueInput();
};

// MODIFIKASI: Fungsi saat tombol "Buat Pesanan" di struk diklik
function processFinalOrder() {
    alert('Pesanan Terkirim! Nomor Antrean Anda adalah: ' + formatQueueNumber(currentQueueNumber));

    // Simpan nomor terakhir ke memory browser agar antrean berikutnya nyambung
    localStorage.setItem('lastQueueNumber', currentQueueNumber);
    
    // Tambah nomor antrean untuk orang berikutnya
    currentQueueNumber++;
    
    // Reset tampilan
    cart = [];
    renderCart();
    document.getElementById('customerName').value = '';
    updateQueueInput(); // Update input ke nomor selanjutnya (misal dari 001 ke 002)

    // Tutup modal
    const shopeeModal = bootstrap.Modal.getInstance(document.getElementById('checkoutShopeeModal'));
    if(shopeeModal) shopeeModal.hide();
}
</script>
</body>
</html>