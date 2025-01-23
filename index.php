<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nonton Video</title>
    <style>
        /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Navbar Styles */
.navbar {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

.navbar .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo {
    font-size: 1.8rem;
}

.search-form {
    display: flex;
}

.search-form input[type="text"] {
    padding: 8px;
    border: none;
    border-radius: 4px 0 0 4px;
}

.search-form button {
    padding: 8px 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
}
.pagination {
            margin-top: 20px;
            text-align: center;
        }
        .pagination a {
            display: inline-block;
            padding: 8px 16px;
            margin: 0 5px;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }
        .pagination a.active {
            background-color: #007bff;
            color: #fff;
        }
/* Content Styles */
.content {
    padding: 20px 0;
}

.video {
    margin-bottom: 20px;
}

.video iframe {
    width: 100%;
}

.video p {
    margin-top: 5px;
}

/* Footer Styles */
.footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.input-form {

    margin-top: 10px;
    display: flex;
    justify-content: center;
}

.input-form input[type="text"], input[type="password"] {
    margin-left: 10px;
    padding: 8px;
    border: none;
    border-radius: 4px 0 0 4px;
}

.input-form button {
    margin-left: 10px;
    padding: 8px 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
}/* CSS untuk popup */

.popup-button {
    background-color: #007bff; /* Warna latar belakang */
    color: #fff; /* Warna teks */
    border: none; /* Tanpa border */
    padding: 10px 20px; /* Padding di dalam tombol */
    border-radius: 4px; /* Sudut bulat */
    cursor: pointer; /* Kursor menunjuk saat di atas tombol */
    transition: background-color 0.3s ease; /* Transisi untuk efek hover */
}

.popup-button:hover {
    background-color: #0056b3; /* Warna latar belakang saat hover */
}

.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* latar belakang gelap transparan */
    z-index: 1000; /* z-index tinggi untuk menempatkan di atas elemen lain */
    justify-content: center;
    align-items: center;
}

.popup-content {
    background-color: #fff; /* warna background popup */
    padding: 20px; /* padding di dalam popup */
    border-radius: 5px; /* sudut bulat */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* bayangan untuk efek kedalaman */
    position: relative;
    max-width: 400px; /* lebar maksimum popup */
    width: 100%;
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.5rem; /* ukuran font untuk tombol close */
    cursor: pointer;
    color: #888; /* warna teks tombol close */
}

.additional-form label {
    display: block;
    margin-bottom: 8px; /* jarak antara label-form */
}

.additional-form input[type="text"],
.additional-form input[type="password"],
.additional-form button {
    width: 100%; /* lebar penuh untuk input dan tombol */
    padding: 10px; /* padding di dalam input dan tombol */
    margin-bottom: 10px; /* jarak antara input dan tombol */
    border: 1px solid #ccc; /* garis pinggiran dengan warna abu-abu */
    border-radius: 4px; /* sudut bulat */
}

