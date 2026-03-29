<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Jajan Chiki - KantinNusa</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root { 
            /* TEMA WARNA GEPREK (ORANGE & RED) */
            --maroon-nusa: #d35400; /* Orange Tua */
            --maroon-light: #e67e22; /* Orange Terang */
            --gold-nusa: #ffc107;
            --bg-light: #fffaf5;
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
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.8)), 
                        url('https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?auto=format&fit=crop&w=1200');
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
            color: var(--maroon-nusa);
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
            box-shadow: 0 20px 40px rgba(211, 84, 0, 0.15);
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
            color: var(--maroon-nusa);
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

        /* Animasi saat Card di Hover */
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

        .menu-item-card:hover .rating-chip span {
            color: white;
        }

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
            background: var(--maroon-nusa);
            border-color: var(--maroon-nusa);
            color: white;
            transform: scale(1.02);
        }

        /* --- Floating Cart --- */
        .cart-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--maroon-nusa);
            color: white;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(211, 84, 0, 0.4);
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
            border: 2px solid var(--maroon-nusa);
        }

        /* --- Modal Keranjang Styling --- */
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
            .img-container { height: 150px; }
            .hero-store { border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; }
            .cart-float { width: 55px; height: 55px; bottom: 20px; right: 20px; }
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
                    <h5 class="fw-bold"><i class="fas fa-cart-shopping me-2" style="color: var(--maroon-nusa);"></i>Keranjang Belanja</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div id="cartDetailsList"></div>
                    
                    <div id="cartSummary" class="mt-4" style="display: none;">
                        <hr>
                        <div class="d-flex justify-content-between mb-3 px-2">
                            <span class="fw-bold">Total Bayar</span>
                            <span class="price-tag fs-5" id="totalPrice">Rp 0</span>
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
   

    <section class="hero-store">
        <a href="{{ url('/') }}" class="btn-back">
            <i class="fas fa-arrow-left me-2"></i> KEMBALI
        </a>

        <div class="hero-content text-center" data-aos="zoom-in">
            <span class="badge bg-danger mb-3 px-4 py-2 rounded-pill shadow-lg animate__animated animate__fadeInDown">
                <i class="fas fa-fire me-1 text-warning"></i> Pedasnya Nagih!
            </span>
            
            <h1 class="display-3" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; letter-spacing: -1px;">
                Warung <span style="color: var(--gold-nusa);">Jajan Chiki</span>
            </h1>
            
            <p class="lead fw-bold opacity-90">
                <i class="fas fa-map-marker-alt me-2 text-warning"></i>
                Area Kantin <span class="badge bg-light text-dark ms-1" style="font-size: 0.7rem; vertical-align: middle;">Dekat Lapangan</span>
            </p>
        </div>
    </section>

  <div class="container py-5">
        <div class="mb-5" data-aos="fade-up">
            <h3 class="section-title" style="color: #ffc107; border-left: 5px solid #ffc107; padding-left: 15px;">Snack Chiki Hits</h3>
            <div class="row g-4">
                
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card menu-item-card">
                        <div class="img-container">
                            <span class="badge-promo bg-warning text-dark">LEGEND</span>
                            <img src="https://images.unsplash.com/photo-1621447509323-570a162b2461?auto=format&fit=crop&w=400" alt="Chiki Balls">
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Chiki Balls Keju</h6>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="price-tag">Rp 8.000</span>
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
                            <img src="https://images.unsplash.com/photo-1566478431375-704332ca523f?auto=format&fit=crop&w=400" alt="Chitato">
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Chitato Sapi Panggang</h6>
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
                            <img src="https://images.unsplash.com/photo-1613919113640-25732ec5e61f?auto=format&fit=crop&w=400" alt="Piattos">
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Piattos Sambal Matah</h6>
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
                            <span class="badge-promo bg-danger text-white">PEDAS</span>
                            <img src="https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?auto=format&fit=crop&w=400" alt="Makaroni">
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Makaroni Daun Jeruk</h6>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="price-tag">Rp 5.000</span>
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
            <h3 class="section-title" style="color: #28a745; border-left: 5px solid #28a745; padding-left: 15px;">Minuman Dingin</h3>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card menu-item-card">
                        <div class="img-container">
                            <span class="badge-promo bg-success text-white">FRESH</span>
                            <img src="https://images.unsplash.com/photo-1622483767028-3f66f32aef97?auto=format&fit=crop&w=400" alt="Cola">
                        </div>
                        <div class="p-3 text-center">
                            <h6 class="fw-bold mb-1">Coca Cola Dingin</h6>
                            <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
                                <p class="price-tag mb-0">Rp 6.000</p>
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
                            <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?auto=format&fit=crop&w=400" alt="Teh Kotak">
                        </div>
                        <div class="p-3 text-center">
                            <h6 class="fw-bold mb-1">Teh Kotak Segar</h6>
                            <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
                                <p class="price-tag mb-0">Rp 4.000</p>
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
            </div>
        </div>

        <section class="mb-5" data-aos="fade-up">
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="section-title">Apa Kata Jajaners?</h3>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="review-card p-4 shadow-sm border-0 bg-white" style="border-radius: 25px;">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/150?u=rahel" class="rounded-circle me-3" width="45" height="45" alt="User">
                            <div>
                                <h6 class="fw-bold mb-0" style="font-size: 0.9rem;">Dimas Setiawan</h6>
                                <small class="text-muted" style="font-size: 0.75rem;">Penikmat Micin</small>
                            </div>
                        </div>
                        <div class="mb-2 text-warning" style="font-size: 0.8rem;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="mb-0 text-muted" style="font-size: 0.85rem; line-height: 1.6;">
                            "Stok chikinya lengkap banget, pengiriman ke kelas juga cepet. Pas banget buat ganjel perut pas jam kosong!"
                        </p>
                        <hr class="opacity-10">
                        <div class="d-flex align-items-center text-success" style="font-size: 0.7rem; font-weight: 700;">
                            <i class="fas fa-check-circle me-1"></i> PEMBELI TERVERIFIKASI
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
            <img src="https://cdn-icons-png.flaticon.com/512/2553/2553642.png" width="40" alt="Logo" class="mb-3">
            <h5 class="fw-bold" style="color: #ffc107;">SnackCenter</h5>
            <p class="text-muted small">Pusat jajan receh tapi kece.<br>&copy; 2026 Jajan Kuy - SMKN 1 Purwosari</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
       AOS.init({ duration: 800, once: true });

        let cart = [];
        const cartBadge = document.querySelector('.cart-count');

        // Event Listener untuk tombol Tambah
        document.addEventListener('click', function(e) {
            if(e.target && (e.target.classList.contains('btn-add') || e.target.parentElement.classList.contains('btn-add'))) {
                const btn = e.target.classList.contains('btn-add') ? e.target : e.target.parentElement;
                const card = btn.closest('.card');
                const name = card.querySelector('h6').innerText;
                const price = parseInt(card.querySelector('.price-tag').innerText.replace(/[^0-9]/g, ''));
                
                addToCart(name, price);

                // Efek Feedbacks
                const originalText = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check me-2"></i>Ditambah';
                btn.classList.replace('btn-add', 'btn-success');
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.classList.replace('btn-success', 'btn-add');
                }, 1000);
            }
        });

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

        function renderCart() {
            const listContainer = document.getElementById('cartDetailsList');
            const summary = document.getElementById('cartSummary');
            const totalQty = cart.reduce((total, item) => total + item.qty, 0);
            cartBadge.innerText = totalQty;
            
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
                    <div class="cart-item-row">
                        <i class="fas fa-times btn-remove-item" onclick="removeItem(${i})"></i>
                        <div class="fw-bold mb-1">${item.name}</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <button class="btn-qty shadow-sm" onclick="changeQty(${i}, -1)">-</button>
                                <span class="fw-bold px-2">${item.qty}</span>
                                <button class="btn-qty shadow-sm" onclick="changeQty(${i}, 1)">+</button>
                            </div>
                            <span class="price-tag small">Rp ${subtotal.toLocaleString('id-ID')}</span>
                        </div>
                        <input type="text" class="form-control note-input mt-2" 
                               placeholder="Catatan..." 
                               onchange="updateNote(${i}, this.value)" value="${item.note}">
                    </div>
                `;
            });
            document.getElementById('totalPrice').innerText = 'Rp ' + totalPrice.toLocaleString('id-ID');
        }

        // FUNGSI CHECKOUT BARU (INTERNAL)
        function checkoutInternal() {
            if(cart.length === 0) return;

            // 1. Buat Ringkasan Struk
            let detailHTML = `<div class="fw-bold mb-2 text-uppercase" style="letter-spacing:1px; color:#800000;">Detail Pesanan:</div>`;
            cart.forEach((item, i) => {
                detailHTML += `
                    <div class="d-flex justify-content-between border-bottom border-light py-1">
                        <span>${item.qty}x ${item.name}</span>
                        <span>Rp ${(item.price * item.qty).toLocaleString('id-ID')}</span>
                    </div>`;
                if(item.note) detailHTML += `<div class="text-muted mb-2 small" style="font-style:italic;">* ${item.note}</div>`;
            });
            
            const total = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
            detailHTML += `
                <div class="d-flex justify-content-between fw-bold mt-2 pt-2 text-danger" style="font-size:1rem;">
                    <span>TOTAL BAYAR</span>
                    <span>Rp ${total.toLocaleString('id-ID')}</span>
                </div>`;

            // 2. Masukkan ke dalam Modal Konfirmasi
            document.getElementById('invoiceDetail').innerHTML = detailHTML;

            // 3. Tutup Modal Keranjang & Buka Modal Sukses
            const cartModalElem = document.getElementById('cartModal');
            const successModalElem = document.getElementById('successModal');
            
            bootstrap.Modal.getInstance(cartModalElem).hide();
            
            setTimeout(() => {
                const modalS = new bootstrap.Modal(successModalElem);
                modalS.show();
            }, 400);

            // 4. Reset Keranjang
            cart = [];
            renderCart();
        }
    </script>
</body>
</html>