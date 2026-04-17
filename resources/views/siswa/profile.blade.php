<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa | Kantin Nusa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --maroon-nusa: #7a1d1d;
            --gold-nusa: #f39c12;
            --cream-nusa: #fdfaf5;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--cream-nusa);
            color: #333;
        }

        .profile-header-bg {
            background: linear-gradient(135deg, var(--maroon-nusa) 0%, #4a1111 100%);
            height: 200px;
            border-radius: 0 0 40px 40px;
        }

        .profile-card {
            margin-top: -100px;
            border-radius: 25px;
            border: none;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .avatar-wrapper {
            position: relative;
            margin-top: -70px;
            display: inline-block;
        }

        .img-avatar {
            width: 130px;
            height: 130px;
            border: 5px solid white;
            border-radius: 35px;
            object-fit: cover;
            background: white;
        }

        .info-box {
            background: white;
            border-radius: 20px;
        }

        .status-badge {
            font-size: 0.75rem;
            padding: 5px 12px;
            border-radius: 50px;
            font-weight: 600;
        }

        .order-item {
            background: #f9f9f9;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 12px;
            border-left: 5px solid transparent;
        }

        .status-proses { border-left-color: var(--gold-nusa); }
        .status-siap { border-left-color: #2ecc71; }
        .status-diambil { border-left-color: #bdc3c7; opacity: 0.8; }
    </style>
</head>
<body>

    <div class="profile-header-bg"></div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <div class="card profile-card" data-aos="fade-up">
                    <div class="card-body p-4 text-center">
                        <div class="avatar-wrapper">
                            <img src="https://ui-avatars.com/api/?name=Rahel+Exsella&background=7a1d1d&color=fff&size=130" class="img-avatar shadow" alt="User">
                        </div>
                        <h3 class="fw-bold mt-3 mb-1">Rahel Exsella</h3>
                        <p class="text-muted small mb-3"><i class="fas fa-graduation-cap me-2"></i>SMKN 1 Purwosari • Software Engineering</p>
                        <span class="badge bg-success-subtle text-success border border-success rounded-pill px-3 py-2">
                           <i class="fas fa-circle-check me-1"></i> Akun Aktif
                        </span>
                    </div>
                </div>

                <div class="row mt-4 g-4">
                    <div class="col-md-4" data-aos="fade-right">
                        <div class="info-box shadow-sm p-4 h-100">
                            <h5 class="fw-bold mb-4" style="color: var(--maroon-nusa);">
                                <i class="fas fa-id-card me-2 text-warning"></i>Info Akun
                            </h5>
                            <div class="mb-3 border-bottom pb-2">
                                <label class="small text-muted d-block">NISN</label>
                                <span class="fw-semibold">0082938122</span>
                            </div>
                            <div class="mb-3 border-bottom pb-2">
                                <label class="small text-muted d-block">Kelas</label>
                                <span class="fw-semibold">XII RPL 1</span>
                            </div>
                            <div class="mb-1">
                                <label class="small text-muted d-block">Email</label>
                                <span class="fw-semibold text-break">rahel@smkpws.sch.id</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8" data-aos="fade-left">
                        <div class="info-box shadow-sm p-4">
                            <h5 class="fw-bold mb-4" style="color: var(--maroon-nusa);">
                                <i class="fas fa-truck-ramp-box me-2 text-warning"></i>Tracking Pesanan
                            </h5>
                            
                            <div class="order-item status-proses d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fw-bold">Nasi Goreng Spesial</h6>
                                    <small class="text-muted">Kantin Mak Itam • 10:45 WIB</small>
                                </div>
                                <div class="text-end">
                                    <span class="status-badge bg-warning-subtle text-warning border border-warning">Diproses</span>
                                </div>
                            </div>

                            <div class="order-item status-siap d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fw-bold">Es Teh Manis</h6>
                                    <small class="text-muted">Kantin Bu Siti • 10:40 WIB</small>
                                </div>
                                <div class="text-end">
                                    <span class="status-badge bg-success-subtle text-success border border-success">Siap Diambil</span>
                                </div>
                            </div>

                            <div class="order-item status-diambil d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fw-bold">Pudding Susu</h6>
                                    <small class="text-muted">Pojok Puding • 09:15 WIB</small>
                                </div>
                                <div class="text-end">
                                    <span class="status-badge bg-secondary-subtle text-secondary border border-secondary">Sudah Diambil</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
</body>
</html>