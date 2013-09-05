<?
/**
 * Конфигурационный файл.
 *
 * @author Willfred di Vampo <divampo@gmail.com>
 * @date 2012-04-02
 * @package MediaCore
 * @category Index
 * @namespace \MediaCore
 * @copyright Copyright (c), 2012
 */
namespace MediaCore;

/**
 * Версия ядра {@source }
 */
const CORE_VERSION = '2.0';

#################################################################

/**
 * Режим разработки. Влияет на переинициализацию модулей и действий при каждой загрузке действия ядра {@link CoreModule Module }
 */
const DEVELOP_MODE	= false;

/**
 * Удаление данных о модулях и действиях в режиме разработки (использовать false при командной разработке!)
 */
const DEVELOP_MODE_DEL	= false;

/**
 * Режима отладки. Влияет на показ дебагбара
 */
const DEBUG_MODE	= false;

/**
 * Атрибут URL'а который отвечает за отображение дебагбара
 */
const DEBUG_ATTR	= 'debugbar';

#################################################################

/**
 * Статичный класс содержащий настройки подключения к базе данных
 */
class MysqlConf {

	static public function back() {
		return array(
			'host'		=> 'HOST',
			'port'		=> 'PORT',
			'user'		=> 'USER',
			'pass'		=> 'PASS',
			'db_name'	=> 'DBNAME',
			'db_group'	=> 'PREFIX',
			'charset'	=> 'utf8',
		);
	}
}

/**
 * Статичный класс содержащий настройки подключения к серверу Memcache
 */
class MemcachedConf {

	static public function connect() {
		return array(
			'host'		=> 'HOST',
			'port'		=> 'PORT',
			'expires'	=> 120,
			'time_prefix' => 't_',
		);
	}
}

#################################################################

/**
 * Идентификатор портала
 */
const PORTAL_ID		= 'divampo.site';

/**
 * Корневой URL портала
 */
const PORTAL_URL	= 'http://divampo.com';

/**
 * Корневой путь портала
 */
define(__NAMESPACE__.'\PORTAL_PATH', __DIR__);
//const PORTAL_PATH	= __DIR__;

#################################################################

/**
 * Корневая директория системы
 */
define(__NAMESPACE__.'\DIR_ADMIN', __DIR__.'/sys');
//const DIR_ADMIN	= __DIR__.'/admin';

/**
 * Путь к директории с библиотеками
 */
 define(__NAMESPACE__.'\DIR_LIB', 	\MediaCore\PORTAL_PATH.'/../lib');
//const DIR_LIB		= \MediaCore\DIR_ADMIN.'/libraries';

/**
 * Путь к директории с шаблонами
 */
define(__NAMESPACE__.'\DIR_VIEW', 	\MediaCore\DIR_ADMIN.'/templates');
//const DIR_VIEW	= \MediaCore\DIR_ADMIN.'/templates';

/**
 * Путь к директории с модулями
 */
define(__NAMESPACE__.'\DIR_MOD', 	\MediaCore\DIR_ADMIN.'/modules');
//const DIR_MOD		= \MediaCore\DIR_ADMIN.'/modules';

/**
 * Путь к директории с логами
 */
define(__NAMESPACE__.'\DIR_LOGS',	\MediaCore\PORTAL_PATH.'/../logs');
//const DIR_LOGS	= \MediaCore\PORTAL_PATH.'/../logs';

/**
 * Путь к директории с кэшем
 */
define(__NAMESPACE__.'\DIR_CACHE',	__DIR__.'/cache');
//const DIR_CACHE	= __DIR__.'/cache';

/**
 * Путь к директории с медиа данными
 */
define(__NAMESPACE__.'\DIR_MEDIA',	\MediaCore\PORTAL_PATH.'/media');
//const DIR_MEDIA	= __DIR__.'/media';

/**
 * URL к директории с медиа данными
 */
define(__NAMESPACE__.'\URL_MEDIA',	'/media');
//const DIR_MEDIA	= __DIR__.'/media';

/**
 * Путь к директории с языковыми версиями
 */
define(__NAMESPACE__.'\DIR_LANG',	\MediaCore\DIR_LIB.'/Lang');
//const DIR_LANG	= \MediaCore\DIR_ADMIN.'/Lang';

#################################################################

/**
 * Имя сессии для авторизации. Используется совместно с действием ядра {@link CoreAuth Auth }
 */
const SESS_NAME		= 'MediaCore_user';

/**
 * Время жизни сессии. (устанавливает значение сессии maxlifetime)
 */
const SESS_LIFETIME = 36000;

#################################################################

/**
 * Атрибут URL'а который отвечает за вывод не кэшированного контента. Используется совместно с действием ядра {@link CoreCache Cache }
 */
const RECACHE_ATTR	= 'recache';

/**
 * Модуль 'по-умолчанию' портала.
 */
const DEFAULT_MOD	= 'Index';

/**
 * Действие 'по-умолчанию' модуля.
 */
const DEFAULT_ACT	= 'List';

/**
 * Модуль для отображения страницы 404.
 */
const DEFAULT_404	= 'Page404';

#################################################################

/**
 * Локаль портала
 */
const USE_LOCALE	= 'ru_RU';

/**
 * Кодировка портала
 */
const USE_CHARSET	= 'utf-8';

