<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mobile.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Mobile Wallpaper</title>
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

        $sql = "SELECT * FROM foto WHERE type='mobile'";
        $result = $conn->query($sql);

        if ($result) {
            while ($row = $result->fetch_array()) {
                $nama = $row['Nama'];
                $deskripsi = $row['deskripsi'];
                echo "<div class='box1'>
                    <img src='" . $row['image'] . "' alt=''>
                    <h2>$nama</h2>
                    <p style='text-align: center;'>$deskripsi</p>
                    <div style='display: flex; justify-content: center; align-items: center;'>
                                <a class='btn_download' download='wallpaper.jpg' href='" . $row['image'] . "'>download</a>
                                <a class='btn_comment' href='comment.php?type=" . $row['type'] . "&id=" . $row['id'] . "'>comment</a>
                            </div>
                </div>";
            }
        }
        ?>
    </div>
</body>

</html>