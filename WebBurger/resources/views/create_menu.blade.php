<!DOCTYPE html>
<html>
<head>
    <title>Create Menu</title>
</head>
<body>
    <form action="/menu" method="post" enctype="multipart/form-data">
        @csrf
        <label for="jenis">Jenis:</label>
        <select name="jenis" id="jenis">
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
        </select><br><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br><br>

        <label for="harga">Harga:</label>
        <input type="text" name="harga" id="harga"><br><br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi"></textarea><br><br>

        <label for="image">Select image to upload:</label>
        <input type="file" name="image" id="image"><br><br>

        <input type="submit" value="Create Menu" name="submit">
    </form>
</body>
</html>
