<?
namespace MediaCore\Mod\Page404;

use \MediaCore\Lib\Core\includes\Module as Module;

class ModulePage404 extends Module {

	public function init() {
		if (array_key_exists('HTTP_X_REQUESTED_WITH', $_SERVER) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
			header('Content-Type: text/javascript; charset='.\MediaCore\USE_CHARSET);
			echo $this->getData('Exception')->getMessage();
		} else {
			$this->Core->Module['Index']->assignDefaults();
			$this->Core->View->show('404.php', array('e' => $this->getData('Exception')));
		}
	}

}
