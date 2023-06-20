<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="stylesheet" href="Bantuan.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>
<body>
    <!--Header-->
    <nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="asset/traveloka.png" class="putih" /></a>
                <a href=""><img src="asset/traveloka-black.png" class="hitam" /></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                </a>
                <ul id="navbar">
                    @auth
                        <li><a href="/dashboard">Beranda</a></li>
                    @endauth
                    @guest
                        <li><a href="/">Beranda</a></li>
                    @endguest
                    @auth
                        <li><a href="/Pemesanan">Pemesanan</a></li>
                    @endauth

                    @guest
                        <li><a href="/login">Pemesanan</a></li>
                    @endguest
                    <li><a class="active" href="/bantuan">Bantuan</a></li>
                    <li><a href="/tentang">Tentang</a></li>
                    @auth
                        <li>
                            <div class="user" style="color: black;font-weight:600;">
                                Hello,&nbsp;{{auth()->user()->name}}
                            </div>
                        <li>
                            <form action="logout" method="post">
                                @csrf
                                <a href="#"><button class="btn-keluar" type="submit">Logout</button></a>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!--Body-->
    <div class="layar-penuh">
        
        <main>
            <!--Popup-->
            <div class="popup" id="popup">
                <div class="popupcontent">
                    <div class="popupimg">
                        <a href="#" class="popupclose">&times;</a>
                    </div>
                    <div class="popupheader">
                        <h4>PILIH TEMPAT OLAHRAGA</h4>
                    </div>
                    <div class="popuptext">
                        <div class="sebelahan">
                            <a href="/Badminton" class="booknow"><button class="normall">Badminton</button></a>
                            <a href="/Basket" class="booknow"><button class="normall">Basket</button></a>
                            <a href="/Futsal" class="booknow"><button class="normall">Futsal</button></a>
                        </div>
                        <div class="sebelahan">
                            <a href="/Golf" class="booknow"><button class="normall">Golf</button></a>
                            <a href="/Tenis" class="booknow"><button class="normall">Tenis</button></a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <section id="Bantuan">
                <div class="layar-dalam">
                    <section id="page-header" class="tentang-header">
                    <h3>#Bantuan</h3>
                    <p class="ringkasan">
                        Hubungi kami jika ada yang ingin ditanyakan
                    </p>
                    </section>
                    <div class ="Bantuan">
                        <h2>FAQ</h2>
                        <h5>Apa saja kategori tempat yang bisa di sewa di rentify ?</h5>
                        <span>Saat ini tersedia Arena Konser, Ballroom, Olahraga, dan Studio Musik</span>
                        <h5>Pembayarannya bisa lewat apa saja ?</h5>
                        <span>Untuk pembayaran luar tersedia paypal, mastercard, america express. Untuk bank dalam negeri tersedia BRI, BCA, Mandiri, dan BNI. Untuk digital tersedia Gopay dan OVO</span>
                        <h5>Dimana pesanan saya akan tersimpan ?</h5>
                        <span>Setelah login anda dapat melihat pesanan anda di menu pemesanan yang dapat dituju dengan mengklik header pada menu pemesanan</span>
                        <section id="form-details">
                            <form action="/bantuan" method="post">
                                @csrf
                                <h2>Hubungi Kami</h2>
                                <span>Tinggalkan Pertanyaan Jika Masih Ada Yang Ingin Kalian Tanyakan</span>
                                @if(session()->has('success'))
                                    {{session('success')}}
                                @endif
                                <h5></h5>
                                <input name="name" id="name" type="text" placeholder="Your Name">
                                <input name="email" id="email" type="text" placeholder="Email">
                                <input name="subject" id="subject" type="text" placeholder="Subject">
                                <input name="msg" id="msg" cols="30" rows="10" placeholder="Your Message">
                                <button type="submit" class="normal">Submit</button>
                            </form>
                        </section>
                    </div>
                </div>
            </section>
        </main>
        <footer id = "contact">
            <div class = "layar-dalam">
                <div class="footerproduk">
                    <h5>Produk</h5>
                    <a href="/Konser"><h4>Area Konser</h4></a>
                    <a href="/Ballroom"><h4>Ballroom</h4></a>
                    <a href="#popup"><h4>Olahraga</h4></a>
                    <a href="/Musik"><h4>Studio Musik</h4></a>
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="Rentify.js"></script>
    <script src="asset/daterangepicker/moment.min.js"></script>
    <script src="asset/daterangepicker/daterangepicker.js"></script>
</body>
</html>