<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seblak Teh Shanty - KantinNusa</title>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root { 
            --maroon-nusa: #800000; 
            --maroon-light: #a52a2a;
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
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.8)), 
                        url('https://images.unsplash.com/photo-1585032226651-759b368d7246?auto=format&fit=crop&w=1200');
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
            box-shadow: 0 20px 40px rgba(128,0,0,0.12);
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
            box-shadow: 0 10px 25px rgba(128,0,0,0.4);
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
                                onclick="checkoutWA()">
                            <i class="fab fa-whatsapp me-2"></i>Pesan ke WhatsApp
                        </button>
                    </div>
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
            <i class="fas fa-certificate me-1"></i> Terverifikasi KantinNusa
        </span>

        <h1 class="display-3" style="font-family: 'Playfair Display', serif; font-weight: 800;">
            Seblak <span class="text-warning">Teh Shanty</span>
        </h1>

        <p class="lead opacity-75 fw-bold">
            <i class="fas fa-map-marker-alt me-2 text-warning"></i>
            Kantin Samping <span class="badge bg-danger ms-1" style="font-size: 0.7rem;">Aula</span>
        </p>
    </div>
</section>

    <div class="container py-5">
        
        <div class="mb-5" data-aos="fade-up">
            <h3 class="section-title">Menu Seblak</h3>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card menu-item-card">
                        <div class="img-container">
                            <span class="badge-promo bg-danger text-white">BESTSELLER</span>
                            <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?auto=format&fit=crop&w=400" alt="Seblak Komplit">
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Seblak Komplit Gacor</h6>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="price-tag">Rp 15.000</span>
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
                            <img src="https://images.unsplash.com/photo-1598515214211-89d3c73ae83b?auto=format&fit=crop&w=400" alt="Seblak Tulang">
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Seblak Tulang Mercon</h6>
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
                            <img src="https://images.unsplash.com/photo-1626074353765-517a681e40be?auto=format&fit=crop&w=400" alt="Seblak Kerupuk">
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Seblak Kerupuk Pedas</h6>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="price-tag">Rp 10.000</span>
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

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card menu-item-card">
                        <div class="img-container">
                            <span class="badge-promo bg-warning text-dark">FAVORIT</span>
                            <img src="https://images.unsplash.com/photo-1544145945-f904253d0c7b?auto=format&fit=crop&w=400" alt="Seblak Mie">
                        </div>
                        <div class="p-3">
                            <h6 class="fw-bold mb-1 text-truncate">Seblak Mie Nyemek</h6>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="price-tag">Rp 10.000</span>
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

        <div class="mb-5" data-aos="fade-up">
            <h3 class="section-title">Minuman Segar</h3>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card menu-item-card">
                        <div class="img-container">
                            <span class="badge-promo bg-success text-white">FRESH</span>
                            <img src="https://images.unsplash.com/photo-1544145945-f904253d0c7b?auto=format&fit=crop&w=400" alt="Es Teh">
                        </div>
                        <div class="p-3 text-center">
                            <h6 class="fw-bold mb-1">Es Teh Manis Jumbo</h6>
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

<section class="container mb-5" data-aos="fade-up">
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="section-title">Testimoni Pelanggan</h3>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="review-card p-4 shadow-sm border-0 bg-white" style="border-radius: 25px;">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://i.pravatar.cc/150?u=rahel" class="rounded-circle me-3" width="45" height="45" alt="User">
                    <div>
                        <h6 class="fw-bold mb-0" style="font-size: 0.9rem;">Rizky Pratama</h6>
                        <small class="text-muted" style="font-size: 0.75rem;">Siswa XII RPL</small>
                    </div>
                </div>
                <div class="mb-2 text-warning" style="font-size: 0.8rem;">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="mb-0 text-muted" style="font-size: 0.85rem; line-height: 1.6;">
                    "Seblak Teh Shanty emang juara! Level pedasnya nagih banget, apalagi kencurnya kerasa banget. Paling gacor di kantin!"
                </p>
                <hr class="opacity-10">
                <div class="d-flex align-items-center text-success" style="font-size: 0.7rem; font-weight: 700;">
                    <i class="fas fa-check-circle me-1"></i> PEMBELI TERVERIFIKASI
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="review-card p-4 shadow-sm border-0 bg-white" style="border-radius: 25px;">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://i.pravatar.cc/150?u=sitti" class="rounded-circle me-3" width="45" height="45" alt="User">
                    <div>
                        <h6 class="fw-bold mb-0" style="font-size: 0.9rem;">Dinda Lestari</h6>
                        <small class="text-muted" style="font-size: 0.75rem;">Siswi X AKL</small>
                    </div>
                </div>
                <div class="mb-2 text-warning" style="font-size: 0.8rem;">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <p class="mb-0 text-muted" style="font-size: 0.85rem; line-height: 1.6;">
                    "Kuahnya kental dan bumbunya pas. Tiap jam istirahat pasti penuh, untung bisa pesan lewat web gini!"
                </p>
                <hr class="opacity-10">
                <div class="d-flex align-items-center text-success" style="font-size: 0.7rem; font-weight: 700;">
                    <i class="fas fa-check-circle me-1"></i> PEMBELI TERVERIFIKASI
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="text-center py-5 bg-white border-top">
        <div class="container">
            <img src="https://cdn-icons-png.flaticon.com/512/1990/1990427.png" width="40" alt="Logo" class="mb-3">
            <h5 class="fw-bold" style="color: var(--maroon-nusa);">KantinNusa</h5>
            <p class="text-muted small">Solusi makan praktis di lingkungan sekolah.<br>&copy; 2026 Seblak Teh Shanty - SMKN 1 Purwosari</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        let cart = [];
        const cartBadge = document.querySelector('.cart-count');
        const addButtons = document.querySelectorAll('.btn-add');

        addButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const card = this.closest('.card');
                const name = card.querySelector('h6').innerText;
                const priceText = card.querySelector('.price-tag').innerText;
                const price = parseInt(priceText.replace(/[^0-9]/g, ''));
                
                addToCart(name, price);

                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-check me-2"></i>Ditambah';
                this.classList.replace('btn-add', 'btn-success');
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.classList.replace('btn-success', 'btn-add');
                }, 1000);
            });
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
                listContainer.innerHTML = `<div class="text-center py-4 text-muted"><i class="fas fa-box-open fa-3x mb-3 opacity-25"></i><p>Keranjangmu masih kosong</p></div>`;
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
                               placeholder="Catatan: Gak pake sawi, extra pedas, dll..." 
                               onchange="updateNote(${i}, this.value)" value="${item.note}">
                    </div>
                `;
            });
            document.getElementById('totalPrice').innerText = 'Rp ' + totalPrice.toLocaleString('id-ID');
        }

        function checkoutWA() {
            let text = "*PESANAN BARU - SEBLAK TEH SHANTY*%0A%0A";
            cart.forEach((item, i) => {
                text += `${i+1}. *${item.name}* (${item.qty}x)%0A`;
                if(item.note) text += `   _Cat: ${item.note}_%0A`;
            });
            const total = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
            text += `%0A*TOTAL BAYAR: Rp ${total.toLocaleString('id-ID')}*%0A%0AMohon diproses ya Teh!`;
            // Ganti nomor di bawah ini dengan nomor WA Teh Shanty yang asli
            window.open(`https://wa.me/628123456789?text=${text}`, '_blank');
        }
    </script>
</body>
</html>