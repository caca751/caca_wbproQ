<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Inter, Arial, sans-serif;
            background: radial-gradient(circle at top left, rgba(26, 143, 117, 0.16), transparent 18%),
                        radial-gradient(circle at bottom right, rgba(38, 162, 132, 0.14), transparent 20%),
                        linear-gradient(135deg, #ecfff7 0%, #cdf4e4 55%, #f8fff9 100%);
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
            color: #1f4f3e;
        }
        .container {
            background: rgba(255, 255, 255, 0.92);
            padding: 36px;
            border-radius: 34px;
            box-shadow: 0 28px 80px rgba(26, 143, 117, 0.14);
            width: min(100%, 720px);
            margin: 0 auto;
            box-sizing: border-box;
            border: 1px solid rgba(26, 143, 117, 0.18);
            backdrop-filter: blur(10px);
        }
        .hero {
            display: grid;
            place-items: center;
            gap: 10px;
            margin-bottom: 28px;
        }
        .hero h1 {
            margin: 0;
            font-size: clamp(2rem, 2.5vw, 2.4rem);
            letter-spacing: 0.03em;
            color: #18664f;
        }
        form {
            display: grid;
            gap: 24px;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }
        @media (min-width: 900px) {
            .form-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .gender {
                grid-column: span 2;
            }
        }
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            min-width: 0;
        }
        label {
            color: #285a47;
            font-weight: 700;
            font-size: 0.95rem;
            min-width: 0;
        }
        input[type="text"] {
            width: 100%;
            min-width: 0;
            padding: 18px 20px;
            border: 1px solid rgba(26, 143, 117, 0.24);
            border-radius: 22px;
            font-size: 1rem;
            background-color: #f6fff8;
            color: #1f4f3e;
            outline: none;
            transition: border-color 0.25s ease, box-shadow 0.25s ease, transform 0.25s ease;
        }
        input[type="text"]:focus {
            border-color: #1a8f75;
            box-shadow: 0 0 0 6px rgba(26, 143, 117, 0.08);
            transform: translateY(-1px);
        }
        .gender-options {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin-top: 10px;
        }
        .gender-options label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px;
            border: 1px solid rgba(26, 143, 117, 0.25);
            border-radius: 18px;
            background-color: #ebfff6;
            color: #235d4a;
            font-size: 0.95rem;
            cursor: pointer;
            transition: transform 0.18s ease, border-color 0.18s ease, background-color 0.18s ease;
        }
        .gender-options input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: #1a8f75;
            cursor: pointer;
        }
        .gender-options input[type="radio"]:checked + span,
        .gender-options input[type="radio"]:checked ~ span {
            font-weight: 700;
        }
        .gender-options label:hover {
            transform: translateY(-1px);
            border-color: #1a8f75;
            background-color: #dff7ea;
        }
        input[type="submit"] {
            width: 100%;
            padding: 18px 20px;
            background-color: #1a8f75;
            color: white;
            border: none;
            border-radius: 22px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 700;
            box-shadow: 0 12px 28px rgba(26, 143, 117, 0.18);
            transition: transform 0.25s ease, background-color 0.25s ease;
        }
        input[type="submit"]:hover {
            background-color: #177c63;
            transform: translateY(-2px);
        }
        .result {
            margin: 26px 0 0;
            padding: 24px;
            background: linear-gradient(180deg, rgba(236, 255, 247, 0.96), rgba(218, 250, 233, 0.94));
            border-radius: 24px;
            border: 1px solid rgba(26, 143, 117, 0.14);
            width: 100%;
        }
        .result h2 {
            margin-top: 0;
            color: #1c4f3a;
            font-size: 1.15rem;
        }
        .result p {
            margin: 0.8rem 0 0;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1>Form Input Mahasiswa</h1>
        </div>
        <form action="" method="post">
            <div class="form-grid">
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