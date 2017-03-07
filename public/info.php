<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/18
 * Time: 14:18
 */

$db_config = array(
    'host' => '127.0.0.1',
    'name' => 'laravel',
    'language' => 'utf8',
    'user' => 'root',
    'pwd' => ''
);
$db_link = new PDO("mysql:host={$db_config['host']}; dbname={$db_config['name']};charset=" . $db_config['language'], $db_config['user'], $db_config['pwd']);
$db_link->exec('SET NAMES \'' . $db_config['language'] . '\'');

return $db_link;