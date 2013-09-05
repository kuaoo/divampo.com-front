<?
namespace MediaCore\Mod\Portfolio;

use \MediaCore\Lib\Core\includes\Module as Module;
use \MediaCore\Lib\Pager\Pager as Pager;

class ModulePortfolio extends Module {
	private $itemsPerPage = 4;

	public function init() {
		$total_items = $this->Core->Db->getOne('SELECT count(`id`) FROM ?T WHERE `active` = 1', 'portfolio');

		$Pager = new Pager($total_items, isset($_REQUEST['p']) ? $_REQUEST['p'] : 1, $this->itemsPerPage);

		$items = $this->Core->Db->getAll('SELECT * FROM ?T WHERE `active` = 1 ORDER BY `order` ASC LIMIT ?N, ?N', 'portfolio', $Pager->first_item, $this->itemsPerPage);

		if (isset($_REQUEST['feed'])) {
			echo json_encode(array(
				'state' => 'ok',
			    'html' => $this->Core->View->fetch('portfolio/_items.php', array(
					'items' => $items
				)),
			));
		} else {
			$this->Core->View->assign(array(
			    'title' => 'Portfolio',
			    'description' => 'Team Lead Dmitry Serpakov Portfolio',
				'keywords' => 'Team Lead Portfolio, Team Lead Projects, Dmitry Serpakov',
			));
			$this->Core->View->show('portfolio/list.php', array(
	            'items' => $items,
	            'Pager' => $Pager,
            ));
		}

	}

}
