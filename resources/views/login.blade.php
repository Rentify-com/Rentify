<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">

    <body>
        <nav>
            <div class = navi>
                <ul>
                    <li style="color:white">
                        <a href="/">
                            <img src="images/footer-logo_white-xs 1.png" alt="">
                        </a>
                    </li>
                    <li style="color:white;margin-left: 10px;margin-top: 8px;font-size: 18px"><a href="/">Rentify</a></li>
                <li style="color:white;margin-left: 550px;margin-top: 8px;font-size: 18px" ><a href="/">Beranda</a></li>
                <li style="color:white;margin-left: 50px;margin-top: 8px;font-size: 18px"><a href="/bantuan">Bantuan</a></li>
                <li style="color:white;margin-left: 50px;margin-top: 8px;font-size: 18px"><a href="/tentang">Tentang</a></li>
                    <li>
                        <button class="btn-masuk">Masuk</button>
                    </li>
                    <li>
                        <a href="/daftar"><button class="btn-daftar">Daftar</button></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="kotak-login">
            <form class="form-login" action = "/login" method="post">
                @csrf
                <h1 class="title-box">Masuk</h1>
                <div class="register-sukses">
                    @if(session()->has('success'))
                        {{session('success')}}
                    @endif

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
                <button class="normal">Masuk</button>
                <p>Belum punya akun?</p>
                <div class="belum-daftar">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <a href="/daftar">Daftar</a>
                </div>
            </form>

            
                
        </div>
            
            
        
          
    </body>

</head>
<body>
    
</body>
</html>