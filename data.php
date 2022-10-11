<?php
header('Content-Type: text/event-stream;charset=utf-8');
header('Cache-Control: no-cache,no-store,max-age=0,must-revalidate');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: post-check=0, pre-check=0', false );
header('Pragma: no-cache');
header('Expires: 0');
header('Connection: keep-alive');
header('X-Accel-Buffering: no');

$lines = file("messages.dat");
$words = ["shit", "fuck", "fuсk", "fck", "idiotic", "buttload", "bitch", "nigg", "fvck", "crapload", "fouk", "fouck", "ass","dick","muffinhead", "fock", "fuk", "fook","nazis", "foouk","fukc", "suck","f00k", "sh1t", "b1ch", "nigga","bich","shit","bitch","b1tch","porn","sex","hentai","傻逼", "拉屎","吃屎","吃翔","伞兵" ,"操你妈","草你妈","屌你妈","吊你妈","卧槽","脑残","憨批","他妈","他娘","他奶奶的","日你妈","狗日","纳粹","智障","脑瘫","屌毛","吊毛","傻吊","傻der","傻屌","装逼","草泥马","特么的","撕逼","玛拉戈壁","爆菊","JB","呆逼","本屌","齐B短裙","法克","丢你老母","达菲鸡","打飞机","装13","逼格","蛋疼","绿茶婊","你妈的","表砸","屌爆了","买了个婊","妈了个逼","已撸","黄片","吉跋猫","妈蛋","逗比","我靠","碧莲","碧池","然并卵","日了狗","屁民","性癖","鸡巴","鸡吧","XX狗","操B","淫家","你妹","浮尸国","滚粗","弱智","傻批","狗逼","妈逼","tnnd","mlgb","woc", "cnm", "dnm","rnm","wdnmd"];

foreach ($lines as $line){
  foreach ($words as $word) {
    $len = str_repeat('*', strlen($word));
    $line = str_ireplace($word, $len, $line);
  }
    echo 'retry: 1'."\n";
    echo 'data: '.$line."\n\n";
    ob_end_flush();
    flush();
}
?>