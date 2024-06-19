<?php
// Q1 変数と文字列
<?php
$name = '芦谷';

echo '私の名前は「'.$name.'」です。';
?>

// Q2 四則演算
<?php
$x = 5;

$y = 4;

echo ($x * $y) ."\n".

     ($x * $y) / 2;

?>

// Q3 日付操作
<?php
$date = date('Y年m月d日 H時i分s秒');

echo '現在時刻は、'.$date.'です。';

?>

// Q4 条件分岐-1 if文
<?php

$device = 'mac';
if ($device == 'mac') {
    echo '使用OSは、macです。';
    return;
}
if ($device == 'widows') {
    echo '使用OSは、windowsです。';
}
else {
    echo 'どちらでもありません。';
}
?>

// Q5 条件分岐-2 三項演算子
<?php

$age = 19;

if ($age < 18) {
    $coment = '未成年です。';
}
else {
    $coment = '成人です。';
}

echo $coment;

?>

// Q6 配列
<?php

$prefecture = ['東京都','神奈川県','群馬県','栃木県','千葉県'];

echo '' .$prefecture[3]. 'と' .$prefecture[4]. 'は関東地方の都道府県です。';

?>

// Q7 連想配列-1
<?php

$city = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市',
 '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

    ($city as $value){
    echo $value."\n";
}

?>

// Q8 連想配列-2
<?php

$city = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市',
 '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

$place = '埼玉県';

if ($place == '埼玉県') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。';
}

?>

// Q9 連想配列-3
<?php

$city = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市',
 '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

$place = '東京都';

if ($place == '東京都') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。' ."\n";
}

$place = '神奈川県';

if ($place == '神奈川県') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。' ."\n";
}

$place = '千葉県';

if ($place == '千葉県') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。' ."\n";
}

$place = '埼玉県';

if ($place == '埼玉県') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。' ."\n";
}

$place = '栃木県';

if ($place == '栃木県') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。' ."\n";
}

$place = '群馬県';

if ($place == '群馬県') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。' ."\n";
}

$place = '茨城県';

if ($place == '茨城県') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。' ."\n";
}

$place = '大阪府';

if ($place == '茨城県') {
    echo '' .$place. 'の県庁所在地は、' .$city[$place]. 'です。';
}
else {
    echo '' .$place. 'は、関東地方ではありません。';
}

?>

// Q10 関数-1
<?php

function hello($name) {
    echo $name. 'さん、こんにちは。'."\n";
}

hello('金谷');
hello('安藤');

?>

// Q11 関数-2
<?php

function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    echo '' .$price. '円の商品の税込は' . $taxInPrice . '円です。';
}

calcTaxInPrice(1000);

?>

// Q12 関数とif文
<?php

function distinguishNum($num) {
    if ($num % 2 === 0) {
        echo '' .$num. 'は偶数です。' ."\n";
    }
    else {
        echo '' .$num. 'は奇数です。' ."\n";
    }
}

distinguishNum(11);
distinguishNum(24);
?>

// Q13 関数とswitch文
<?php

function evaluateGrade($point) {
    switch ($point) {
        case 'A' :
        case 'B' :
            echo '合格です。' ."\n";
        break;
        
        case 'C' :
            echo '合格ですが追加課題があります。' ."\n";
        break;
        
        case 'D' :
            echo '不合格です。' ."\n";
            
        default :
            echo '判定不明です。講師に問い合わせてください。' ."\n";
    }
}

  evaluateGrade('A');
  evaluateGrade('g');

?>

?>