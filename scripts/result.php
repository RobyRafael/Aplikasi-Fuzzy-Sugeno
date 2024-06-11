<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='../assets/styleResult.css'>
        <title>Output Fuzzy Logic</title>
    </head>
    <body>
        <div class='container'>
            <h1>Output Fuzzy Logic</h1>
            <table>
                <tr>
                    <th>Rule</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>R1</td>
                    <td><?php echo $rules['R1']?></td>
                </tr>
                <tr>
                    <td>R2</td>
                    <td><?php echo $rules['R2']?></td>
                </tr>
                <tr>
                    <td>R3</td>
                    <td><?php echo $rules['R3']?></td>
                </tr>
                <tr>
                    <td>R4</td>
                    <td><?php echo $rules['R4']?></td>
                </tr>
                <tr>
                    <td>Minimal Rule</td>
                    <td><?php echo $minRule?></td>
                </tr>
                <tr>
                    <td>Maximal Rule</td>
                    <td><?php echo $maxRule?></td>
                </tr>
            </table>
            <div class='result'>Jumlah produksi yang disarankan adalah: <?php echo $Z?></div>
            <a href="../index.php"><button>Kembali ke halaman awal</button></a>
        </div>
    </body>
    </html>