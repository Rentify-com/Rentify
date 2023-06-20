<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="stylesheet" href="Pembayaran.css">
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
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul id="navbar">
                    <li><a href="/dashboard">Beranda</a></li>
                    <li><a href="/Pemesanan">Pemesanan</a></li>
                    <li><a href="/bantuan">Bantuan</a></li>
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
                        <div class="sebelahann">
                            <a href="/Badminton"><button class="normall">Badminton</button></a>
                            <a href="/Basket"><button class="normall">Basket</button></a>
                            <a href="/Futsal"><button class="normall">Futsal</button></a>
                        </div>
                        <div class="sebelahann">
                            <a href="/Golf"><button class="normall">Golf</button></a>
                            <a href="/Tenis"><button class="normall">Tenis</button></a>
                        </div>
                        <br>
                    </div>
                </div>
             </div>
            <section id="arenakonser">
                <div class="layar-dalam">
                    <div class="konten-isi">
                    </div>

                            <div class="row">
                    
                                <div class="col">
                    
                                    <h3 class="title">payment BCA</h3>
                    
                                    <div class="inputBox">
                                        <h4>Silahkan melakukan pembayaran ke</h4>
                                        
                                    </div>
                                    <img src="../asset/bca.png" alt="">
                    
                                </div>
                                <br>
                                <span>No Rek : 222333444</span>
                                <br>
                                <br>
                                <span>Atas Nama : Rentify Jaya Selalu</span>
                            </div>
                            <br>
                            <br>
                            <a href="/Konfirmasi" class="booknow"><button class="normal">Sudah Membayar</button></a>
                    
                    
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
                    <div class="pembayaranluar"><img src="Asset/card_img.png" alt=""></div>
                    <div class="pembayaranbank"><img src="Asset/bank-01.png" alt=""></div>
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
</body>
</html>