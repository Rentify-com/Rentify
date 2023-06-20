<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tempat</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <style>
        * {
        font-family: 'Montserrat';
        line-height: 20px;
        font-size: 15px;
        }
        .layar-dalam{
         width: 1000px;
        margin: auto;
        }
        .layar-penuh {
        width: 100%;
        }
        html{
        margin: 0;
        padding: 0;
        background-color: #dedede;
        scroll-behavior: smooth;
        }
        nav{
        z-index: 0;
        color: #fff;
        text-align: center;
        position: fixed;
        line-height: 60px;
        width: 100%;
        transition: background-color 0.5s ease;
        }
        nav.putih{
            background-color: #fff;
        }
        nav .logo{
            /*Penempatan classnya blm ukuran logony*/
            float: left;
            position: relative;
            line-height: 55px;
            text-align: center;
        }
        /*Ukuran logony*/
        nav .logo img {
            vertical-align: middle;
            width: 50px;
        }
        /*Posisi menu header*/
        nav .menu{
            float: right;
            height: 60px;
            max-width: 700px;
        }
        /*Posisi menunya biar letaknya sebelahan*/
        nav .menu ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav .menu ul li{
            list-style-type: none;
            float: left;
            line-height: 60px;
        }
        /*Jarak masing-masing menu header*/
        nav ul li a{
            color: rgb(0, 0, 0);/*warna menu header*/
            text-align: center;
            padding: 0px 16px 0px 16px;
            text-decoration: none;/*Biar gada garis dibawah header menunya*/
        }
        /*Biar pas ngarahin cursor ke menu ada garis bawahnya*/
        nav ul li a:hover{
            text-decoration: underline;
        }
        /*Pengaturan header*/
        header{
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
            z-index: 2;
        }
        #navbar {
            /*Jadiin menu header samping-sapingan, tapi jaraknya masih dempet banget*/
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar li {
            /*Benerin jarak masing-masing menu header*/
            list-style: none;
            padding: 0 20px;
            position: relative;
        }

        #navbar li a {
            /*Ngilangin garis di masing-masing bawah header menu + atur ukuran sama warna font*/
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            color: #343a40;;  /*Warna masing-masing menu*/
            /*Transisi kalo warna kalo nunjukin cursor ke arah menu header*/
            transition: 0.3s ease;
        }

        #navbar li a:hover,
        #navbar li a.active {
            /*Ngasih efek berubah warna kalo menunya diarahin cursor sama stay terus warnanya kalo lagi ada di menu itu*/
            color: #01a6ff;
        }
        nav.putih {
        background-color: #dedede;
        }
        nav.putih .tombol-menu .garis{
            background-color: #01a6ff;
        }
        nav.putih ul li a{
            color: #333;
        }
        nav .logo img.hitam{
            display: none;
        }
        .tombol-menu {
            position: absolute;
            top: 1.7rem;
            right: 1rem;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 20px;
        }
        /*Sandwich*/
        .tombol-menu .garis{
            height: 3px;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
        }
        form {
        width: 500px;
        margin: 0 auto;
        text-align: left;
        }

        label {
        display: block;
        margin-bottom: 8px;
        }

        input[type="text"],
        textarea,
        input[type="number"],
        input[type="file"],
        input[type="submit"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
        }

        input[type="submit"] {
        background-color: #343a40;
        color: white;
        cursor: pointer;
        }

        input[type="submit"]:hover {
        background-color: #01a6ff;
        transition: all 0.2s ease-in-out;
        transform: scale(0.95);
        }

        footer{
        padding: 50px 0px 50px 0px;
        background-color: #343a40;
        color: #FFF;
        }
        footer .layar-dalam {
        /*Untuk jadiin gk turun ke bawah tpi jadiin row*/
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        }
        footer .layar-dalam div {
        width: 20%;
        }
        footer .layar-dalam h5 {
        margin-top: 0px;
        font-size: 20px;
        font-weight: bold;
        }
        footer .layar-dalam .copyright {
        width: 100%;
        margin-top: 30px;
        padding-top: 30px;
        border-top: 1px solid #666;
        text-align: center;
        }
        #contact h5{
        font-size: 20px;
        margin: 0px 0px 15px 5px;

        }
        .footertentang h4{
        padding: 0px 0px 15px 5px;
        margin: 0;
        color: #fff;
        font-weight: normal;
        }
        .footerpembayaran{
        padding: 0px 150px 0px 0px;
        }
        .footerproduk h4{
        padding: 0px 0px 15px 5px;
        color: #fff;
        font-weight: normal;
        text-decoration: none;
        margin: 0;
        }
        .footerproduk a{
        text-decoration: none;
        }
        footer h4:hover{
        /*Ngasih efek berubah warna kalo menunya diarahin cursor*/
        color: #01a6ff;
        transition: 0.3s;
        }
        .footertentang a{
        text-decoration: none;
        }
        .pembayaranluar{
        padding: 0px 0px 10px 5px;
        margin: 0px;
        }
        .pembayaranbank img {
        width: 700%;
        padding: 0px 0px 10px 0px;
        }
        .sebelahan{
        display: flex;
        justify-content: center;
        padding: 0px 0px 0px 0px;
        }
        .logo-samping{
        margin-top: -280px;
        margin-left: 50px;
        }
        .user{
        margin: 0;
        padding: 0;
        color: #343a40;;
        font-weight: 600;
        }
        .btn-keluar{
        font-weight: 650;
        margin-left: 20px;
        width: 100px;
        height: 32px;
        margin-top: 0px;
        background:none;
        border: 3px solid;
        color: #343a40;;
        border-color: #343a40;;
        border-radius: 3px;
        cursor: pointer;
        }

        .btn-keluar:hover {
        box-shadow: rgb(0, 255, 255);
        border-radius: 3px;
        border-color: #343a40;
        background-color: #01a6ff;
        color: #343a40;
        transition: all 0.2s ease-in-out;
        transform: scale(0.95);
        }
        .popup-olahraga{
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.8);
        position: fixed;
        top: 0;
        left: 0;

        opacity: 0;
        visibility: hidden;
        transition: all 0.3s;
        }
        .popupcontent-olahraga{
        width: 35%;
        background-color: #fff;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-radius: 20px;

        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.25);
        
        opacity: 0;

        transition: all 0.5s 0.1s;
        }
        #popup-olahraga:target{
            opacity: 1;
            visibility: visible;
        }
        #popup-olahraga:target .popupcontent-olahraga{
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
        .popupclose-olahraga:link,
        .popupclose-olahraga:visited{
            position: absolute;
            top: 5%;
            right: 3%;
            text-decoration: none;
            color: rgb(0, 0, 0);
            font-size: 30px;
            line-height: 1;
            transition: all .3s;
        }
        .popupclose-olahraga:hover,
        .popupclose-olahraga:active{
            color: #01a6ff;
        }
        button.normall {
            margin: 5px;
            font-size: 14px;
            font-weight: 600;
            padding: 15px 30px;
            color: #fff;
            background-color: #343a40;
            border-radius: 4px;
            cursor: pointer;
            border: none;
            outline: none;
            transition: 0.2s;
        }

        button:hover {
            background-color: #01a6ff;
            color: #fff;
            transition: all 0.2s ease-in-out;
            transform: scale(0.95);
        }
        .popupheader{
        margin-left: 10px;
        text-align: center;
        color: #555;
        margin-bottom: -5px;
        }
        section h3 {
        font-size: 30px;
        letter-spacing: 0.275em;
        padding: 0px 0px 0px 7px;
        }
        @media screen and (max-width:991.98px) {
            #navbar li a {
                /*Ngilangin garis di masing-masing bawah header menu + atur ukuran sama warna font*/
                text-decoration: none;
                font-size: 16px;
                font-weight: 600;
                color: #ffffff;  /*Warna masing-masing menu*/
                /*Transisi kalo warna kalo nunjukin cursor ke arah menu header*/
                transition: 0.3s ease;
            }
            .user{
                color: rgb(255, 255, 255);
                margin-top: 0px;
                margin-left: 0px;
            }
            .btn-masuk{
                margin-left: 0;
                width: 100px;
                height: 32px;
                margin-top: 0px;
                background:none;
                border: 2px solid;
                color: rgb(255, 255, 255);
                border-color: rgb(255, 255, 255);
                border-radius: 3px;
                cursor: pointer;
            }
            .btn-daftar{
                margin-left: 0;
                width: 100px;
                height: 32px;
                margin-top: 0px;
                border: 2px solid;
                background:white;
                color: rgb(0, 0, 0);
                border-color: #fff;
                border-radius: 3px;
                cursor: pointer;
            }
            .btn-keluar{
                width: 100px;
                height: 32px;
                margin-top: 0px;
                background:none;
                border: 2px solid;
                color: rgb(255, 255, 255);
                border-color: rgb(255, 255, 255);
                border-radius: 3px;
                cursor: pointer;
            }
            .btn-keluar:hover{
                width: 100px;
                height: 32px;
                margin-top: 0px;
                background:none;
                border: 2px solid;
                color: rgb(255, 255, 255);
                background-color: #01a6ff;
                border-color: rgb(0, 0, 0);
                border-radius: 3px;
                cursor: pointer;
            }
            .layar-dalam {
                width: 90%;
            }
            .col{
                display: flex;
                max-width: 80%;
            } 
            nav .menu ul{
                display: none;
                margin-top: 60px;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }
            #navbar {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                position: fixed;
            }
            nav .menu ul li{
                width: 100%;
                border-bottom: 1px solid #ccc;
                background-color: #dedede;
                line-height: 40px;
            }
            nav .menu ul li a{
                color: #333;
            }
            .tombol-menu{
                display: flex;
            }
    }
    </style>
