<?
use \MediaCore\Lib\Helpers\HString as HString;

$this->show('common/top.php');

?>
<section class="content">
	<? if (!empty($data['lead'])) {
		echo '<p>'.HString::escape($data['lead'], 'text').'</p>';
	} ?>
	<?=$data['text']?>
</section>
<?

$this->show('common/bottom.php');
