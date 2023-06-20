<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    
</head>
<body>
    <!--Header-->
    <nav>
        @if(session()->has('Success'))
            <script>alert("{{session('Success')}}")</script>
        @endif
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="asset/traveloka-black.png" class="putih" /></a>
                <a href=""><img src="asset/traveloka.png" class="hitam" /></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                </a>
                <ul id="navbar">
                    <li ><a class="active" href="/dashboard">Beranda</a></li>
                    <li ><a href="/Pemesanan">Pemesanan</a></li>
                    <li ><a href="/bantuan">Bantuan</a></li>
                    <li ><a href="/tentang">Tentang</a></li>
                    @auth
                        <li>
                            <div class="user">
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

    <div class="layar-penuh">
        <main>
            <!--Popup Edit Tempat-->
            <div class="popup-form" id="popup-form">
                <div class="popupcontent-form">
                    <div class="popupheader">
                        <a href="#" class="popupclose-olahraga" style="margin-top: -15px;">&times;</a>
                        <h4>TAMBAH TEMPAT</h4>
                    </div>
                    <form action="/Konser" method="post" enctype="multipart/form-data">
                        <div class="sebelahan">
                            <div class="kiri" style="margin-right:10px;">
                                @csrf
                                <label for="kategori_id" style="margin-bottom: 3px;margin-top: 3px;">ID Kategori:</label>
                                @error('kategori_id')
                                    <div class="error" style="margin-bottom: 3px;margin-top: 3px;">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="number" id="kategori_id" name="kategori_id" min="1" max="8" style="margin-bottom: 3px;margin-top: 3px;">
                                <br>
                                <label for="name" style="margin-bottom: 3px;margin-top: 3px;">Nama Tempat:</label>
                                @error('name')
                                    <div class="error" style="margin-bottom: 3px;margin-top: 3px;">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="text" id="name" name="name" style="margin-bottom: 3px;margin-top: 3px;">
                                <br>
                                <label for="desc" style="margin-bottom: 3px;margin-top: 3px;">Deskripsi Tempat:</label>
                                @error('desc')
                                    <div class="error" style="margin-bottom: 3px;margin-top: 3px;">
                                        {{$message}}
                                    </div>
                                @enderror
                                <textarea id="desc" name="desc" style="margin-bottom: 3px;margin-top: 3px;"></textarea>
                                <br>
                                <label for="alamat" style="margin-top: -5px;margin-bottom: 3px;margin-top: 3px;">Alamat:</label>
                                @error('alamat')
                                    <div class="error" style="margin-top: -7px;margin-bottom: 3px;margin-top: 3px;">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="text" id="alamat" name="alamat" style="margin-top: -7px;margin-bottom: 3px;margin-top: 3px;">
                                <br>
                            </div>
                            <div class="kanan">
                                <label for="harga" style="margin-bottom: 3px;margin-top: 3px;">Harga:</label>
                                @error('harga')
                                    <div class="error" style="margin-bottom: 3px;margin-top: 3px;">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="number" id="harga" name="harga" style="margin-bottom: 3px;margin-top: 3px;">
                                <br>
                                <label for="rating" style="margin-bottom: 3px;margin-top: 3px;">Rating:</label>
                                @error('rating')
                                    <div class="error" style="margin-bottom: 3px;margin-top: 3px;">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="number" id="rating" name="rating" min="0" max="5" style="margin-bottom: 3px;margin-top: 3px;">
                                <br>
                                <label for="img" style="margin-bottom: 3px;margin-top: 3px;">Image:</label>
                                @error('img')
                                    <div class="error" style="margin-bottom: 3px;margin-top: 3px;">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="file" id="img" name="img" style="margin-bottom: 3px;margin-top: 3px;">
                                <br>
                                <label for="telp" style="margin-bottom: 3px;margin-top: 15px;">Telp:</label>
                                @error('telp')
                                    <div class="error" style="margin-bottom: 3px;margin-top: 3px;">
                                        {{$message}}
                                    </div>
                                @enderror
                                <input type="text" id="telp" name="telp" style="margin-bottom: 3px;margin-top: 3px;">
                                <br>
                            </div>
                        </div>
                        <label for="gmaps" style="margin-bottom: 3px;margin-top: 3px;">Link Gmaps:</label>
                        @error('gmaps')
                            <div class="error" style="margin-bottom: 3px;margin-top: 3px;">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="text" id="gmaps" name="gmaps" style="margin-bottom: 3px;margin-top: 3px;"><br>
                        <br>
                        <input type="submit" value="Submit" style="margin-bottom: 10px;">
                    </form>
                </div>
            </div>
            <div class="popup-olahraga" id="popup-olahraga">
                        <div class="popupcontent-olahraga">
                            <div class="popupimg">
                                <a href="#" class="popupclose-olahraga">&times;</a>
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
            <div class="tulis-awal">
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
                    @if (auth()->user()->tipe == 'admin')
                        <div class="button-tambah-tempat">
                            <a href="#popup-form"><button class="normal" style="margin-bottom:15px; margin-left:5%">Tambah Tempat</button></a>
                        </div>
                    @endif
                </div>
                <div class="kegiatan">
                    <div class="olahraga">
                        <a href="#popup-olahraga">
                            <img src="images/Rectangle 2.png" alt="">
                            <div class="tulisan">
                                <h2 style="font-size: 28px; font-weight: normal;">Olahraga</h2>
                                <p style="margin-left: 1px;margin-top: -19px; color: rgba(255, 255, 255, 0.5);">230 Activities</p>
                            </div>
                        </a>
                        
                    </div>
                    <div class="musik">
                        <a href="/Musik">
                            <img src="images/Rectangle 3.png" alt="">
                            <div class="tulisan">
                                <h2 style="font-size: 28px; font-weight: normal;">Studio Musik</h2>
                                <p style="margin-left: 1px;margin-top: -19px; color: rgba(255, 255, 255, 0.5);">121 Activities</p>
                            </div>
                        </a>
                        
                    </div>
                    <div class="gedung">
                        <a href="/Ballroom">
                            <img src="images/Rectangle 4.png" alt="">
                            <div class="tulisan">
                                <h2 style="font-size: 28px; font-weight: normal;">Ballroom</h2>
                                <p style="margin-left: 1px;margin-top: -19px; color: rgba(255, 255, 255, 0.5);">212 Activities</p>
                            </div>
                        </a>
                        
                    </div>
                    <div class="stadion">
                        <a href="/Konser">
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
        </main>

        <!--Footer-->
        <footer id = "contact">
                <div class = "layar-dalam">
                    <div class="footerproduk">
                        <h5>Produk</h5>
                        <a href="/Konser"><h4>Area Konser</h4></a>
                        <a href="/Ballroom"><h4>Ballroom</h4></a>
                        <a href="#popup-olahraga"><h4>Olahraga</h4></a>
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
    <script src="Rentify.js"></script>
</body>
</html>