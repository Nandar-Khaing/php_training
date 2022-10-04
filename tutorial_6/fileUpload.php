<?php
$dirName = $_POST['folder-name'];
$fileName = $_FILES['image']['name'];
$tmpFile = $_FILES['image']['tmp_name'];
$fileType = $_FILES['image']['type'];
if (is_uploaded_file($tmpFile)) {
    if (checkMimeType($tmpFile)) {
        mkdir($dirName);
        $disDir = $dirName . "\\" . $fileName;
        move_uploaded_file($tmpFile, $disDir);
        echo "File Uploaded";
    } else {
        echo "File type not allowed";
    }
} else {
    echo "File size too big";
}

function checkMimeType(String $file): bool
{
    $allowedMimeTypes = [
        'image/jpeg',
        'image/png',
        'image/gif',
    ];
    if (in_array(mime_content_type($file), $allowedMimeTypes)) {
        return true;
    } else {
        return false;
    }
}
