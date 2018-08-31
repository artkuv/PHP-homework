<pre>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="myfile">
    
    <button type="submit">Отправить</button>
</form>

<?php

var_dump($_FILES);

if (isset($_FILES['myfile']['error']) and $_FILES['myfile']['error'] !== 0)
{
    die("Файл содержит ошибки! Загрузите другой файл.");
}

if ($_FILES['myfile']['size'] > 1000000) 
{
    die('Файл больше допустимого размера.');
}

$finfo = new finfo(FILEINFO_MIME_TYPE);
if (false === $ext = array_search(
    $finfo->file($_FILES['myfile']['tmp_name']),
    array(
        'jpg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
    ),
    true
)) {
    die('Данный формат запрещен. Загрузите jpg, png или gif.');
}

if (!move_uploaded_file($_FILES['myFile']['tmp_name'],
    sprintf('./uploads/%s.%s',sha1_file($_FILES['myFile']['tmp_name']),$ext))) 
{
    die('Ошибка при загрузке файла.');
}
echo 'Файл успешно загружен.';
?>