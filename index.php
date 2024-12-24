<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f9;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="number"], select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Sederhana</h2>
        <form method="POST">
            <input type="number" name="num1" placeholder="Masukkan angka pertama" required>
            <input type="number" name="num2" placeholder="Masukkan angka kedua" required>
            <select name="operation">
                <option value="add">Tambah (+)</option>
                <option value="subtract">Kurang (-)</option>
                <option value="multiply">Kali (×)</option>
                <option value="divide">Bagi (÷)</option>
            </select>
            <button type="submit" name="calculate">Hitung</button>
        </form>

        <div class="result">
            <?php
            if (isset($_POST['calculate'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
                $result = 0;

                switch ($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        break;
                    case 'subtract':
                        $result = $num1 - $num2;
                        break;
                    case 'multiply':
                        $result = $num1 * $num2;
                        break;
                    case 'divide':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            echo "Pembagian dengan nol tidak valid.";
                            exit;
                        }
                        break;
                }
                echo "Hasil: " . $result;
            }
            ?>
        </div>
    </div>
</body>
</html>
