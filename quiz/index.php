<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F6BFD3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.98);
            padding: 24px 32px;
            border-radius: 16px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
            width: 95%;
            max-width: 900px;
            margin: 20px auto;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            color: #d43f7f;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
        }
        .form-group {
            width: 100%;
            max-width: 700px;
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin: 0;
        }
        label {
            color: #4f5d72;
            font-weight: 700;
        }
        input[type="text"] {
            width: 100%;
            padding: 14px;
            border: 1px solid #c3d5f3;
            border-radius: 10px;
            font-size: 16px;
            background-color: #fff0f7;
            color: #2f3c4f;
        }
        .gender {
            width: 100%;
            margin-bottom: 0;
        }
        .gender-options {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            align-items: center;
            margin-top: 8px;
        }
        .gender-options label {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border: 1px solid #ffc0d6;
            border-radius: 10px;
            background-color: #ffe8f2;
            color: #4f5d72;
            font-size: 15px;
            cursor: pointer;
        }
        input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: #d43f7f;
            cursor: pointer;
        }
        input[type="submit"] {
            width: 100%;
            max-width: 700px;
            padding: 14px;
            background-color: #ff66aa;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.2s ease;
            margin: 0 auto;
        }
        input[type="submit"]:hover {
            background-color: #e64487;
        }
        .result {
            margin: 20px auto 0;
            padding: 18px;
            background-color: #e8f1ff;
            border-radius: 10px;
            border: 1px solid #b8d2ff;
            width: 100%;
            max-width: 700px;
        }
        .result h2 {
            margin-top: 0;
            color: #2f3c4f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Input Mahasiswa</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>
            </div>

            <div class="form-group gender">
                <label>Jenis Kelamin:</label>
                <div class="gender-options">
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</label>
                </div>
            </div>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $kelas = $_POST['kelas'];
            $jenis_kelamin = $_POST['jenis_kelamin'];

            echo "<div class='result'>";
            echo "<h2>Hasil Input:</h2>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Kelas:</strong> $kelas</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>