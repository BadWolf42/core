<?php
require_once __DIR__ . '/../../core/php/core.inc.php';

try {
    // echo 'Empty old cache system...';
    // cache::flush();
    // echo 'OK';
    // echo 'Empty DB cache table...';
    // DB::prepare('TRUNCATE TABLE `cache`',array(),DB::FETCH_TYPE_ALL);
    // echo 'OK';
} catch (\Throwable $th) {
    echo 'Error on empty cache : '.$th->getMessage();
}
