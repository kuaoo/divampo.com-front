;(function($) {
	$.fn.gallery = function(options) {
		var $o = this,
			opts = $.extend({
				items: '> li',
				fade_duration: 300,
				loader_duration: 500,
				loading_class: 'loading',
				pagging_class: 'main-gallery-paging',
			}, options),
			$pager = $('<ul class="' + opts.pagging_class + '"><li class="next">›</li><li class="prev">‹</li></ul>').appendTo($o.parent()),
			$items = $o.find(opts.items),
			$pager_items,
			auto_timeout = null;

		init();

		function init() {
			var deferreds = [],
				animations = [],
				$l = $('<div class="' + opts.loading_class + '"><div /></div>').appendTo($o.parent());

			$o.css({
				'position' : 'relative',
			});
			$items.css({
				'position' : 'absolute',
				'top': 0
			});
			var $clone = $items.eq(0).clone().css({
				'position' : 'relative',
				'visibility' : 'hidden',
				'display' : 'block'
			});
			$o.prepend($clone);

			$l.fadeTo(opts.fade_duration, 1, function() {
				$l.data('total', $items.size()).data('current', 0);
				for (var i = 0; i < $items.size(); i++) {
					$pager.append('<li />');
					deferreds.push($.loadImage($items.eq(i).find('img').attr('src')).done(function() {
						$l.data('current', $l.data('current') + 1);
						animations.push(
							$l.find('> div')
								.stop()
								.animate({'width' : ($l.data('current') / $l.data('total') * 100) + '%'}, opts.loader_duration)
								.promise()
						);
					}));
				}

				$.when.apply(this, deferreds).then(function() {
					$pager_items = $($pager.find('> li:not(.next):not(.prev)'));
					$.when.apply(this, animations).then(function() {
						$l.fadeTo(opts.fade_duration, 0, function() {
							$l.remove();
							$pager.fadeTo(opts.fade_duration, 1);
							$pager_items.eq(0).addClass('active');
							$items.eq(0).fadeTo(opts.fade_duration, 1);
						});
					});

					$pager_items.bind('click', function () {
						jump($pager_items.index(this));
					});
					$pager.find('.prev').bind('click', function() {
						var i = $pager_items.index($pager_items.filter('.active')[0]) - 1;
						if (i < 0) { i = $pager_items.size() - 1; }
						jump(i);
					});
					$pager.find('.next').bind('click', function() {
						var i = $pager_items.index($pager_items.filter('.active')[0]) + 1;
						if (i > $pager_items.size() - 1) { i = 0; }
						jump(i);
					});

					enableAuto();
					$o.hover(disableAuto, enableAuto);
					$pager.hover(disableAuto, enableAuto);
				});
			});
		}

		function enableAuto() {
			auto_timeout = window.setInterval(function() {
				$pager.find('.next').click();
			}, 5000);
		}
		function disableAuto() {
			window.clearInterval(auto_timeout);
		}

		function jump(i) {
			if ($pager_items.index($pager_items.filter('.active')[0]) == i) {
				$items.eq(i).stop().fadeTo(opts.fade_duration, 1);
				$pager_items.removeClass('active');
				$pager_items.eq(i).addClass('active');
			} else {
				$items.stop().fadeTo(opts.fade_duration, 0, function() {
					$items.eq(i).stop().fadeTo(opts.fade_duration, 1);
					$pager_items.removeClass('active');
					$pager_items.eq(i).addClass('active');
				});
			}
		}
	};
}(jQuery));