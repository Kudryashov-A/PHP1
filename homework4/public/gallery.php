<?php
require_once __DIR__ . '/../config/config.php';

createGallery(TEMPLATES_DIR . 'gallery.tpl', WWW_DIR . 'img/original');

echo renderTemplate(TEMPLATES_DIR . 'index.tpl', [
    'title' => 'Homework 4 - Gallery',
    'h1' => 'Всякие картинки',
    'content' => renderTemplate(TEMPLATES_DIR . 'gallery.tpl'),
]);