<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentify</title>
    <link rel="stylesheet" href="../TampilanPerTempat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>
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
                <a href=""><img src="../asset/traveloka.png" class="putih" /></a>
                <a href=""><img src="../asset/traveloka-black.png" class="hitam" /></a>
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
            <!--Popup Olahraga-->
            <div class="popup-olahraga" id="popup-olahraga">
                <div class="popupcontent-olahraga">
                    <div class="popupimg">
                        <a href="#" class="popupclose-olahraga">&times;</a>
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
            <!--Popup Pemesanan-->
            <div class="popup" id="popup">
                <div class="popupcontent">
                    <div class="popupimg">
                        <img class="pojokkiri" src="../asset/787532407.jpg" alt="">
                        <img src="../asset/Ballroom-SudirmanGrandBallroom.jpg" alt="">
                        <img class="pojokkanan" src="../asset/ArenaKonser-GWK.jpg" alt="">
                        <a href="#" class="popupclose">&times;</a>
                    </div>
                    <div class="popupheader">
                        <h4>Pemesanan</h4>
                    </div>
                    @if (auth()->user()->tipe == 'pembeli')
                    <form action="/PerTempat" method="post">
                    @csrf
                    <div class="popuptext">
                        <div class="sebelahan">
                        </div>
                        <div class="sebelahan">
                            <h4 class="waktu">Tanggal pemesanan : </h4>
                            <thead>
                                <tr>
                                    <tbody>
                                        <td>
                                                <input type="hidden" name='name' value={{$tempat->name}}>
                                                <input type="hidden" name='user' value={{auth()->user()->id}}>
                                                <input type="hidden" name='img' value={{$tempat->img}}>
                                                <input type="hidden" name='kategori' value={{$tempat->kategori_id}}>
                                                <input type="hidden" name='harga' value={{$tempat->harga}}>
                                                <input type="hidden" name='telp' value={{$tempat->telp}}>
                                                <input type="date" name="jadwal">    
                                            
                                        </td>
                                    </tbody>
                                </tr>
                            </thead>
                        </div>
                    </div>
                    <br>
                    <a href="/pilih" class="booknow"><button class="normal booknow">Book Now</button></a>
                </form>
                    @endif
                </div>
            </div>
            <section id="arenakonser">
                <div class="layar-dalam">
                    <p class="ringkasan">
                        @if ($tempat->kategori_id == 1)
                            {{'Arena Konser'}}
                        @elseif ($tempat->kategori_id == 2)
                            {{'Ballroom'}}
                        @elseif ($tempat->kategori_id == 3)
                            {{'Musik'}}
                        @elseif ($tempat->kategori_id == 4)
                            {{'Futsal'}}
                        @elseif ($tempat->kategori_id == 5)
                            {{'Badminton'}}
                        @elseif ($tempat->kategori_id == 6)
                            {{'Basket'}}
                        @elseif ($tempat->kategori_id == 7)
                            {{'Golf'}}
                        @else
                            {{'Tennis'}}
                        @endif
                    </p>
                    <h3>Informasi Tempat</h3>
                    <div class ="tempat">
                        <div class ="kelompokutama">
                            <div class="tempatutama"><img src="../storage/{{$tempat->img}}"></div>
                        </div>
                    <div class="isi">
                        <section id="keterangan">
                            <div class="kiri">
                                <h1 class="Stadion">{{$tempat->name}}</h1>
                                <section id="sebelahanlokasi" class="Lokasi">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <h6>{{$tempat->alamat}}</h6>
                                </section>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;{{$tempat->desc}}</span>
                                <div class="konten-isi">
                                    <div class="Fasilitas">
                                        <h5>Fasilitas</h5>
                                    <div class="border"></div>
                                    </div>
                                    <section id="sebelahan" class="iconfasilitas">
                                        <i class="fa-solid fa-chair"></i>
                                        <section id="Icon">
                                            <h6>Tersedia 77.193 Kursi</h6>
                                            <span>Kursi penonton diatur layaknya bioskop di mana sudah single seat. Otomatis, jika penonton datang untuk menonton pertandingan di sini, penonton dibekali nomor kursi yang bisa dipesan secara online.</span>
                                        </section>
                                    </section>
                                    <section id="sebelahan" class="iconvolume">
                                        <i class="fa-solid fa-volume-high"></i>
                                        <section id="Icon">
                                            <h6>Sound System Terbaik</h6>
                                            <span>Sistem audio ternyata nggak luput dari perhatiaan. Jika sebelumnya hanya menggunakan stereo sound system, SUGBK hadir dengan sound system yang lebih jernih dan menyeluruh. Sehingga, kala lagu Indonesia Raya dinyanyikan, suara yang dihasilkan nggak pecah dan terkesan menyatu.</span>
                                        </section>
                                    </section>
                                </div>
                            </div>
                            <div class="kanan">
                                <div class ="rating">
                                    <h4>4.8</h4>
                                    @for ($i = 0; $i < (int)$tempat->rating; $i++)
                                                <i class="fas fa-star"></i>
                                     @endfor
                                </div>
                                <div class="Harga">
                                    @if ($tempat->harga >= 1000000)
                                    <h1>Rp.{{$tempat->harga/1000000}}.{{"000.000"}},-</h1>
                                    
                                    @elseif($tempat->harga >= 1000 and $tempat->harga < 1000000)
                                    <h1>Rp.{{$tempat->harga/1000}}.{{"000"}},-</h1>
                                    @endif
                                </div>
                                <div class="keterangankanan">
                                    <div class="jamoperasional">
                                        <span>Jam operasional 24 jam</span>
                                    </div>
                                    <h6>Ketentuan :</h6>
                                    @if ($tempat->kategori_id == 1)
                                        
                                    <div class="TOR">
                                        <h4>Siapkan TOR</h4>
                                        <span>(Khusus Arena Konser)</span>
                                    </div>
                                    <div class="Proposal">
                                        <h4>Siapkan Proposal</h4>
                                        <span>(Khusus Arena Konser)</span>
                                    </div>
                                    @endif
                                    <section id="sebelahan" class="phone">
                                        <i class="fa-solid fa-phone"></i>
                                        <span>Hubungi kami untuk<br>informasi lebih lanjut</span>
                                    </section>
                                    @if (auth()->user()->tipe == 'pembeli')
                                    <div class="button">
                                        <a href="#popup"><button class="normal">Atur Jadwal</button></a>
                                    </div>
                                    @endif
                                    @if (auth()->user()->tipe == 'admin')
                                    <div class="button">
                                        <form action="/FormEdit/{{$tempat->id}}">
                                            <button class="normal">Edit Tempat</button>
                                        </form>
                                    </div>
                                    <div class="button">
                                        <a href="/Konser/{{$tempat->id}}"><button onclick="return confirm('Apakah Anda yakin menghapus tempat ini?')" class="normal">Hapus Tempat</button></a>
                                    </div>
                                    @endif
                                    @if ($tempat->kategori_id == 1)
                                    <div class="submit">
                                        <span>&nbsp;&nbsp;&nbsp;Setelah Submit Berkas &<br>Mengatur Jadwal Tim Kami<br>&nbsp;&nbsp;Akan Menghubungi Anda<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dalam 48 Jam</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </section>
                        <section id="keteranganbawah">
                            <section id="sebelahan" class="iconfasilitas">
                                <i class="fa-solid fa-lightbulb"></i>
                                <section id="Icon">
                                    <h6>Pencahayaan Maksimal</h6>
                                    <span>Untuk mendapatkan kualitas siaran langsung yang lebih baik, pencahayaan stadion wajib diperhatikan. Nah, SUGBK kini hadir dengan sistem pencahayaan yang terangnya mencapai 3.000 lux. Sistem ini mendukung siaran langsung olahraga ditampilkan dalam format High Definition (HD).</span>
                                </section>
                            </section>
                            <section id="sebelahan" class="iconcamera">
                                <i class="fa-solid fa-camera"></i>
                                <section id="Icon">
                                    <h6>CCTV 7K</h6>
                                    <span>Untuk meminimalisir terjadinya tindak kejahatan, pengelola Stadion Utama Gelora Bung Karno memasang sejumlah CCTV 7K. Nah, kamera pemantau ini jauh lebih canggih karena mengadopsi teknologi deteksi wajah. Sistem ini dapat mendeteksi aktivitas penonton serta dapat mencocokan dengan wajah pelaku tindak kejahatan teroris yang ada di database Badan Nasional Penanggulangan Terorisme.</span>
                                </section>
                            </section>
                        </section>
                        <div class="Map">
                            <div class="lokasimap"></div>
                            <h5>Lokasi Map</h5>
                            <div class="border"></div>
                        </div>
                        <section id="Map">
                            <section id="sebelahan">
                                <iframe src="{{$tempat->gmaps}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </section>
                        </section>
                            <section id="TempatLainnya">
                                <h5>Tempat Lainnya</h5>
                                <div class="border"></div>
                            </section>
                            <div class ="kelompok1">
                                @foreach ($rand as $r)
                                <div class="tempat1" onclick="window.location.href='{{$r->id}}'"><img src="../storage/{{$r->img}}">
                                    <h4>{{$r->name}}</h4>
                                    <div class ="rating">
                                        <h4>{{$r->rating}}</h4>
                                        @for ($i = 0; $i < (int)$r->rating; $i++)
                                            <i class="fas fa-star" style="margin-left: 10px"></i>
                                            
                                        @endfor
                                    </div>
                                    <span>{{$r->alamat}}</span></div>
                                    
                                @endforeach
                            </div>
                        </div>
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
    <script src="../Rentify.js"></script>
    <script src="../asset/daterangepicker/moment.min.js"></script>
    <script src="../asset/daterangepicker/daterangepicker.js"></script>
</body>
</html>