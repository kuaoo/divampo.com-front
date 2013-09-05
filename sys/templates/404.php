<?
use \MediaCore\Lib\Helpers\HString as HString;

$this->show('common/top.php');

?>
<section class="content">
	<figure class="p404"><img src="/img/404/<?=rand(1,3)?>.jpg" /></figure>
</section>
<?

$this->show('common/bottom.php');

?>