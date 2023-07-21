<?php

include_once __DIR__ . '/../vendor/autoload.php';

$html = <<<STR
<div id="one">
    <div class="two">
        <a href="http://querylist.cc">QueryList官网</a>
        <img src="http://querylist.cc/1.jpg" alt="这是图片">
        <img src="http://querylist.cc/2.jpg" alt="这是图片2">
    </div>
    <span>其它的<b>一些</b>文本</span>
</div>        
STR;

$doc = phpQuery::newDocumentHTML($html);

$src = $doc->find('.two img:eq(0)')->attr('src');
echo $src;

