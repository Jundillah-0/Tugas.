<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            width: 90%;
            max-width: 1000px;
        }

        .box {
            width: 48%;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td, th {
            border: 1px solid black;
            width: 40px;
            height: 40px;
            text-align: center;
        }

        th {
            background-color: cyan;
        }

        .kolom-judul {
            background-color: lime;
        }

        .sel-biasa {
            background-color: #00ffff;
        }

        h2 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="box">
        <h2>1. Angka Genap 1-10</h2>
        <p>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                }
            }
            ?>
        </p>
    </div>

    <div class="box">
        <h2>2. Tabel Perkalian 1-10</h2>
        <table>
            <tr>
                <th class="kolom-judul">bilangan</th>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <th><?= $i ?></th>
                <?php endfor; ?>
            </tr>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <th class="kolom-judul"><?= $i ?></th>
                    <?php for ($j = 1; $j <= 10; $j++): ?>
                        <td class="sel-biasa"><?= $i * $j ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>

</div>

</body>
</html>
