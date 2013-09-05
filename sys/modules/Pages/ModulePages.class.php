<?
namespace MediaCore\Mod\Pages;

use \MediaCore\Lib\Core\includes\Module as Module;

class ModulePages extends Module {

	public function init() {
		if (empty($_REQUEST['alias'])) {
			throw new \Exception404('Wrong parameters');
		}

		$item = $this->Core->Db->getRow('SELECT * FROM ?T WHERE `name` = ? AND `active` = 1 AND `deleted` = 0', 'pages', $_REQUEST['alias']);
		if (!$item) {
			throw new \Exception404('Page not found');
		}

		$tpl = 'pages/item.php';
		if (file_exists(\MediaCore\DIR_VIEW.'/pages/'.basename($item['name']).'.php')) {
			$tpl = 'pages/'.basename($item['name']).'.php';
		}

		$this->Core->View->assign(array(
			'title' => $item['meta_title'] ?: $item['title'],
			'description' => $item['meta_description'] ?: $item['title'],
			'keywords' => $item['meta_keywords'] ?: $item['title'],
		));
		$this->Core->View->show($tpl, array(
			'data' => $item
		));
	}

}
