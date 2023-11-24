<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="berhasil_login.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <title>dashboard</title>
</head>
<body>
    <nav>
        <div class="Logo">
            <ul>
                <li><a class="judul" href="berhasil_login.php">SyaWpp</a></li>
            </ul>
        </div> 
        <div class="head">
            <ul>
                <div class="pilihan">
                    <li><a href="berhasil_login.php"><i class="ph ph-house"> Home</a></i></li>
                </div>
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
    <div class="category">
        <h2>Category :</h2> 
    </div>
        <div class="opsi_category">
            <a class="btn_category" href="pemandangan.php">Pemandangan</a>
            <a class="btn_category" href="anime.php">Anime</a>
            <a class="btn_category" href="abstrak.php">Abstrak</a>
            <a class="btn_category" href="gravity.php">Gravity</a>
            <a class="btn_category" href="animals.php">animal</a>
            <a class="btn_category" href="nature.php">nature</a>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <img src="../img/desktop/image1.jpg" alt="Desktop">
            <h2>Wallpaper Desktop</h2>
            <p>
                Berisi Wallpaper Desktop yang dapat
                memperindah layar kalian.
                <br>
                memiliki beberapa kategori seperti pemandangan, anime, gelap, terang, fantasi, Dll.
            </p>
            <a class="btn_download" href="desktop.php">Next</a>
        </div>
        <div class="card">
            <img src="../img/dashboard/mobiledash.jpg" alt="Mobile">
            <h2>Wallpaper Mobile</h2>
            <p>
                Berisi Wallpaper Mobile yang dapat
                memperindah layar kalian.
                <br>
                memiliki beberapa kategori seperti pemandangan, anime, gelap, terang, fantasi, Dll.
            </p>
            <a class="btn_download" href="mobile.php">Next</a>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#93B1A6" fill-opacity="1" d="M0,32L21.8,69.3C43.6,107,87,181,131,213.3C174.5,245,218,235,262,245.3C305.5,256,349,288,393,266.7C436.4,245,480,171,524,160C567.3,149,611,203,655,224C698.2,245,742,235,785,224C829.1,213,873,203,916,170.7C960,139,1004,85,1047,90.7C1090.9,96,1135,160,1178,154.7C1221.8,149,1265,75,1309,58.7C1352.7,43,1396,85,1418,106.7L1440,128L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>    
</script>
</body>
</html>