</head>

<body>
    <!--Header-->
    <nav style="background-color: #fff;">
        @if(session()->has('Success'))
            <script>alert("{{session('Success')}}")</script>
        @endif
        <div class="layar-dalam">
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                    <h7 class="garis"></h7>
                </a>
                <ul id="navbar">
                    <li ><a href="/dashboard">Beranda</a></li>
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
    <div class="layar-penuh">
        <br>
        <br>
        <br>
        <br>
        <h3 style="text-align: center;font-size:25px;letter-spacing: 0.34em;padding-left:9px;">EDIT TEMPAT</h3>
        <p class="ringkasan" style="text-align: center;font-size:17px;">
            Ubah Keterangan Tempat-mu
        </p>
        <br>
        <form action="/PerTempat/{{$tempat->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="kategori_id">ID Kategori:</label>
            <input type="number" id="kategori_id" name="kategori_id" value="{{old('kategori_id',$tempat->kategori_id)}}"><br>
            <br>
            <label for="name">Nama Tempat:</label>
            <input type="text" id="name" name="name" value="{{old('name',$tempat->name)}}"><br>
            <br>
            <label for="desc">Deskripsi Tempat:</label>
            <textarea id="desc" name="desc">{{old('desc',$tempat->desc)}}</textarea><br>
            <br>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="{{old('alamat',$tempat->alamat)}}"><br>
            <br>
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" value="{{old('harga',$tempat->harga)}}"><br>
            <br>
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" min="0" max="5" value="{{old('rating',$tempat->rating)}}"><br>
            <br>
            <label for="img">Image:</label>
            <input type="file" id="img" name="img"><br>
            <br>
            <label for="telp">Telp:</label>
            <input type="text" id="telp" name="telp" value="{{old('telp',$tempat->telp)}}"><br>
            <br>
            <label for="gmaps">Link Gmaps:</label>
            <input type="text" id="gmaps" name="gmaps" value="{{old('gmaps',$tempat->gmaps)}}"><br>
            <br>
            <input type="submit" value="submit">
        </form>
        <br>
        <br>
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