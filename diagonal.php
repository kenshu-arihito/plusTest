<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九表</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
        <?php for ($i = 0; $i <= 9; $i++) : ?>
            <tr>
                <?php for ($y = 0; $y <= 9; $y++) : ?>
                    <?php if ($i == $y) : ?>
                        <th>00</th>
                    <?php else : ?>
                        <td><?= $i . $y ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>
