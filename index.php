<?
/**
 * Индексный файл включает в себя проверку версии PHP и подключает инициализацию ядра, состоящую из набора действий заданых разработчиком
 *
 * @author Willfred di Vampo <divampo@gmail.com>
 * @date 2012-04-02
 * @package MediaCore
 * @category Index
 * @namespace global
 * @copyright Copyright (c), 2012
 */

/**
 * Подключение файла инициализации
 */
require_once __DIR__.'/init.inc.php';
/**
 * Составление цепочки действий для инициализации ядра
 */
$Core->addAction('DebugBar');
$Core->addAction('Session', array('lifetime' => \MediaCore\SESS_LIFETIME));
$Core->addAction('Headers', array('charset' => \MediaCore\USE_CHARSET));
$Core->addAction('Buffering');
$Core->addAction('Db', array('connection' => 'Mysql::back'));
$Core->addAction('View');
$Core->addAction('Module');

/**
 * Запуск работы ядра
 */
$Core->run();
