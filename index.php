<?php
require __DIR__ . '/autoload.php';


$test = NewsModel::findOneByPK(2);

echo $test->title . '<br>' . $test->text . '<br>' . $test->author . '<br>';

