<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/functions/add.php" method="post">
<table style="border: 1px solid black; border-collapse: collapse; margin: 0 auto; text-align: center">
    <tr>
        <th style="border: 1px solid black" colspan="2">Добавление новости</th>
    </tr>
    <tr>
        <td style="border: 1px solid black"><label for="title">Название: </label></td>
        <td style="border: 1px solid black"><input type="text" name="title" id="title" placeholder="Название"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black"><label for="text">Текст статьи:</label></td>
        <td style="border: 1px solid black"><textarea name="text" id="text" cols="30" rows="10"></textarea></td>
    </tr>
    <tr>
        <td style="border: 1px solid black"><label for="author">Автор</label></td>
        <td style="border: 1px solid black"><input type="text" id="author" placeholder="Автор"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black" colspan="2"><input type="submit" value="Подтвердить"></td>
    </tr>
</table>
</form>
</body>
</html>
