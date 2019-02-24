<?php
require_once __DIR__ . '/../config/config.php';

echo renderTemplate(TEMPLATES_DIR . 'index.tpl', [
        'title' => 'Homework 4',
        'h1' => 'Домашняя работа № 4',
        'content' => 'Контент',
]);