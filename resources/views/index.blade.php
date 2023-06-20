<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify Homepage</title>
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    
</head>
<body>
     <!--Header-->
    <nav>
        <div class="layar-dalam">
                <div class="logo">
                    <a href=""><img src="asset/traveloka-black.png" class="putih" /></a>
                    <a href=""><img src="asset/traveloka.png" class="hitam" /></a>
                </div>
                <div class="menu">
                    <a href="#" class="tombol-menu">
                        <span class="garis"></span>
                        <span class="garis"></span>
                        <span class="garis"></span>
                    </a>
                    <ul id="navbar">
                        <li><a class="active" href="/">Beranda</a></li>
                        <li><a href="#popup-login">Pemesanan</a></li>
                        <li><a href="/bantuan">Bantuan</a></li>
                        <li><a href="/tentang">Tentang</a></li>
                        <li>
                            <a href="#popup-login"><button class="btn-masuk">Masuk</button></a>
                        </li>
                        <li>
                            <a href="#popup-daftar"><button class="btn-daftar">Daftar</button></a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
 
    <div class="layar-penuh">
        <!--Popup-->
        <div class="popup-login" id="popup-login">
            <div class="kotak-login">
                <div class="popupcontent">
                        <div class="popupimgg">
                            <a href="#" class="popupclose">&times;</a>
                        </div>
                        <form class="form-login" action = "/login" method="post">
                        @csrf
                        <h1 class="title-box">Masuk</h1>
                        <div class="register-sukses" style="font-weight: 600;">
                            @if(session()->has('loginError'))
                            <div class="error" style="margin-left: 0%" style="font-weight: 600;">
                                {{session('loginError')}}
                            </div>
                            @endif
                        </div>
                        <input type="email" name = "email" id="email" class="label-box" placeholder="Email" autofocus required>
                        @error('email')
                            <div class="error" style="font-weight: 600;">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="password" name = "password" id="password" class="label-box" placeholder="Password" required>
                        @error('password')
                            <div class="error" style="font-weight: 600;">
                                {{$message}}
                            </div>
                        @enderror
                        <button class="buttonn">Masuk</button>
                        <div class="batas">
                            <p>Belum punya akun?</p>
                        </div>
                        <div class="belum-daftar">
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <a href="#popup-daftar">Daftar</a>
                        </div>
                    </form> 
                </div>
            </div>
        </div>

        <div class="popup-daftar" id="popup-daftar">
            <div class="popupcontent-daftar">
                <div class="popupimgg">
                    <a href="#" class="popupclose-daftar">&times;</a>
                </div>
                <div class="kotak-daftar">
                    <form class="form-daftar" action = "/daftar" method = "post">
                        @csrf
                        <h1 class="title-box">Daftar</h1>
                        <p>Sudah punya akun?</p>
                        <div class="belum-daftar">
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <a href="#popup-login">Masuk</a>
                        </div>
                        <input type="text" name = "name" id="name" class="label-box" placeholder="Nama Lengkap" required>
                        @error('name')
                            <div class="error" style="font-weight: 600;">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="email" name = "email" id="email" class="label-box" placeholder="Email" required>
                        @error('email')
                            <div class="error" style="font-weight: 600;">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="password" name = "password" id="password" class="label-box" placeholder="Password" required>
                        @error('password')
                            <div class="error" style="font-weight: 600;">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="text" name = "telp" id="telp" class="label-box" placeholder="No. Handphone" required>
                        @error('telp')
                            <div class="error" style="font-weight: 600;">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="hidden" name = "tipe" value="pembeli">
                        <button class="buttonn">Daftar</button>
                    </form>
                </div>
        </div>
            </div>
        
        <div class="tulis-awal">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="Arena Konser">
                        <img src="" alt="">
                    </div>
                    <div class="Ballroom">
                        <img src="" alt="">
                    </div>
                    <div class="Konser Musik">
                        <img src="" alt="">
                    </div>
                    <div class="Olahraga">
                        <img src="" alt="">
                    </div>
                </div>
            </div>

            <h2>B&emsp;O&emsp;O&emsp;K&emsp;I&emsp;N&emsp;G &emsp;&emsp; G&emsp;O&emsp;R</h2>
            <h1>Berolahraga akan <br>
                memberikanmu energi <br>
                dan membuatmu jadi lebih produktif
                </h1>
        </div>
        <section class="tempat">
            <div class="tulisan">
                <h2>Tempat Booking</h2>
                <p>P i l i h&emsp;t e m p a t&emsp;k e g i a t a n m u </p>
            </div>
            <div class="kegiatan">
                <div class="olahraga">
                    <a href="#popup-login">
                        <img src="images/Rectangle 2.png" alt="">
                        <div class="tulisan">
                            <h2 style="font-size: 28px; font-weight: normal;">Olahraga</h2>
                            <p style="margin-left: 1px;margin-top: -19px; color: rgba(255, 255, 255, 0.5);">230 Activities</p>
                        </div>
                    </a>
                    
                </div>
                <div class="musik">
                    <a href="#popup-login">
                        <img src="images/Rectangle 3.png" alt="">
                        <div class="tulisan">
                            <h2 style="font-size: 28px; font-weight: normal;">Studio Musik</h2>
                            <p style="margin-left: 1px;margin-top: -19px; color: rgba(255, 255, 255, 0.5);">121 Activities</p>
                        </div>
                    </a>
                    
                </div>
                <div class="gedung">
                    <a href="#popup-login">
                        <img src="images/Rectangle 4.png" alt="">
                        <div class="tulisan">
                            <h2 style="font-size: 28px; font-weight: normal;">Ballroom</h2>
                            <p style="margin-left: 1px;margin-top: -19px; color: rgba(255, 255, 255, 0.5);">212 Activities</p>
                        </div>
                    </a>
                    
                </div>
                <div class="stadion">
                    <a href="#popup-login">
                        <img src="images/Rectangle 5.png" alt="">
                        <div class="tulisan">
                            <h2 style="font-size: 28px; font-weight: normal;">Stadion</h2>
                            <p style="margin-left: 1px;margin-top: -19px; color: rgba(255, 255, 255, 0.5);">512 Activities</p>
                        </div>
                    </a>
                    
                </div>
                <div class="kotak-abu">
                    <p></p>
                </div>
            </div>
        </section>

        <section class="alasan">
            <h3 style="font-size: 18px; font-weight: 300;">A l a s a n</h3>
            <h2 style="font-size: 36px; margin-top:-10px;">Kenapa Sewa di Rentify</h2>
            <div class="map-indo">
                <img src="images/Simple_Black_Map_of_Indonesia_Isolated_on_White_Background [Converted]-01.png" alt="">
                <p style="margin-left: -1035px; color:rgba(0, 0, 0, 0.5);font-size: 20px; text-align: center;">Pesan dimana aja <br>
                    tanpa takut repot</p>
            </div>
            <div class="cs">
                <img src="images/Screenshot_2022-11-15_191737-removebg-preview.png" alt="">
                <p style="margin-left: -853px; color:rgba(0, 0, 0, 0.5);font-size: 20px; text-align: center; margin-top: 35px;">
                    Terdapat CS <br>
                    yang online selama <br> 
                    24 jam
                </p>
            </div>
            <div class="aman">
                <img src="images/Screenshot_2022-11-15_191947-removebg-preview.png" alt="">
                <p style="margin-left: -590px; color:rgba(0, 0, 0, 0.5);font-size: 20px; text-align: center; margin-top: 24px;">
                    Pembayaran aman <br>
                    & beragam
                </p>
            </div>
            <div class="trust">
                <img src="images/trust-icon.png" alt="">
                <p style="margin-left: -346px; color:rgba(0, 0, 0, 0.5);font-size: 20px; text-align: center; margin-top: 32px;">
                    Informasi lengkap <br>
                    & terpercaya
                </p>
            </div>
        </section>

        <!--Footer-->
        <footer id = "contact">
                <div class = "layar-dalam">
                    <div class="footerproduk">
                        <h5>Produk</h5>
                        <a href="#popup-login"><h4>Area Konser</h4></a>
                        <a href="#popup-login"><h4>Ballroom</h4></a>
                        <a href="#popup-login"><h4>Olahraga</h4></a>
                        <a href="#popup-login"><h4>Studio Musik</h4></a>
                    </div>
                    <div class="footerpembayaran">
                        <h5>Pembayaran</h5>
                        <div class="pembayaranluar"><img src="../Asset/card_img.png" alt=""></div>
                        <div class="pembayaranbank"><img src="../Asset/bank-01.png" alt=""></div>
                    </div>
                    <div class="footertentang">
                        <h5>Tentang Rentify</h5>
                        <a href="/bantuan"><h4>Bantuan</h4></a>
                        <a href="/tentang"><h4>Tentang</h4></a>
                    </div>
                </div>
                <div class="layar-dalam">
                    <div class="copyright">
                        &copy; 2022 Rentify
                    </div>
                </div>
            </footer>
    </div>

    <script src="Rentify.js"></script>

</body>
</html>