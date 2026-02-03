<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order){
            $array = [15,4,18,23,10];
            if($order){
                echo "昇順にしました<br>";
                sort($array);
                foreach($array as $num){
                echo $num . '<br>';    
                }
                    
            }else {
                echo "降順にしました<br>";
                rsort($array);
                foreach($array as $num){
                echo $num . '<br>';    
                }
            }
            }
    $array = [15,4,18,23,10];      
    sort_2way($array,true);
    sort_2way($array,false);
        ?>
    </p>
</body>

</html>