<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数
        function sort_2way($array, $order){
            if($order === TRUE){
                //昇順にソート
                echo("昇順にソートします。<br>");
                sort($array);
            }else{
                //降順にソート
                echo("降順にソートします。<br>");
                rsort($array); 
            }
            // ソートしてデータを１行ずつ表示
            foreach($array as $data){
                echo($data . "<br>");
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // ソート関数を呼び出す
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>