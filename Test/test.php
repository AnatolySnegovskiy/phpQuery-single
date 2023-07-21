<?php

include_once __DIR__ . '/../vendor/autoload.php';

$pa = phpQuery::newDocument(file_get_contents(__DIR__ . '/test.html'));

$pq = $pa->find('div:contains(":30")');

var_dump(pq($pq)->find('div')->eq(0)->text());

