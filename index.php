<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BaoBae.id</title>
    <!-- bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- mycss -->
    <link rel="stylesheet" href="./mycss.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- favicon -->
    <link rel="icon" href="./img/logo_baobae.png" type="image/x-icon">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- sweeralert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="home">
    <nav class="navbar navbar-expand-lg bg-color-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">BaoBae.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text" type="button" id="btnNav1" onclick="na(1)" aria-current="page" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" type="button" id="btnNav2" onclick="na(2)" href="#sec2">Kemitraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" type="button" id="btnNav3" onclick="na(3)" href="#sec3">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" type="button" id="btnNav4" onclick="na(4)" href="#sec6">Program</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="sec1">
        <div class="container pt-md-5 pt-3 pb-md-5">
            <div class="row">
                <div class="col-md-6 col-12 my-auto">
                    <div class="row mt-md-5 mt-3">
                        <div class="col-md-12">
                            <div class="w7 h1 text-color-primary">BaoBae.id</div>
                            <p class="text">
                                Selamat datang Calon Mitra Masa Depan
                            </p>
                            <button type="button" id="btnSec1" class="btn btn-hijau">Tentang Kami</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center col-12 position-absolute d-none d-md-block end-0">
                    <img src="./img/sec1.webp" id="img-s1">
                </div>
            </div>
        </div>
    </section>

    <section id="sec2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="card bg-color-primary text-center">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card h-100" style="background-color: transparent; border: none;">
                                            <div class="card-header" style="background-color: transparent; border: none;">
                                                <button type="button" class="btn btn-sec2 btn-hijau mb-3" style="border-radius: 10px;">Konsep Kemitraan</button>
                                            </div>
                                            <div class="card-body" style="background-color: transparent; border: none;">
                                                <span class="text-white">Mari pelajari cara bermitra dengan kami dan beberapa penjelasannya</span>
                                            </div>
                                            <div class="card-footer" style="background-color: transparent; border: none;">
                                                <a href="#" class="text-decoration-none text-white"><i>Pelajari lebih lanjut ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100" style="background-color: transparent; border: none;">
                                            <div class="card-header" style="background-color: transparent; border: none;">
                                                <button type="button" class="btn btn-sec2 btn-hijau mb-3" style="border-radius: 10px;">Cabang Kami</button>
                                            </div>
                                            <div class="card-body" style="background-color: transparent; border: none;">
                                                <span class="text-white"> Usaha bakpao ini, pertama kali beroperasi pada 22 Mei 2015 yang berlokasi di Palur, Solo. Menginjak akhir tahun 2024</span>
                                            </div>
                                            <div class="card-footer" style="background-color: transparent; border: none;">
                                                <a href="#" class="text-decoration-none text-white"><i>Pelajari lebih lanjut ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100" style="background-color: transparent; border: none;">
                                            <div class="card-header" style="background-color: transparent; border: none;">
                                                <button type="button" class="btn btn-sec2 btn-hijau mb-3" style="border-radius: 10px;">Financial Project</button>
                                            </div>
                                            <div class="card-body" style="background-color: transparent; border: none;">
                                                <span class="text-white">Proyeksi kemitraan dan gambaran penghasilan yang di dapat</span>
                                            </div>
                                            <div class="card-footer" style="background-color: transparent; border: none;">
                                                <a href="#" class="text-decoration-none text-white"><i>Pelajari lebih lanjut ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec3">
        <div class="container">
            <div class="row g-4">
                <!-- Sidebar buttons -->
                <div class="col-12 col-md-4">
                    <div class="d-flex flex-column gap-2">
                        <button type="button" id="btn1" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100 py-3" onclick="ct(1)">
                            <span class="text-truncate me-2">Tentang Baobae.id</span>
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <button type="button" id="btn2" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100 py-3" onclick="ct(2)">
                            <span class="text-truncate me-2">Cabang Kami</span>
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <button type="button" id="btn3" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100 py-3" onclick="ct(3)">
                            <span class="text-truncate me-2">Kilas Balik</span>
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <button type="button" id="btn4" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100 py-3" onclick="ct(4)">
                            <span class="text-truncate me-2">Ruang Produksi</span>
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <button type="button" id="btn5" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100 py-3" onclick="ct(5)">
                            <span class="text-truncate me-2">Dormitory / Asrama</span>
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <button type="button" id="btn6" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100 py-3" onclick="ct(6)">
                            <span class="text-truncate me-2">Paket Kemitraan</span>
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <button type="button" id="btn7" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100 py-3" onclick="ct(7)">
                            <span class="text-truncate me-2">Financial Projection</span>
                            <i class="fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>

                <!-- Content cards -->
                <div class="col-12 col-md-8">
                    <div class="card h-100" id="content1">
                        <div class="card-body text-center text2 p-4">
                            <div class="content-accordion">
                                <img src="./img/ac1.webp" alt="Tentang Baobae.id" class="img-fluid img-s3 mb-4 rounded">
                                <h3 class="mb-4">Tentang Baobae.id</h3>
                                <p class="mb-0">
                                    Selama satu dekade, Kami telah tumbuh menjadi simbol kepercayaan dan kelezatan dalam industri bakpao halal. Setiap gigitan adalah cerita tentang dedikasi, sebagai komitmen pada kualitas halal dan perbaikan diri Kami. Pembelajaran pengalaman dari waktu ke waktu mengukir Kami hingga berhasil menemukan cara untuk menghasilkan produk-produk halal, berkualitas, dengan harga yang terjangkau.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card h-100" id="content2">
                        <div class="card-body text-center text2 p-4">
                            <div class="content-accordion">
                                <img src="./img/ac2.webp" alt="Cabang Kami" class="img-fluid img-s3 mb-4 rounded">
                                <h3 class="mb-4">Cabang Kami</h3>
                                <p class="mb-0">
                                    Usaha bakpao ini, pertama kali beroperasi pada 22 Mei 2015 yang berlokasi di Palur, Solo. Menginjak akhir tahun 2024, Usaha ini resmi telah membuka 8 cabang serta 1 satelit di Jawa dan Kalimantan. Yaitu Solo, Batang, Semarang, Pangkalan Bun, Banjarmasin, Banjarbaru, Pelai hari, Kandangan, dan Paringin.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card h-100" id="content3">
                        <div class="card-body text-center text2 p-4">
                            <div class="content-accordion">
                                <img src="./img/ac3.webp" alt="Kilas Balik" class="img-fluid img-s3 mb-4 rounded">
                                <h3 class="mb-4">Kilas Balik</h3>
                                <p class="mb-0">
                                    <strong class="d-block mb-3">EVALUASI MINGGUAN | UMRAH BERSAMA | UPSCALING PIKNIK | TASYAKURAN</strong>
                                    Untuk mencapai kesejahteraan bersama, seminggu sekali Kami mengadakan evaluasi rutin dan doa bersama di setiap cabang, melakukan umrah bersama secara bertahap, menambah ilmu dari para cendekia, piknik 3 tahun sekali, dan melakukan tasyakuran sebelum memulai usaha produksi dan penjualan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card h-100" id="content4">
                        <div class="card-body text2 p-4">
                            <div class="content-accordion">
                                <img src="./img/ac4.webp" alt="Ruang Produksi" class="img-fluid img-s3 mb-4 rounded">
                                <h3 class="text-center mb-4">Ruang Produksi</h3>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2">• Lantai dan Dinding mudah dibersihkan</li>
                                    <li class="mb-2">• Jalur air bersih</li>
                                    <li class="mb-2">• Tempat cuci alat + jalur air Pembuangan</li>
                                    <li class="mb-2">• Sirkulasi udara lancar</li>
                                    <li>• Pencahayaan baik (tidak lembab)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card h-100" id="content5">
                        <div class="card-body text2 p-4">
                            <div class="content-accordion">
                                <img src="./img/ac5.webp" alt="Dormitory / Asrama" class="img-fluid img-s3 mb-4 rounded">
                                <h3 class="text-center mb-4">Dormitory / Asrama</h3>
                                <div class="row g-4">
                                    <div class="col-12 col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2">• Ruang Serbaguna</li>
                                            <li class="mb-2">• Kamar tidur (kapasitas 5-10 orang)</li>
                                            <li>• Ruang Manajer</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2">• 2 Kamar Mandi</li>
                                            <li class="mb-2">• Dapur + Laundry</li>
                                            <li>• Tempat Parkir Gerobak (18 m)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card h-100" id="content6">
                        <div class="card-body text2 p-4">
                            <div class="content-accordion">
                                <h3 class="text-center mb-4">
                                    <button class="btn bg-color-primary text-white w-100 fw-bold py-3">PAKET KEMITRAAN</button>
                                </h3>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 text-color-primary">• Perlengkapan Pembuatan Produk</li>
                                    <li class="mb-2">+ Pelatihan 3 orang tenaga produksi</li>
                                    <li class="mb-2 text-color-primary">• Suplai bahan baku</li>
                                    <li class="mb-2">+ bahan baku bulan pertama</li>
                                    <li class="mb-2 text-color-primary">• Perlengkapan Penjualan Produk</li>
                                    <li class="mb-2">+ Pelatihan 5 orang Salesman</li>
                                    <li class="mb-2 text-color-primary">• Tim Perintis Penjualan</li>
                                    <li class="mb-2">(Usaha menghasilkan dari bulan pertama)</li>
                                    <li class="mb-2 text-color-primary">• Sewa tempat tahun pertama</li>
                                    <li class="mb-2">+ setup tempat produksi dan asrama karyawan</li>
                                    <li class="mb-2 text-color-primary">• Seragam dan Media Promosi</li>
                                    <li class="mb-2 text-color-primary">• SOP Book & Komputer Administrasi</li>
                                    <li class="mb-2">+ Pelatihan Manajerial</li>
                                    <li class="mb-2 text-color-primary">• Standar desain Tempat Produksi</li>
                                    <li class="mb-2 text-color-primary">• Freezer</li>
                                    <li class="mb-2 text-color-primary">• Alat kebersihan dan Perlengkapan Asrama Karyawan</li>
                                    <li class="mb-2 text-color-primary">• Survey dan Pemetaan wilayah</li>
                                    <li class="mb-2 text-color-primary">• Pembagian area salesman</li>
                                    <li class="mb-2 text-color-primary">• Dukungan marketing online</li>
                                    <li class="text-color-primary">• Biaya Kemitraan</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card h-100" id="content7">
                        <div class="card-body text2 p-4">
                            <div class="content-accordion">
                                <h3 class="text-color-primary text-center mb-4">Financial Projection</h3>
                                <h4 class="text-color-primary fw-bold mb-4">SKENARIO PENJUALAN (1 BULAN)</h4>

                                <button class="btn bg-color-primary text-white w-100 fw-bold py-3 mb-4">
                                    <span class="float-start">MODAL AWAL</span>
                                    <span class="float-end">300,000,000</span>
                                </button>

                                <div class="mb-4">
                                    <hr class="border-success border-2 mb-3">
                                    <ul class="list-unstyled mb-3">
                                        <li class="d-flex justify-content-between mb-2">
                                            <span>Rata-rata penjualan per hari</span>
                                            <span><?= number_format(560) ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between mb-2">
                                            <span>Rata-rata nominal transaksi</span>
                                            <span><?= number_format(5600) ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Jumlah hari dalam sebulan</span>
                                            <span><?= number_format(30) ?></span>
                                        </li>
                                    </ul>
                                    <hr class="border-success border-2 mb-3">
                                    <ul class="list-unstyled mb-4">
                                        <li class="d-flex justify-content-between">
                                            <span>Total Penjualan dalam sebulan</span>
                                            <span><?= number_format(94080000) ?></span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled mb-3">
                                        <li class="d-flex justify-content-between mb-2">
                                            <span>Harga Pokok Penjualan (23%)</span>
                                            <span><?= number_format(21638400) ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between mb-2">
                                            <span>Operasional + Komisi Penjualan (33%)</span>
                                            <span><?= number_format(31046400) ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Gaji Karyawan + Biaya Penyusutan</span>
                                            <span><?= number_format(28000000) ?></span>
                                        </li>
                                    </ul>
                                    <hr class="border-success border-2 mb-3">
                                    <ul class="list-unstyled mb-4">
                                        <li class="d-flex justify-content-between">
                                            <span>Laba Bersih</span>
                                            <span><?= number_format(13395200) ?></span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex justify-content-between mb-2">
                                            <span>Break Even Point (pcs/hari)</span>
                                            <span><?= number_format(347) ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>ROI per tahun</span>
                                            <span><?= number_format(45) . '%' ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="shadow">

    <section id="sec4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <div class="card bg-color-primary text-center text-white">
                        <div class="card-body p-5">
                            <span>Segera Book Appointment dengan kita dan survey ke lokasi</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card for-sec4">
                        <div class="card-body">
                            <form name="form_baobae">
                                <div class="form-group form-sec4">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control mb-3" name="nohp" id="nohp" placeholder="No HP">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <table>
                                                <tr>
                                                    <td style="width: 7%;">
                                                        <input type="checkbox" name="c_email" id="c_email" class="form-control" style="width: 30px; height: 30px" onchange="this.checked ? this.style.backgroundColor='#B92F9E' : this.style.backgroundColor=''">
                                                    </td>
                                                    <td style="width: 93%;">
                                                        <span>Saya hanya ingin dihubungi melalui pesan whatsapp atau kontak email saja</span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <textarea name="area" id="area" class="form-control" rows="3" placeholder="Area Penempatan Francise Baobae"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="budget" id="budget" placeholder="Budget*">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <span>*Diluar Biaya Renovasi dan sewa tempat</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" id="btn-send" class="btn btn-hijau btn-sec4">Kirim</button>
                                            <button class="btn btn-hijau btn-sec4" id="btn-load" type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                                <span role="status">Mohon Tunggu...</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec5" class="pt-5 pb-5">
        <div class="row">
            <div class="col-12">
                <img src="./img/bg_sec5.webp" alt="" srcset="" style="width: 25vw; position: absolute; left: 0; margin-top: 70vh;">
                <img src="./img/bg_sec52.webp" alt="" srcset="" style="width: 25vw; position: absolute; right: 0; margin-top: 20vh; z-index: 0;">
            </div>
        </div>
        <div class="container" style="z-index: 1;">
            <div class="row" style="z-index: 3;">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-2 text-center">
                            <h1 class="text-white mb-4">Produk unggulan BaoBae</h1>
                            <p class="text-white">
                                Kami berkomitmen teguh terhadap kualitas dengan memilih bahan-bahan segar dan 100% terjamin halal secara cermat, dengan tujuan menciptakan bakpao bertekstur alami dan kaya rasa.
                            </p>
                        </div>
                    </div>

                    <!-- CLASSICO Section -->
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <h3 class="text-white fw-bold mb-4 border-bottom-white border-white border-3  pb-2">CLASSICO</h3>
                        </div>
                        <div class="col-12 col-md-8 offset-md-2">
                            <div class="row g-4">
                                <div class="col-4 text-center">
                                    <div class="product-card">
                                        <img src="./img/bao1.webp" alt="Strawberry Bao" class="img-fluid hover-zoom" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                        <p class="text-white mt-3 fw-bold">StrawBao</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="product-card">
                                        <img src="./img/bao2.webp" alt="Blue Bao" class="img-fluid hover-zoom" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                        <p class="text-white mt-3 fw-bold">BlueBao</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="product-card">
                                        <img src="./img/bao3.webp" alt="Green Bao" class="img-fluid hover-zoom" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                        <p class="text-white mt-3 fw-bold">GreenBao</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MAGNOFIKO Section -->
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <h3 class="text-white fw-bold mb-4 border-bottom-white border-white border-3  pb-2">MAGNIFICO</h3>
                        </div>
                        <div class="col-12 col-md-8 offset-md-2">
                            <div class="row g-4 justify-content-center">
                                <div class="col-4 text-center">
                                    <div class="product-card">
                                        <img src="./img/bao4.webp" alt="MeltChoco" class="img-fluid hover-zoom" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                        <p class="text-white mt-3 fw-bold">MeltChoco</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="product-card">
                                        <img src="./img/bao5.webp" alt="CheezyLicious" class="img-fluid hover-zoom" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                        <p class="text-white mt-3 fw-bold">CheezyLicious</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PERFECTO Section -->
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <h2 class="fw-bold mb-4 text-white">
                                <span class="border-bottom-white border-3 border-white pb-2">PERFECTO</span>
                            </h2>
                        </div>
                        <div class="col-12 col-md-8 offset-md-2">
                            <div class="row g-4 justify-content-center">
                                <div class="col-4 text-center">
                                    <div class="product-card">
                                        <img src="./img/bao6.webp" alt="ChickChop" class="img-fluid hover-zoom" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                        <p class="text-white mt-3 fw-bold">ChickChop</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec6">
        <div class="container">
            <div class="row mb-3 for-title">
                <div class="col-md-12">
                    <div class="h1 fw-bold">Kenapa Memilih <span style="color: #B92F9E;">BaoBae</span> ?</div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">
                        <span class="border-bottom border-3 border-purple pb-2">FRESH STEAMER</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-2 col-2 my-auto">
                            <img src="./img/fresh.png" class="w-100">
                        </div>
                        <div class="col-md-10 col-10 my-auto">
                            <p class="text">
                                Produsen dekat konsumen, memungkinkan produk tanpa pengawet dapat dinikmati konsumen pada hari yang sama
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">
                        <span class="border-bottom border-3 border-purple pb-2">KARIR BERJENJANG</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-2 col-2 my-auto">
                            <img src="./img/karir.png" class="w-100">
                        </div>
                        <div class="col-md-10 col-10 my-auto">
                            <p class="text">
                                Sistem jenjang karir yang terbuka bagi karyawan yang berprestasi,memudahkan mitra untuk mendelegasikan cabang usaha baru
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">
                        <span class="border-bottom border-3 border-purple pb-2">HARGA TERJANGKAU</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-2 col-2 my-auto">
                            <img src="./img/harga.png" class="w-100">
                        </div>
                        <div class="col-md-10 col-10 my-auto">
                            <p class="text">
                                Harga yang murah dengan bahan premium menjangkau segmen konsumen terbawah hingga menengah atas
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">
                        <span class="border-bottom border-3 border-purple pb-2">FLEKSIBEL DAN CEPAT</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-2 col-2 my-auto">
                            <img src="./img/flexible.png" class="w-100">
                        </div>
                        <div class="col-md-10 col-10 my-auto">
                            <p class="text">
                                Bergerak fleksibel dengan daya jangkau luas dan cepat, menjangkau konsumen secara langsung, omzet berlipat daripada menetap.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">
                        <span class="border-bottom border-3 border-purple pb-2">BAHAN PREMIUM</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-2 col-2 my-auto">
                            <img src="./img/bahan.png" class="w-100">
                        </div>
                        <div class="col-md-10 col-10 my-auto">
                            <p class="text">
                                Menggunakan bahan baku yang halal berkualitas premium dengan harga yang terjangkau
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">
                        <span class="border-bottom border-3 border-purple pb-2">LOKASI SUKA-SUKA</span>
                    </h2>
                    <div class="row">
                        <div class="col-md-2 col-2 my-auto">
                            <img src="./img/lokasi.png" class="w-100">
                        </div>
                        <div class="col-md-10 col-10 my-auto">
                            <p class="text">
                                Usaha ini tidak membutuhkan lokasi di tepi jalan raya, sehingga dapat menekan biaya sewa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-hijau btn-sec4">Daftar Program Kemitraan Kami</button>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="sec7">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12 text-center">
                    <div class="h1 text-color-primary">Gallery & Program Kami</div>
                </div>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-12 justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="img-item-r" style="--i:1">
                                <img src="./img/g1.webp" class="img-fluid gallery-img" alt="Gambar 1">
                            </div>
                            <div class="img-item-r" style="--i:2">
                                <img src="./img/g2.webp" class="img-fluid gallery-img" alt="Gambar 2">
                            </div>
                            <div class="img-item-r" style="--i:3">
                                <img src="./img/g3.webp" class="img-fluid gallery-img" alt="Gambar 3">
                            </div>
                            <div class="img-item-r" style="--i:4">
                                <img src="./img/g6.webp" class="img-fluid gallery-img" alt="Gambar 6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="img-item-l" style="--i:1">
                                <img src="./img/g6.webp" class="img-fluid gallery-img" alt="Gambar 6">
                            </div>
                            <div class="img-item-l" style="--i:2">
                                <img src="./img/g3.webp" class="img-fluid gallery-img" alt="Gambar 3">
                            </div>
                            <div class="img-item-l" style="--i:3">
                                <img src="./img/g2.webp" class="img-fluid gallery-img" alt="Gambar 2">
                            </div>
                            <div class="img-item-l" style="--i:4">
                                <img src="./img/g1.webp" class="img-fluid gallery-img" alt="Gambar 1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="img-item-r" style="--i:1">
                                <img src="./img/g1.webp" class="img-fluid gallery-img" alt="Gambar 1">
                            </div>
                            <div class="img-item-r" style="--i:2">
                                <img src="./img/g2.webp" class="img-fluid gallery-img" alt="Gambar 2">
                            </div>
                            <div class="img-item-r" style="--i:3">
                                <img src="./img/g3.webp" class="img-fluid gallery-img" alt="Gambar 3">
                            </div>
                            <div class="img-item-r" style="--i:4">
                                <img src="./img/g6.webp" class="img-fluid gallery-img" alt="Gambar 6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="sec8" class="py-5">
        <div class="row position-relative">
            <div class="col-12">
                <img src="./img/logox.webp" alt="Logo" class="position-absolute d-none d-lg-block" style="width: 200px; right: 15%; top: -10px; z-index: 0;">
            </div>
        </div>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="text-center text-md-start">KONTAK KAMI</h1>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="mb-5">
                        <h2 class="fw-bold mb-4">
                            <span class="border-bottom border-3 border-purple pb-2">Office</span>
                        </h2>
                        <ul class="list-unstyled">
                            <a href="https://maps.app.goo.gl/2ociEjYWDxNb8Apw9" target="_blank" class="text-decoration-none text-dark">
                                <li>PT Sewangi Hati Nusantara</li>
                                <li>Ponpes Al Ittihad Jurang Temanggung</li>
                            </a>
                        </ul>
                    </div>
                    <div>
                        <h2 class="fw-bold mb-4">
                            <span class="border-bottom border-3 border-purple pb-2">Phone</span>
                        </h2>
                        <ul class="list-unstyled">
                            <li><a href="tel:+628112855345" target="_blank" class="text-decoration-none text-dark">(+62) 0811-2855-345</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="mb-5">
                        <h2 class="fw-bold mb-4">
                            <span class="border-bottom border-3 border-purple pb-2">Email</span>
                        </h2>
                        <ul class="list-unstyled">
                            <li><a href="mailto:baobaeid@gmail.com" target="_blank" class="text-decoration-none text-dark">baobaeid@gmail.com</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="fw-bold mb-4">
                            <span class="border-bottom border-3 border-purple pb-2">Sosial Media</span>
                        </h2>
                        <div class="row g-3">
                            <div class="col-12 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa-brands fa-instagram fa-2x me-3"></i>
                                    <a href="https://www.instagram.com/kemitraanbaobae?igsh=NndocnBhMTEwZHI0" target="_blank" class="text-decoration-none text-dark">@baobaeid</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa-brands fa-tiktok fa-2x me-3"></i>
                                    <a href="https://www.tiktok.com/baobaeid/" target="_blank" class="text-decoration-none text-dark">@baobae.id</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="d-flex align-items-center">
                                    <i class="fa-brands fa-facebook fa-2x me-3"></i>
                                    <a href="https://www.facebook.com/share/1FZi6iPthg/" target=" _blank" class="text-decoration-none text-dark">BaoBae ID</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 mb-4 mb-md-0 my-auto">
                    <div class="row g-4">
                        <div class="col-sm-4 col-6">
                            <ul class="list-unstyled fw-bold">
                                <li class="mb-2"><a href="#home" class="text-decoration-none text-white">Beranda</a></li>
                                <li class="mb-2"><a href="#sec2" class="text-decoration-none text-white">Cabang kami</a></li>
                                <li><a href="#sec3" class="text-decoration-none text-white">Kilas Balik</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-6">
                            <ul class="list-unstyled fw-bold">
                                <li class="mb-2"><a href="#sec5" class="text-decoration-none text-white">Dormitory / Asrama</a></li>
                                <li><a href="#sec2" class="text-decoration-none text-white">Konsep Kemitraan</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-6">
                            <ul class="list-unstyled fw-bold">
                                <li class="mb-2"><a href="#sec4" class="text-decoration-none text-white">Ruang Produksi</a></li>
                                <li><a href="#sec7" class="text-decoration-none text-white">Financial Projection</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-12 text-md-end text-center my-auto">
                    <img src="./img/logo_baobae.png" class="img-fluid" style="max-width: 150px;">
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/628112855345" target="_blank" class="floating-wa" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="WhatsApp">
        <div class="wa-background">
            <img src="./img/wa.png" alt="WhatsApp Contact" class="wa-icon">
        </div>
    </a>

    <!-- Initialize tooltips -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        });
    </script>

    <style>
        .floating-wa {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .wa-icon {
            width: clamp(60px, 8vw, 100px);
            height: clamp(60px, 8vw, 100px);
            transition: transform 0.3s ease;
        }

        .wa-icon:hover {
            transform: scale(1.1);
        }
    </style>

    <script>
        na(1);

        function na(param) {
            // Remove active class from all buttons
            for (let i = 1; i <= 4; i++) {
                $(`#btnNav${i}`).removeClass('active');
            }

            // Add active class to selected button 
            $(`#btnNav${param || 4}`).addClass('active');
        }

        ct(1);

        function ct(param) {
            // Remove active class from all buttons
            for (let i = 1; i <= 7; i++) {
                document.getElementById(`btn${i}`).classList.remove('active');
                $('#content' + i).hide();
            }

            // Add active class to selected button
            document.getElementById(`btn${param || 7}`).classList.add('active');
            $('#content' + param).show();
        }
    </script>

    <!-- myjs -->
    <script src="./myjs.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <script>
        const btn_send = document.getElementById('btn-send');
        const btn_load = document.getElementById('btn-load');

        btn_load.style.display = 'none';

        const scriptURL = 'https://script.google.com/macros/s/AKfycbxJcGLNrS-qoITUktbcSTab3_ldkjGvF7z0JLv9D2BrVa5vkjz_qmMmm8PQDyjA1Xj8/exec'
        const form = document.forms['form_baobae']

        form.addEventListener('submit', e => {
            e.preventDefault()
            // ketika di submit
            btn_send.disabled = true;
            btn_load.disabled = false;
            btn_load.style.display = 'inline-block';
            btn_send.style.display = 'none';
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    Swal.fire({
                        title: "Berhasil!",
                        icon: "success",
                        draggable: true
                    });

                    console.log('Success!', response)

                    btn_send.disabled = false;
                    btn_load.disabled = true;
                    btn_load.style.display = 'none';
                    btn_send.style.display = 'inline-block';

                    form.reset(); // Reset the form after submission
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
</body>

</html>