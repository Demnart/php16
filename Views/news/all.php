<?php

foreach ($items as $value)
{
    echo $value->title . '<br>' . $value->text . '<br>' . $value->author . '<br>';
}
?>
<a href="/Views/news/add.php">Добавить новость</a>
