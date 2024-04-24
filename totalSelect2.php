<?php
$numArr = [
    [30, 65, 72, 47, 63, 96],
    [35, 57, 67, 23, 14, 56, 61],
    [46, 16, 27, 58],
    [84, 27, 40, 18, 92, 46, 21],
    [14, 74, 54, 2, 85]
];
$arr   = '';
$num   = '';
$total = 0;
if (!empty($_POST)) {
    $arr = $_POST['arr'];
    $num = $_POST['num'];
    if (!is_numeric($num)) {
        $error = '数値を入力してください';
    } elseif ($num > 99 || $num < 1) {
        $error = '1から99までの数値を入力してください';
    } else {
        for ($i = 0; $i < count($numArr[$arr]); $i++) {
            $total += $numArr[$arr][$i];
        }
        $result = $num * $total;
        $arrPlus = $arr + 1;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合計値の計算</title>
    <style>
        table {
            border-collapse: collapse;
            width: 800px;
        }

        th,
        td {
            border: 1px solid #999;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #eee;
        }

        .error {
            font-size: 80%;
            color: #900;
        }

        .error::before {
            content: "※ ";
        }
    </style>
</head>

<body>
    <h1>合計値の計算</h1>
    <form action="" method="post" novalidate>
        <p>配列の選択：
            <select name="arr">
                <?php for ($i = 0; $i <= 4; $i++):?>
                    <option value="<?=$i?>" <?= $arr == $i ? 'selected' : ''?>>配列<?=$i + 1?></option>
                <?php endfor;?>
            </select>
        </p>
        <p>掛ける数値：<input type="text" name="num" size="2" maxlength="2" value="<?= htmlspecialchars($num, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>"></p>
        <p><input type="submit" value="計算"></p>
    </form>
    <?php if (isset($error)) : ?>
        <p class="error"><?= $error ?></p>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <table>
            <tr>
                <th>配列<?= $arrPlus ?></th>
                <?php for ($j = 0; $j < count($numArr[$arr]); $j++) : ?>
                    <td><?= $numArr[$arr][$j] ?></td>
                <?php endfor; ?>
                <th>合計 <?= $total ?></th>
                <th>x <?= htmlspecialchars($num, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> =</th>
                <th>合計結果：<?= $result ?></th>
            </tr>
        </table>
    <?php endif; ?>
</body>

</html>
