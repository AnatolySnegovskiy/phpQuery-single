# phpQuery-single
it's fork https://github.com/jae-jae/phpQuery-single

remove dead code by psalm

## Composer Installation
Packagist: https://packagist.org/packages/carriongrow/php-query-single
```
composer require carriongrow/php-query-single
```

## Usage
```php
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
// http://querylist.cc/1.jpg
```
