<?php
include "config.php";

if (isset($_POST['submit'])) {
    $image = $_POST['image'];
    $type = $_POST['type'];
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $category = $_POST['category'];

    $sql = "INSERT INTO foto VALUES ('$image', '$type','$id', '$nama','$deskripsi','$category')";
    $result = $conn->query($sql);


    
    if ($result === TRUE) {
        if ($type == "mobile") {
            header("Location: mobile.php");
        } else if ($type == "desktop") {
            header("Location: desktop.php");
        }
        echo "BERHASIL";
        return false;
    } else {
        echo "Error";
        return false;
    }
    if ($result === TRUE) {
        if ($category == "pemandangan") {
            header("Location: mobile.php");
            header("Location: desktop.php");
        } else if ($category == "anime") {
            header("Location: mobile.php");
            header("Location: desktop.php");
        } else if ($category == "abstrak") {
            header("Location: mobile.php");
            header("Location: desktop.php");
        }
        else if ($category == "grafity") {
            header("Location: mobile.php");
            header("Location: desktop.php");
        }
        else if ($category == "animals") {
            header("Location: mobile.php");
            header("Location: desktop.php");
        }
        else if ($category == "nature") {
            header("Location: mobile.php");
            header("Location: desktop.php");
        }
        echo "BERHASIL";
        return false;
    }
        else{
            echo "Error";
            return false;
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Mobile Wallpaper</title>
</head>

<body>
    <!-- bagian navbar -->
    <nav>
        <div class="Logo">
            <ul>
                <li><a class="judul" href="berhasil_login.php">SyaWpp</a></li>
            </ul>
        </div>
        <div class="head">
            <ul>
                <li><a href="berhasil_login.php"><i class="ph ph-house"> Home</a></i></li>
                <li><a href="about.html"><i class="ph ph-article"> About</a></i></li>
                <li><a href="contact.html"><i class="ph ph-user"> Feedback</a></i></li></a>
                <li><a href="logout.php"><i class="ph ph-sign-out"></i>Sign Out</a></li>
        </div>
        <div class="Upload">
            <li><a class="btn_upload" href="upload.php"><i class="ph ph-upload"></i> Upload</a></li>
        </div>
        </ul>
        </div>
    </nav>
    </div>
    <div class="container">
        <div class="image-area">
            <img id="preview_image" src="untitled-2.jpg" alt="">
        </div>
        <input class="btn_choose" id="choose_image" type="file" accept="image/*"></input>
        <form method="post" action="upload.php">
            <input type="hidden" id="fileText" name="image">
            <div class="form">
                <label for="name">Wallpaper name: </label><br>
                <input type="text" value="SyaWpp" name="nama"><br>
                <label for="name">wallpaper deskripsi:</label><br>
                <textarea type="text" value="deskripsi" name="deskripsi">deskripsi</textarea>
            </div>
            <div class="category">
                <h3>pilih kategori wallpaper:</h3>
                <input type="radio" name="category" value="pemandangan">
                <label for="pemandangan"> Pemandangan</label><br>
                <input type="radio" name="category" value="anime">
                <label for="anime"> Anime</label><br>
                <input type="radio" name="category" value="abstrak">
                <label for="abstrak"> Abstrak</label>
                <input type="radio" name="category" value="gravity">
                <label for="grafity"> Gravity</label><br>
                <input type="radio" name="category" value="animals">
                <label for="animals"> Animals</label><br>
                <input type="radio" name="category" value="nature">
                <label for="nature"> Nature</label>
            </div>
            <div class="opsi">
                <h3>Jenis wallpaper :</h3>
                <input type="radio" value="mobile" name="type"> Mobile
                <input type="radio" value="desktop" name="type"> Desktop
            </div>
            <button type="submit" name="submit" class="btn_upload">Upload</button>
        </form>
    </div>
</body>
<script src="main.js"></script>
<script>
    let inputFile = document.getElementById('choose_image');
    let inputText = document.getElementById('fileText');

    function handleFileSelect(event) {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                inputText.value = e.target.result;
            }

            reader.readAsDataURL(file);
        }

    }
    inputFile.addEventListener('change', handleFileSelect);
</script>

</html>