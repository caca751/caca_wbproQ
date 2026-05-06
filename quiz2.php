<?php
$kode = $nama = $jumlah = $harga = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kode = $_POST["kode"] ?? "";
    $nama = $_POST["nama"] ?? "";
    $jumlah = $_POST["jumlah"] ?? "";
    $harga = $_POST["harga"] ?? "";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Barang</title>
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
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 14px;
            border: 1px solid #c3d5f3;
            border-radius: 10px;
            font-size: 16px;
            background-color: #fff0f7;
            color: #2f3c4f;
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
        <h1>Form Input Barang</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="kode">Kode Barang:</label>
                <input type="text" id="kode" name="kode" value="<?= $kode ?>" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama Barang:</label>
                <input type="text" id="nama" name="nama" value="<?= $nama ?>" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" id="jumlah" name="jumlah" min="0" value="<?= $jumlah ?>" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" min="0" step="0.01" value="<?= $harga ?>" required>
            </div>

            <input type="submit" value="Submit">
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
            <div class="result">
                <h2>Hasil Input:</h2>
                <p><strong>Kode Barang:</strong> <?= $kode ?></p>
                <p><strong>Nama Barang:</strong> <?= $nama ?></p>
                <p><strong>Jumlah:</strong> <?= $jumlah ?></p>
                <p><strong>Harga:</strong> <?= $harga ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
