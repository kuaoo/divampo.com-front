<?
use \MediaCore\Lib\Helpers\HString as HString;

$this->show('common/top.php');

?>
	<? if (!empty($data['lead'])) { ?>
		<section class="content">
				<?='<p>'.HString::escape($data['lead'], 'text').'</p>'?>
		</section>
	<? } ?>

	<ul class="projects">
		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5910378707606763169">UK, car trip</h2>
			<figure data-url="https://plus.google.com/photos/115991088221567404364/albums/5910378707606763169"><img src="https://lh6.googleusercontent.com/-kvaujeZNoqc/UgkhVWUyhoI/AAAAAAAAErQ/ptzvWMWT4XA/w1339-h400-no/IMG_2056+Panorama.jpg" /></figure>
		</li>

		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5912091713919829569">London, July 2013</h2>
			<figure data-url="https://plus.google.com/photos/115991088221567404364/albums/5912091713919829569"><img src="https://lh6.googleusercontent.com/-esTaj747Vjk/UhaFNLuPRVI/AAAAAAAAE30/iC9xwQFMg7U/s0-I/IMG_1757_58_59_60_61_62_63_tonemapped.jpg" /></figure>
		</li>

		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5900946988481595345">From Moscow to London 2013-07-06</h2>
			<figure style="width:45%;float:left" data-url="https://plus.google.com/photos/115991088221567404364/albums/5900946988481595345"><img src="https://lh6.googleusercontent.com/-AjPmIBlftQY/UeRgDVToJPI/AAAAAAAAD3w/jwsiOtnVs7U/s0-I/IMG_1020.jpg" /></figure>
			<figure style="width:45%;float:right" data-url="https://plus.google.com/photos/115991088221567404364/albums/5900946988481595345"><img src="https://lh3.googleusercontent.com/-2LL9STZd8jU/UeRgGttMiiI/AAAAAAAAD4U/GB6yvw5f3qE/s0-I/IMG_1063.jpg" /></figure>
			<br style="clear:both!important" />
		</li>

		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5876754522860825585">Nizhny Novgorod trip 2013-05-09</h2>
			<figure data-url="https://plus.google.com/photos/115991088221567404364/albums/5876754522860825585"><img src="https://lh4.googleusercontent.com/-WSIx7rnEFJ8/UZzc5DdDtnI/AAAAAAAACus/4EzXWxes9Vs/s0-I/IMG_7335%2BPanorama_0.jpg" /></figure>
		</li>

		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5880505969654329409">Ukrain, 1-5 May, 2013</h2>
			<figure data-url="https://plus.google.com/photos/115991088221567404364/albums/5880505969654329409"><img src="https://lh3.googleusercontent.com/-5FvZw4fnKqo/UZzC3U5dBBI/AAAAAAAACtM/G-Km-liPGwU/s0-I/IMG_6912%2BPanorama_short.jpg" /></figure>
		</li>

		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5753082167816306001">Car trip 10-11 June, 2012</h2>
			<figure data-url="https://plus.google.com/photos/115991088221567404364/albums/5753082167816306001"><img src="https://lh6.googleusercontent.com/-Z7TzlB1SgDo/T9dIq3xbrkI/AAAAAAAABto/1iUImsHbBFk/s0-I/pano.jpg" /></figure>
		</li>

		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5719048438556687665">India, Goa. February, 2012</h2>
			<figure style="width:45%;float:left" data-url="https://plus.google.com/photos/115991088221567404364/albums/5719048438556687665"><img src="https://lh6.googleusercontent.com/-VyqBxrF2zuM/T14lT3EjgyI/AAAAAAAAAwE/wUqEauB26sM/w797-h531-no/IMG_2881.jpg" /></figure>
			<figure style="width:45%;float:right" data-url="https://plus.google.com/photos/115991088221567404364/albums/5719048438556687665"><img src="https://lh3.googleusercontent.com/-o9thpxZlHtc/T14lhJ3bJvI/AAAAAAAAAxw/Zytuc8pr15s/w797-h531-no/IMG_2994.jpg" /></figure>
			<br style="clear:both!important" />
		</li>

		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5719032446739988881">Saint Petersburg, March, 2012</h2>
			<figure data-url="https://plus.google.com/photos/115991088221567404364/albums/5719032446739988881"><img src="https://lh3.googleusercontent.com/-QI1F16gADY0/T14nT2CK4TI/AAAAAAAAAzA/Yz1I4klNcj8/w1117-h361-no/HDR.png" /></figure>
		</li>


		<li>
			<h2 data-url="https://plus.google.com/photos/115991088221567404364/albums/5360603223954302513">Greece. July, 2009</h2>
			<figure style="width:45%;float:left" data-url="https://plus.google.com/photos/115991088221567404364/albums/5360603223954302513"><img src="https://lh6.googleusercontent.com/-AT4eCYK7mBk/SmmNtnBSt1I/AAAAAAAAASI/12Fn47KG7Ts/s0-I/IMG_8128.jpg" /></figure>
			<figure style="width:45%;float:right" data-url="https://plus.google.com/photos/115991088221567404364/albums/5360603223954302513"><img src="https://lh6.googleusercontent.com/-MzugOE0nozg/SmqqRYouLAI/AAAAAAAAASc/Jn83w9w-HDY/s0-I/IMG_8143.jpg" /></figure>
			<br style="clear:both!important" />
		</li>
	</ul>
<?

$this->show('common/bottom.php');