.additional-form button {
    background-color: #007bff; /* warna latar belakang tombol */
    color: #fff; /* warna teks tombol */
    border: none; /* tanpa border */
    cursor: pointer; /* kursor menunjuk saat di atas tombol */
}
@media (max-width: 500px) {
    .container {
        padding: 0 10px; /* Padding lebih kecil untuk konten */
    }

    .search-form,
    .input-form {
        max-width: 100%; /* Form dan input mengisi lebar maksimum */
    }
    .video{
        width: 100%;
    }

    .input-form input[type="text"],
    .input-form input[type="password"],
    .input-form button {
        width: 100%; /* Input dan tombol mengisi lebar penuh */
    }
}
    </style>
    <script>
        function uploadVideo() {
            var nama = document.getElementsByName("nama")[0].value;
            var link = document.getElementsByName("link")[0].value;
            var password = prompt("Masukkan kata sandi:");

            if (password === "12345") {
                if (nama === "" || link === "") {
                    alert("Nama dan Link harus diisi.");
                } else {
                    var form = document.getElementsByClassName("input-form")[0];
                    form.submit();
                }
            } else {
                alert("Kata sandi salah.");
            }
        }

        function deleteVideo() {
            var nama = document.getElementsByName("nama")[0].value;
            var password = prompt("Masukkan kata sandi:");

            if (password === "12345") {
                if (nama === "") {
                    alert("Nama harus diisi.");
                } else {
                    var form = document.getElementsByClassName("input-form")[0];
                    form.submit();
                }
            } else {
                alert("Kata sandi salah.");
            }
        }
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <h1 class="logo">Nonton Video</h1>
            <form class="search-form" action="index.php" method="GET">
                <input type="text" name="q" placeholder="Cari video..." value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
                <button type="submit">Cari</button>
            </form>
        </div>
    </nav>

    <!-- Content -->
    <section class="content">
        <div class="container">
            <?php
            // Koneksi ke database atau inisialisasi koneksi $conn
            $servername = "ntze8.h.filess.io";
            $username = "nonton_ruleneeded";
            $password = "5932730571b4cd52b4cfb7e96a3e6c363f486cae";
            $dbname = "nonton_ruleneeded";

            // Membuat koneksi
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Memeriksa koneksi
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Tentukan jumlah data per halaman
            $per_page = 5;

            // Tentukan halaman saat ini
            $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

            // Hitung offset untuk query SQL berdasarkan halaman saat ini
            $offset = ($current_page - 1) * $per_page;

            // Query untuk mendapatkan jumlah total data
            $count_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tb_video");
            $count_row = mysqli_fetch_assoc($count_query);
            $total_items = $count_row['total'];

            // Hitung jumlah total halaman
            $total_pages = ceil($total_items / $per_page);

            // Query untuk menampilkan data video dengan pagination dan pencarian
            $search_query = isset($_GET['q']) ? mysqli_real_escape_string($conn, $_GET['q']) : '';
            $where_clause = $search_query ? "WHERE nama LIKE '%$search_query%'" : '';
            $query = mysqli_query($conn, "SELECT * FROM tb_video $where_clause LIMIT $per_page OFFSET $offset");

            while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="video">
                    <iframe src="https://drive.google.com/file/d/<?php echo $row['link']?>/preview" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                    <p><?php echo $row['nama']?></p>
                </div>
                <?php
            }
            ?>
            
            <!-- Tombol navigasi Prev dan Next -->
            <div class="pagination">
                <?php if ($current_page > 1) : ?>
                    <a href="?page=<?php echo $current_page - 1; ?><?php echo isset($_GET['q']) ? '&q='.$_GET['q'] : ''; ?>">Prev</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <a href="?page=<?php echo $i; ?><?php echo isset($_GET['q']) ? '&q='.$_GET['q'] : ''; ?>" <?php echo ($current_page == $i) ? 'class="active"' : ''; ?>><?php echo $i; ?></a>
                <?php endfor; ?>

                <?php if ($current_page < $total_pages) : ?>
                    <a href="?page=<?php echo $current_page + 1; ?><?php echo isset($_GET['q']) ? '&q='.$_GET['q'] : ''; ?>">Next</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Form untuk upload dan hapus video -->
    <footer class="footer">
        <div class="container">
            <form class="input-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="text" name="link" placeholder="Id Key..." required>
                <input type="password" name="password" placeholder="Masukkan kata sandi..." required>
                <button type="submit" name="kirim">Kirim</button>
                <button type="submit" name="hapus" style="background-color: red">Hapus</button>
            </form>

            <?php
            // Proses untuk upload dan hapus video
            $expected_password = "12345";
            // Pastikan variabel koneksi $conn sudah ada sebelum kode ini
            // $conn = new mysqli($servername, $username, $password, $dbname);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['kirim'])) {
                    $link = $_POST['link'];
                    $password = $_POST['password'];
                    if ($password === $expected_password) {
                        if (empty($link)) {
                            echo "<p style='color: red;'>Link harus diisi.</p>";
                        } else {
                            // Menghasilkan nama video secara otomatis
                            $nama = "Video_" . uniqid(); // Contoh: Video_61d6f1cf6a43c
                            $stmt = $conn->prepare("INSERT INTO tb_video (nama, link) VALUES (?, ?)");
                            $stmt->bind_param("ss", $nama, $link);
                            if ($stmt->execute()) {
                                echo "<script>alert('Video berhasil diunggah.'); window.location.href = 'index.php';</script>";
                            } else {
                                echo "Data Gagal Disimpan!";
                            }
                        }
                    } else {
                        echo "<p style='color: red;'>Kata sandi salah.</p>";
                    }
                } elseif (isset($_POST['hapus'])) {
                    $nama_hapus = $_POST['link'];
                    $password = $_POST['password'];

                    if ($password === $expected_password) {
                        if (empty($nama_hapus)) {
                            echo "<p style='color: red;'>Nama harus diisi.</p>";
                        } else {
                            $stmt = $conn->prepare("DELETE FROM tb_video WHERE nama = ?");
                            $stmt->bind_param("s", $nama_hapus);

                            if ($stmt->execute()) {
                                echo "<script>alert('Video berhasil dihapus.'); window.location.href = 'index.php';</script>";
                            } else {
                                echo "Gagal menghapus data: " . $stmt->error;
                            }
                        }
                    } else {
                        echo "<p style='color: red;'>Kata sandi salah.</p>";
                    }
                }
            }
            // Menutup koneksi database
            $conn->close();
            ?>
        </div>
    </footer>

</body>
</html>
