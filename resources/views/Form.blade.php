<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah tempat</title>
    <style>
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
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        }

        input[type="submit"]:hover {
        background-color: #45a049;
        }

        .error{
            color: red;
        }

    </style>

    <body>
        <body>
            <form action="/Konser" method="post" enctype="multipart/form-data">
                @csrf
                <label for="kategori_id">ID Kategori:</label><br>
                @error('kategori_id')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <input type="number" id="kategori_id" name="kategori_id" min="1" max="8"><br>
                <br>
                <label for="name">Nama Tempat:</label><br>
                @error('name')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <input type="text" id="name" name="name"><br>
                <br>
                <label for="desc">Deskripsi Tempat:</label><br>
                @error('desc')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <textarea id="desc" name="desc"></textarea><br>
                <br>
                <label for="alamat">Alamat:</label><br>
                @error('alamat')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <input type="text" id="alamat" name="alamat"><br>
                <br>
                <label for="harga">Harga:</label><br>
                @error('harga')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <input type="number" id="harga" name="harga"><br>
                <br>
                <label for="rating">Rating:</label><br>
                @error('rating')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <input type="number" id="rating" name="rating" min="0" max="5"><br>
                <br>
                <label for="img">Image:</label><br>
                @error('img')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <input type="file" id="img" name="img"><br>
                <br>
                <label for="telp">Telp:</label><br>
                @error('telp')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <input type="text" id="telp" name="telp"><br>
                <br>
                <label for="gmaps">Link Gmaps:</label><br>
                @error('gmaps')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror
                <input type="text" id="gmaps" name="gmaps"><br>
                <br>
                <input type="submit" value="Submit">
              </form>
        </body>
    </body>

</head>
<body>
    
</body>
</html>