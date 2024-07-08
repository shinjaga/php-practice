<?php
// Q1 変数と文字列
<?php
$name = '芦谷';

echo '私の名前は「'. $name .'」です。';
?>

// Q2 四則演算
<?php
$x = 5;

$y = 4;

echo ($x * $y) . "\n" .

     ($x * $y) / 2;

?>

// Q3 日付操作
<?php
$date = date('Y年m月d日 H時i分s秒');

echo '現在時刻は、'. $date .'です。';

?>

// Q4 条件分岐-1 if文
<?php

$device = 'mac';
if ($device == 'mac' || $device == 'windows') {
    echo '使用OSは、'. $device .'です。';
}
else {
    echo 'どちらでもありません。';
}
?>

// Q5 条件分岐-2 三項演算子
<?php

$age = 19;

$coment = ($age < 18) ? '未成年です。':'成人です。';

echo $coment;

?>

// Q6 配列
<?php

$prefecture = [
    '東京都',
    '神奈川県',
    '群馬県',
    '栃木県',
    '千葉県'
];

echo  $prefecture[3]. 'と' .$prefecture[4]. 'は関東地方の都道府県です。';

?>

// Q7 連想配列-1
<?php

$city = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($city as $value){
    echo $value."\n";
}
?>

// Q8 連想配列-2
<?php
$city = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($city as $value => $place){
if ($value == '埼玉県') {
    echo $value . 'の県庁所在地は、'. $place . 'です。';
}
}
?>

// Q9 連想配列-3
<?php
$city = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];
foreach ($city as $value => $place){
if ($value == '東京都'
  ||$value == '神奈川県'
  ||$value == '千葉県'
  ||$value == '埼玉県'
  ||$value == '栃木県'
  ||$value == '群馬県'
  ||$value == '茨城県') {
    echo $value . 'の県庁所在地は、' . $place . 'です。' ."\n";
}
else {
    echo $place . 'は、関東地方ではありません。';
}
}
?>

// Q10 関数-1
<?php
function hello($name) {
    return $name . 'さん、こんにちは。'."\n";
}
echo hello('金谷');
echo hello('安藤');
?>

// Q11 関数-2
<?php
function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    return $price . '円の商品の税込は' . $taxInPrice . '円です。';
}
echo calcTaxInPrice(1000);
?>

// Q12 関数とif文
<?php

function distinguishNum($num) {
    if ($num % 2 === 0) {
        return $num . 'は偶数です。' . "\n";
    }
    else {
        return $num. 'は奇数です。' . "\n";
    }
}

echo distinguishNum(11);
echo distinguishNum(24);
?>

// Q13 関数とswitch文
<?php

function evaluateGrade($point) {
    switch ($point) {
        case 'A' :
        case 'B' :
            return '合格です。' . "\n";
        break;
        
        case 'C' :
            return '合格ですが追加課題があります。' . "\n";
        break;
        
        case 'D' :
            return '不合格です。' . "\n";
            
        default :
            return '判定不明です。講師に問い合わせてください。' . "\n";
    }
}

  echo evaluateGrade('A');
  echo evaluateGrade('g');

?>

?>