<?
use \MediaCore\Lib\Helpers\HString as HString;
use \MediaCore\Lib\Helpers\HModule as HModule;

$this->show('common/top.php');

?>

<ul class="projects" id="projects_block" data-pages="<?=$Pager->total_pages?>" data-pager="<?=HModule::getUrl('Portfolio')?>">
	<? $this->show('portfolio/_items.php', array('items' => $items)) ?>
</ul>

<?

$this->show('common/bottom.php');

?>
