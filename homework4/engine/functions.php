<?php

function renderTemplate($file, $variables = [])
{
    if (!is_file($file)) {
        echo 'Template file "' . $file . '" not found';
        exit();
    }
    if (filesize($file) === 0) {
        echo 'Template file "' . $file . '" is empty';
        exit();
    }

    $templateContent = file_get_contents($file);

    if (empty($variables)) {
        return $templateContent;
    }

    foreach ($variables as $key => $value) {
        if (empty($value) || !is_string($value)) {
            continue;
        }
        $key = '{{' . strtoupper($key) . '}}';
        $templateContent = str_replace($key, $value, $templateContent);
    }
    return $templateContent;
}

function createGallery($fileGallery, $dirGallery)
{
    $imgList = scandir($dirGallery);
    file_put_contents($fileGallery, '');
    foreach ($imgList as $key) {
        if (!preg_match('/^\./u', $key)) {
            $key = 'img/original/' . $key;
            file_put_contents($fileGallery, "<a href=\"$key\" target=\"_blank\"><img src=\"$key\" alt=\"Картинка\"></a>\n", FILE_APPEND);
        }
    }
}