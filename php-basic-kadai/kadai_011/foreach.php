<?php
$array = ["名前" => "玉ねぎ", "値段" => 200, "産地" => "北海道"];

foreach($array as $key => $value){
    echo($key . "：" . $value);
    echo("<br>");
}
?>