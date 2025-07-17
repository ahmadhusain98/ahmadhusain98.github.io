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

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-color-primary">
        <div class="container">
            <a class="navbar-brand" href="#">BaoBae.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="#">Kemitraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="#">Program</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="sec1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 my-auto">
                    <div class="w7 h1 text-color-primary">BaoBae.id</div>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, expedita repellendus? Blanditiis dolorum ea laudantium dolorem temporibus ipsum pariatur fugiat.
                    </p>
                    <button type="button" class="btn btn-hijau" style="border-radius: 50px;">Tentang Kami</button>
                </div>
                <div class="col-md-6 d-flex justify-content-center col-12 position-absolute d-none d-md-block end-0">
                    <img src="./img/image.png" id="img-s1">
                </div>
            </div>
        </div>
    </section>

    <section id="sec2" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="card bg-color-primary text-center">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-hijau mb-3" style="border-radius: 10px;">Prosedur Kemitraan</button>
                                                <p class="text text-white mb-3">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, pariatur.
                                                </p>
                                                <a href="#" class="text-decoration-none text-white"><i>Pelajari lebih lanjut ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-hijau mb-3" style="border-radius: 10px;">Syarat Kemitraan</button>
                                                <p class="text text-white mb-3">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, pariatur.
                                                </p>
                                                <a href="#" class="text-decoration-none text-white"><i>Pelajari lebih lanjut ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-hijau mb-3" style="border-radius: 10px;">Sistem Kerjasama</button>
                                                <p class="text text-white mb-3">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, pariatur.
                                                </p>
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

    <section id="sec3" class="pt-5 pb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-4 col-4">
                    <button type="button" id="btn1" class="btn text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(1)">Branding Baobae.id <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn2" class="btn text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(2)">Desain Toko <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn3" class="btn text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(3)">Marketing Support <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn4" class="btn text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(4)">Training Operasional <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn5" class="btn text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(5)">Survei Lokasi <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn6" class="btn text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(6)">User Guide <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn7" class="btn text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(7)">Perencanaan Event <i class="fa-solid fa-play"></i></button>
                    <button type="button" id="btn8" class="btn text2 btn-accordion d-flex justify-content-between align-items-center w-100" onclick="ct(8)">Management Logistic <i class="fa-solid fa-play"></i></button>
                </div>
                <div class="col-md-8 col-8">
                    <div class="card h-100" id="content1">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/image_accordion.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Branding Baobae.id</div>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto ducimus amet debitis aperiam sed asperiores, maxime enim corrupti provident odio nemo exercitationem? Inventore error excepturi corrupti molestiae, aperiam reprehenderit eos, minima dolorum soluta porro veniam qui repudiandae expedita accusamus tempora dignissimos adipisci? Itaque et omnis ratione dolorum aliquam dicta optio, harum odit architecto qui ipsam voluptate ullam hic illum saepe delectus quasi! Repellendus vitae saepe quos adipisci, ea modi vel praesentium nesciunt dolores eum earum tempora quidem fuga, ullam autem mollitia et soluta ratione molestias veniam dolorum accusamus, veritatis odio! In tempore quod quaerat aut consectetur quam, dolore repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content2">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/g2.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Desain Toko</div>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto ducimus amet debitis aperiam sed asperiores, maxime enim corrupti provident odio nemo exercitationem? Inventore error excepturi corrupti molestiae, aperiam reprehenderit eos, minima dolorum soluta porro veniam qui repudiandae expedita accusamus tempora dignissimos adipisci? Itaque et omnis ratione dolorum aliquam dicta optio, harum odit architecto qui ipsam voluptate ullam hic illum saepe delectus quasi! Repellendus vitae saepe quos adipisci, ea modi vel praesentium nesciunt dolores eum earum tempora quidem fuga, ullam autem mollitia et soluta ratione molestias veniam dolorum accusamus, veritatis odio! In tempore quod quaerat aut consectetur quam, dolore repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content3">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/g1.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Marketing Support</div>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto ducimus amet debitis aperiam sed asperiores, maxime enim corrupti provident odio nemo exercitationem? Inventore error excepturi corrupti molestiae, aperiam reprehenderit eos, minima dolorum soluta porro veniam qui repudiandae expedita accusamus tempora dignissimos adipisci? Itaque et omnis ratione dolorum aliquam dicta optio, harum odit architecto qui ipsam voluptate ullam hic illum saepe delectus quasi! Repellendus vitae saepe quos adipisci, ea modi vel praesentium nesciunt dolores eum earum tempora quidem fuga, ullam autem mollitia et soluta ratione molestias veniam dolorum accusamus, veritatis odio! In tempore quod quaerat aut consectetur quam, dolore repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content4">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/g3.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Training Operasional</div>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto ducimus amet debitis aperiam sed asperiores, maxime enim corrupti provident odio nemo exercitationem? Inventore error excepturi corrupti molestiae, aperiam reprehenderit eos, minima dolorum soluta porro veniam qui repudiandae expedita accusamus tempora dignissimos adipisci? Itaque et omnis ratione dolorum aliquam dicta optio, harum odit architecto qui ipsam voluptate ullam hic illum saepe delectus quasi! Repellendus vitae saepe quos adipisci, ea modi vel praesentium nesciunt dolores eum earum tempora quidem fuga, ullam autem mollitia et soluta ratione molestias veniam dolorum accusamus, veritatis odio! In tempore quod quaerat aut consectetur quam, dolore repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content5">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/g6.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Survei Lokasi</div>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto ducimus amet debitis aperiam sed asperiores, maxime enim corrupti provident odio nemo exercitationem? Inventore error excepturi corrupti molestiae, aperiam reprehenderit eos, minima dolorum soluta porro veniam qui repudiandae expedita accusamus tempora dignissimos adipisci? Itaque et omnis ratione dolorum aliquam dicta optio, harum odit architecto qui ipsam voluptate ullam hic illum saepe delectus quasi! Repellendus vitae saepe quos adipisci, ea modi vel praesentium nesciunt dolores eum earum tempora quidem fuga, ullam autem mollitia et soluta ratione molestias veniam dolorum accusamus, veritatis odio! In tempore quod quaerat aut consectetur quam, dolore repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content6">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/g7.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">User Guide</div>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto ducimus amet debitis aperiam sed asperiores, maxime enim corrupti provident odio nemo exercitationem? Inventore error excepturi corrupti molestiae, aperiam reprehenderit eos, minima dolorum soluta porro veniam qui repudiandae expedita accusamus tempora dignissimos adipisci? Itaque et omnis ratione dolorum aliquam dicta optio, harum odit architecto qui ipsam voluptate ullam hic illum saepe delectus quasi! Repellendus vitae saepe quos adipisci, ea modi vel praesentium nesciunt dolores eum earum tempora quidem fuga, ullam autem mollitia et soluta ratione molestias veniam dolorum accusamus, veritatis odio! In tempore quod quaerat aut consectetur quam, dolore repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content7">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/g10.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Perencanaan Event</div>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto ducimus amet debitis aperiam sed asperiores, maxime enim corrupti provident odio nemo exercitationem? Inventore error excepturi corrupti molestiae, aperiam reprehenderit eos, minima dolorum soluta porro veniam qui repudiandae expedita accusamus tempora dignissimos adipisci? Itaque et omnis ratione dolorum aliquam dicta optio, harum odit architecto qui ipsam voluptate ullam hic illum saepe delectus quasi! Repellendus vitae saepe quos adipisci, ea modi vel praesentium nesciunt dolores eum earum tempora quidem fuga, ullam autem mollitia et soluta ratione molestias veniam dolorum accusamus, veritatis odio! In tempore quod quaerat aut consectetur quam, dolore repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card h-100" id="content8">
                        <div class="card-body text-center text2">
                            <div class="content-accordion">
                                <img src="./img/g9.webp" alt="" srcset="" class="img-s3 mb-3">
                                <div class="h3 mb-3">Management Logistic</div>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto ducimus amet debitis aperiam sed asperiores, maxime enim corrupti provident odio nemo exercitationem? Inventore error excepturi corrupti molestiae, aperiam reprehenderit eos, minima dolorum soluta porro veniam qui repudiandae expedita accusamus tempora dignissimos adipisci? Itaque et omnis ratione dolorum aliquam dicta optio, harum odit architecto qui ipsam voluptate ullam hic illum saepe delectus quasi! Repellendus vitae saepe quos adipisci, ea modi vel praesentium nesciunt dolores eum earum tempora quidem fuga, ullam autem mollitia et soluta ratione molestias veniam dolorum accusamus, veritatis odio! In tempore quod quaerat aut consectetur quam, dolore repudiandae.
                                </p>
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
                            <span>Segera Book Appointment dengan kita dan survey</span>
                            <br>
                            <span>ke toko, biaya perjalanan anda akan kita reimburse</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card for-sec4">
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
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
                                                        <input type="checkbox" name="c_email" id="c_email" class="form-control" style="width: 30px; height: 30px">
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
                                            <button type="button" class="btn btn-hijau">Kirim</button>
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="h1 text-white">Produk unggulan BaoBae</div>
                            <br>
                            <span class="text-white">
                                Kami berkomitmen teguh terhadap kualitas dengan memilih bahan-bahan segar dan terbaik secara cermat, dengan tujuan
                                menciptakan minuman bertekstur alami dan kaya rasa.
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
                                <div class="col-md-4 col-4">
                                    <img src="./img/strawbao.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                    <br>
                                    <br>
                                    <span class="text-white">Strawberry Bao</span>
                                </div>
                                <div class="col-md-4 col-4">
                                    <img src="./img/bluebao.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                    <br>
                                    <br>
                                    <span class="text-white">Blue Bao</span>
                                </div>
                                <div class="col-md-4 col-4">
                                    <img src="./img/greenbao.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                    <br>
                                    <br>
                                    <span class="text-white">Green Bao</span>
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
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-4 text-center">
                                    <img src="./img/miltcoko.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                    <br>
                                    <br>
                                    <span class="text-white">MeltChoco</span>
                                </div>
                                <div class="col-md-4 col-4 text-center">
                                    <img src="./img/chizy.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
                                    <br>
                                    <br>
                                    <span class="text-white">CheezyLicious</span>
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
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 col-4 text-center">
                                            <img src="./img/prefect.webp" alt="" srcset="" class="w-100" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="mouseIn(this)" onmouseout="mouseOut(this)">
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
                        Kami berkomitmen teguh terhadap kualitas dengan memilih bahan-bahan segar dan terbaik secara cermat, dengan tujuan
                        menciptakan minuman bertekstur alami dan kaya rasa.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="h2 fw-bold"><span style="text-decoration: underline; text-decoration-color: purple; text-decoration-thickness: 5px;">KARIR BERJENJANG</span></div>
                    <br>
                    <p class="text">
                        Sistem jenjang karir yang terbuka bagi karyawan yang berprestasi, memudahkan mitra untuk mendelegasikan cabang usaha
                        baru
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
                        Bergerak fleksibel dengan daya jang kau luas dan cepat, menjangkau kon sumen secara langsung, omzet berli pat daripada
                        menetap
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-hijau">Daftar Program Kemitraan Kamoi</button>
                </div>
            </div>
        </div>
    </section>

    <section id="sec7">
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
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-8">
                    <div class="table-responsive">
                        <table width="100%" cellpadding="10px">
                            <tr>
                                <td>Beranda</td>
                                <td>Marketing Support</td>
                            </tr>
                            <tr>
                                <td>Kemitraan</td>
                                <td>Training Operation</td>
                            </tr>
                            <tr>
                                <td>Tentang Kami</td>
                                <td>User Guide</td>
                            </tr>
                            <tr>
                                <td>Program</td>
                                <td>Management Logistic</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-4">
                    <img src="./img/logo_baobae.png" style="width: 173px; height: 173px;" class="float-end">
                </div>
            </div>
        </div>
    </footer>

    <!-- myjs -->
    <script src="./myjs.js"></script>

    <script>
        ct(1);

        function ct(param) {
            // Remove active class from all buttons
            for (let i = 1; i <= 8; i++) {
                document.getElementById(`btn${i}`).classList.remove('active');
                $('#content' + i).hide();
            }

            // Add active class to selected button
            document.getElementById(`btn${param || 8}`).classList.add('active');
            $('#content' + param).show();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>