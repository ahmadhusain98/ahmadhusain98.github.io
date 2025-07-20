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
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6 col-12 my-auto">
                    <div class="row mt-5">
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
            <div class="row g-5">
                <div class="col-md-4 col-4">
                    <button type="button" id="btn1" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(1)">Tentang Baobae.id <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn2" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(2)">Cabang Kami <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn3" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(3)">Kilas Balik <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn4" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(4)">Ruang Produksi <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn5" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(5)">Dormitory / Asrama <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn6" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(6)">Paket Kemitraan <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn7" class="btn text-color-primary text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(7)">Financial Projection <i class="fa-solid fa-play"></i></button>
                </div>
                <div class="col-md-8 col-8">
                    <div class="card h-100" id="content1">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/ac1.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Tentang Baobae.id</div>
                                <p>
                                    Selama satu dekade, Kami telah tumbuh menjadi simbol kepercayaan dan kelezatan dalam industri bakpao halal. Setiap gigitan adalah cerita tentang dedikasi, sebagai komitmen pada kualitas halal dan perbaikan diri Kami. Pembelajaran pengalaman dari waktu ke waktu mengukir Kami hingga berhasil menemukan cara untuk menghasilkan produk-produk halal, berkualitas, dengan harga yang terjangkau.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content2">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/ac2.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Cabang Kami</div>
                                <p>
                                    Usaha bakpao ini, pertama kali beroperasi pada 22 Mei 2015 yang berlokasi di Palur, Solo. Menginjak akhir tahun 2024, Usaha ini resmi telah membuka 8 cabang serta 1 satelit di Jawa dan Kalimantan. Yaitu Solo, Batang, Semarang, Pangkalan Bun, Banjarmasin, Banjarbaru, Pelai hari, Kandangan, dan Paringin.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content3">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/ac3.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Kilas Balik</div>
                                <p>
                                    <b>EVALUASI MINGGUAN | UMRAH BERSAMA | UPSCALING PIKNIK | TASYAKURAN</b>
                                    <br>Untuk mencapai kesejahteraan bersama, seminggu sekali Kami menga dakan evaluasi rutin dan doa bersama di setiap cabang, melakukan umrah bersama secara bertahap, menambah ilmu dari para cendekia, piknik 3 tahun sekali, dan melakukan tasyakuran sebelum memulai usaha produksi dan penjualan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content4">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/ac4.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Ruang Produksi</div>
                                <p>
                                <ul style="text-align: left !important;">
                                    <li>Lantai dan Dinding mudah dibersihkan</li>
                                    <li>Jalur air bersih</li>
                                    <li>Tempat cuci alat + jalur air Pembuangan</li>
                                    <li>Sirkulasi udara lancar</li>
                                    <li>Pencahayaan vaik ( tidak lembab )</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content5">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/ac5.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Dormitory / Asrama</div>
                                <p>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <ul style="text-align: left !important;">
                                            <li>Ruang Serbaguna</li>
                                            <li>Kamar tidur (kapasitas 5-10 orang)</li>
                                            <li>Ruang Manajer</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <ul style="text-align: left !important;">
                                            <li>2 Kamar Mandi</li>
                                            <li>Dapur + Laundry</li>
                                            <li>Tempat Parkir Gerobak (18 m )</li>
                                        </ul>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content6">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <div class="h3 mb-3"><button class="btn bg-color-primary text-white w-100 fw-bold" style="border-radius: 0px !important;">PAKET KEMITRAAN</button></div>
                                <p>
                                <ul style="text-align: left !important;">
                                    <li class="text-color-primary">Perlengkapan Pembuatan Produk</li>
                                    <li>+ Pelatihan 3 orang tenaga produksi</li>
                                    <li class="text-color-primary">Suplai bahan baku</li>
                                    <li>+ bahan baku bulan pertama</li>
                                    <li class="text-color-primary">Perlengkapan Penjualan Produk</li>
                                    <li>+ Pelatihan 5 orang Salesman</li>
                                    <li class="text-color-primary">Tim Perintis Penjualan</li>
                                    <li>(Usaha menghasilkan dari bulan pertama)</li>
                                    <li class="text-color-primary">Sewa tempat tahun pertama</li>
                                    <li>+ setup tempat produksi dan asrama karyawan</li>
                                    <li class="text-color-primary">Seragam dan Media Promosi</li>
                                    <li class="text-color-primary">SOP Book & Komputer Administrasi</li>
                                    <li>+ Pelatihan Manajerial</li>
                                    <li class="text-color-primary">Standar desain Tempat Produksi</li>
                                    <li class="text-color-primary">Freezer</li>
                                    <li class="text-color-primary">Alat kebersihan dan Perlengkapan Asrama Karyawan</li>
                                    <li class="text-color-primary">Survey dan Pemetaan wilayah </li>
                                    <li class="text-color-primary">Pembagian area salesman</li>
                                    <li class="text-color-primary">Dukungan marketing online</li>
                                    <li class="text-color-primary">Biaya Kemitraan</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content7">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <div class="h3 mb-3 text-color-primary">Financial Projection</div>
                                <div class="h3 mb-3 text-color-primary text-start fw-bold">SKENARIO PENJUALAN (1 BULAN)</div>
                                <button class="btn bg-color-primary text-white w-100 fw-bold" style="border-radius: 0px !important;"><span class="float-start">MODAL AWAL</span> <span class="float-end">300,000,000</span></button>
                                <hr style="border: 2px solid #98CD03;">
                                <ul style="text-align: left !important;">
                                    <li>Rata-rata penjualan per hari <span class="float-end"><?= number_format(560) ?></span></li>
                                    <li>Rata-rata nominal transaksi <span class="float-end"><?= number_format(5600) ?></span></li>
                                    <li>Jumlah hari dalam sebulan <span class="float-end"><?= number_format(30) ?></span></li>
                                </ul>
                                <hr style="border: 2px solid #98CD03;">
                                <ul style="text-align: left !important;">
                                    <li>Total Penjualan dalam sebulan <span class="float-end"><?= number_format(94080000) ?></span></li>
                                </ul>
                                <br>
                                <ul style="text-align: left !important;">
                                    <li>Harga Pokok Penjualan (23%) <span class="float-end"><?= number_format(21638400) ?></span></li>
                                    <li>Operasional + Komisi Penjualan (33%) <span class="float-end"><?= number_format(31046400) ?></span></li>
                                    <li>Gaji Karyawan + Biaya Penyusutan <span class="float-end"><?= number_format(28000000) ?></span></li>
                                </ul>
                                <hr style="border: 2px solid #98CD03;">
                                <ul style="text-align: left !important;">
                                    <li>Laba Bersih <span class="float-end"><?= number_format(13395200) ?></span></li>
                                </ul>
                                <br>
                                <ul style="text-align: left !important;">
                                    <li>Break Even Point (pcs/hari) <span class="float-end"><?= number_format(347) ?></span></li>
                                    <li>ROI per tahun <span class="float-end"><?= number_format(45) . '%' ?></span></li>
                                </ul>
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
                            <form action="">
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
                                            <button type="button" class="btn btn-hijau btn-sec4">Kirim</button>
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
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="h1 text-white">Produk unggulan BaoBae</div>
                            <br>
                            <span class="text-white">
                                Kami berkomitmen teguh terhadap kualitas dengan memilih bahan-bahan segar dan terbaik secara cermat, dengan tujuan menciptakan minuman bertekstur alami dan kaya rasa.
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mb-3 mt-3">
                                <div class="col-md-12">
                                    <div class="h2 text-white"><u>CLASSICO</u></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-2">
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                            <img src="./img/bao1.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                            <br>
                                            <br>
                                            <span class="text-white">Strawberry Bao</span>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <img src="./img/bao2.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                            <br>
                                            <br>
                                            <span class="text-white">Blue Bao</span>
                                        </div>
                                        <div class="col-md-4 col-4">
                                            <img src="./img/bao3.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                            <br>
                                            <br>
                                            <span class="text-white">Green Bao</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-12">
                            <div class="row mb-3 mt-3">
                                <div class="col-md-12">
                                    <div class="h2 text-white"><u>MAGNOFIKO</u></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-2">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 col-4 text-center">
                                            <img src="./img/bao4.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                            <br>
                                            <br>
                                            <span class="text-white">MeltChoco</span>
                                        </div>
                                        <div class="col-md-4 col-4 text-center">
                                            <img src="./img/bao5.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                            <br>
                                            <br>
                                            <span class="text-white">CheezyLicious</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-12">
                                            <div class="h2 text-white"><u>PERFECTO</u></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 offset-2">
                                            <div class="row justify-content-center">
                                                <div class="col-md-4 col-4 text-center">
                                                    <img src="./img/bao6.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                                    <br>
                                                    <br>
                                                    <span class="text-white">ChickChop</span>
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
                    <div class="h2 fw-bold"><span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">FRESH STEAMER</span></div>
                    <br>
                    <p class="text">
                        Kami berkomitmen teguh terhadap kualitas dengan memilih bahan-bahan segar dan terbaik secara cermat, dengan tujuan menciptakan minuman bertekstur alami dan kaya rasa.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="h2 fw-bold"><span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">KARIR BERJENJANG</span></div>
                    <br>
                    <p class="text">
                        Sistem jenjang karir yang terbuka bagi karyawan yang berprestasi, memudahkan mitra untuk mendelegasikan cabang usaha baru
                    </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="h2 fw-bold"><span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">HARGA TERJANGKAU</span></div>
                    <br>
                    <p class="text">
                        Harga yang murah dengan bahan premium menjangkau segmen kon sumen terbawah hingga menengah ataS
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="h2 fw-bold"><span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">LOKASI SUKA-SUKA</span></div>
                    <br>
                    <p class="text">
                        Usaha ini tidak membutuhkan lokasi di tepi jalan raya, sehingga dapat me nekan biaya sewa
                    </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="h2 fw-bold"><span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">BAHAN PREMIUM</span></div>
                    <br>
                    <p class="text">
                        Menggunakan bahan baku yang halal berkualitas premium dengan harga yang terjangkau
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="h2 fw-bold">
                        <span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">FLEKSIBEL DAN CEPAT</span>
                    </div>
                    <br>
                    <p class="text">
                        Bergerak fleksibel dengan daya jang kau luas dan cepat, menjangkau kon sumen secara langsung, omzet berli pat daripada menetap
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-hijau btn-sec4">Daftar Program Kemitraan Kamoi</button>
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

    <section id="sec8">
        <div class="row">
            <div class="col-12">
                <img src="./img/logox.webp" alt="" srcset="" style="width: 20vw; position: absolute; right: 20vw; margin-top: -10vh; z-index: 0;">
            </div>
        </div>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="h1">KONTAK KAMI</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <div class="row mb-3 h-50">
                        <div class="col-md-md-12">
                            <div class="h2 fw-bold">
                                <span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">Office</span>
                            </div>
                            <br>
                            <ul style="text-align: left !important;">
                                <li>PT Sewangi Hati Nusantara </li>
                                <li>Ponpes Al Ittihad Jurang Temanggung</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-3 h-50">
                        <div class="col-md-md-12">
                            <div class="h2 fw-bold">
                                <span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">Phone</span>
                            </div>
                            <br>
                            <ul style="text-align: left !important;">
                                <li>(+62) 0811-2855-345</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-6">
                    <div class="row mb-3 h-50">
                        <div class="col-md-md-12">
                            <div class="h2 fw-bold">
                                <span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">Email</span>
                            </div>
                            <br>
                            <ul style="text-align: left !important;">
                                <li>baobaeid@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-3 h-50">
                        <div class="col-md-md-12">
                            <div class="h2 fw-bold">
                                <span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">Sosial Media</span>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa-brands fa-instagram fa-2x me-2"></i>
                                        <a style="text-decoration: none; color: black; font-size: 18px;" href="https://www.instagram.com/baobaeid/">@baobaeid</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa-brands fa-tiktok fa-2x me-2"></i>
                                        <a style="text-decoration: none; color: black; font-size: 18px;" href="https://www.tiktok.com/baobaeid/">@baobae.id</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-brands fa-facebook fa-2x me-2"></i>
                                        <a style="text-decoration: none; color: black; font-size: 18px;" href="https://www.facebook.com/baobaeid/">BaoBae ID</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-8 my-auto">
                    <div class="table-responsive fw-bold">
                        <table width="100%" cellpadding="10px">
                            <tr>
                                <td>Beranda</td>
                                <td>Dormitory / Asrama</td>
                                <td>Ruang Produksi</td>
                            </tr>
                            <tr>
                                <td>Cabang kami</td>
                                <td>Konsep Kemitraan</td>
                                <td>Financial Projection</td>
                            </tr>
                            <tr>
                                <td>Kilas Balik</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-4 my-auto">
                    <img src="./img/logo_baobae.png" style="width: 15vw;" class="float-end">
                </div>
            </div>
        </div>
    </footer>

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
</body>

</html>