<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="category.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
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
    <div class="box">
        <?php
        include "config.php";

        $sql = "SELECT * FROM foto WHERE category='gravity'";
        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_array()) {
                $nama = $row['Nama'];
                $deskripsi = $row['deskripsi'];
                echo "<div class='box1'>
                            <img src='" . $row['image'] . "' alt=''>
                            <h2>$nama</h2>
                            <div style='display: flex; justify-content: center; align-items: center;'>
                            <a class='btn_download' download='wallpaper.jpg' href='" . $row['image'] . "&category=" . $row['category'] . "'>download</a>
                            <a class='btn_comment' href='comment.php?type=" . $row['type'] . "&id=" . $row['id'] . "'>comment</a>
                            </div>
                    </div>";
            }
        }
        ?>
    </div>