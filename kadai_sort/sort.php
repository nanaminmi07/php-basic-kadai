<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
// ① 配列を関数の外側で1度だけ宣言
$nums = [15, 4, 18, 23, 10];

function sort_2way($array, $order) {
    // ② 渡された配列をそのまま並び替え
    if ($order) {
        echo "昇順にしました<br>";
        $sorted = $array; // 配列をコピー
        sort($sorted);    // コピーした配列を並び替え
        foreach ($sorted as $num) {
            echo $num . '<br>';
        }
    } else {
        echo "降順にしました<br>";
        $sorted = $array;
        rsort($sorted);
        foreach ($sorted as $num) {
            echo $num . '<br>';
        }
    }
}

// ③ 配列とtrue/falseを引数として渡す
sort_2way($nums, true);   // 昇順
sort_2way($nums, false);  // 降順
?>
    </p>
</body>

</html>