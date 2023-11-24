<?php
include 'config.php';

if (isset($_POST['post_comment'])) {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    $post_id = $_POST['post_id'];

    //waktu comment
    $current_timestamp = date('Y-m-d '); 

    $sql = "INSERT INTO komentar (id, nama, pesan, post_id, timestamp)
            VALUES (NULL, '$nama', '$pesan', '$post_id', '$current_timestamp')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="comment.css">
    <title></title>
</head>
<body>
    <a href="berhasil_login.php" class="back"><i class="ph ph-arrow-u-up-left"></i>Back</a>
    <div class="wrapper">
        <form action="" method="post" class="form">
            <input type="hidden" name="post_id" value="<?= $_GET['id'] ?>">
            <input type="text" class="pesan" name="nama" placeholder="nama">
            <br>
            <textarea name="pesan" cols="30" rows="10" class="pesan" placeholder="pesan"></textarea>
            <br>
            <button type="submit" class="btn" name="post_comment">Post Comment</button>
        </form>
    </div>

    <div class="content">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $sql = "SELECT * FROM komentar WHERE post_id='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // output data of each row
                    $timestamp = strtotime($row['timestamp']);
                    $formatted_timestamp = date('d M Y', $timestamp);
        ?>
                    <div class="comment">
                        <h3><?php echo $row['nama']; ?></h3>
                        <p><?php echo $row['pesan']; ?></p>
                        <p>Posted on: <?php echo $formatted_timestamp; ?></p>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>
</body>
</html>
