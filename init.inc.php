<?
/**
 * Файл инициализации ядра
 *
 * @author Willfred di Vampo <divampo@gmail.com>
 * @date 2012-04-02
 * @package MediaCore
 * @category Index
 * @namespace global
 * @copyright Copyright (c), 2012
 */

/**
 * Загрузка конфига
 */
require_once __DIR__.'/config.inc.php';
/**
 * Подключаем пользовательский конфиг
 */
include_once __DIR__.'/userconfig.inc.php';

/**
 * Загрузка вспомогательного функционала
 * {@source }
 */
// устанавливаем локали
require_once \MediaCore\DIR_LIB.'/Init/locale.php';
// устанавливаем таймзону
require_once \MediaCore\DIR_LIB.'/Init/date.php';
// переопределяем обработчики ошибок
require_once \MediaCore\DIR_LIB.'/Init/error_handler.php';
// определяем автозагрузчик
require_once \MediaCore\DIR_LIB.'/Init/autoload.php';

/**
 * Создание ключевого объекта Core
 */
$Core = new \MediaCore\Lib\Core\Core();
