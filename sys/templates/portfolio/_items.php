<?
use \MediaCore\Lib\Helpers\HString as HString;

foreach ($items as $item) { ?>
	<li>
		<h2 data-url="<?=HString::escape($item['url'])?>"><?=HString::escape($item['title'])?></h2><?
		if (!empty($item['file'])) {
			?><figure data-url="<?=HString::escape($item['url'])?>"><img src="<?=\MediaCore\MEDIA_DOMAIN.$item['file']?>" /></figure><?
		}
		?><h3><?=HString::escape($item['title'])?> — <?=HString::escape($item['lead'], 'text')?></h3>
	</li>
<? }
