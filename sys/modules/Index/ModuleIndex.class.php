<?
namespace MediaCore\Mod\Index;

use \MediaCore\Lib\Core\includes\Module as Module;

class ModuleIndex extends Module {
	public function init() {
		$this->assignDefaults();

		$items = $this->Core->Db->getAll('SELECT * FROM ?T WHERE `on_main` = 1 AND `active` = 1 ORDER BY `order` ASC', 'portfolio');

		$this->Core->View->assign(array(
			'title' => '',
			'keywords' => '',
			'description' => '',
		));
		$this->Core->View->show('index.php', array(
			'items' => $items,
		));
	}

	public function assignDefaults() {
		$this->Core->View->assign(array(
		));
	}
}
