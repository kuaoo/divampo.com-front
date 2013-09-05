$(function() {
	$('#main-gallery').gallery();


	$(window).bind('load ajaxSuccess', function() {
		$('[data-url]').each(function () {
			var $o = $(this),
				txt = $o.html().replace(/<a.+?>/, '').replace('</a>', '');

			$o.html('<a href="' + $o.data('url') + '" target="_blank">' + txt + '</a>');
		});
	});


	if ($('#projects_block').size() > 0) {
		$.loadImage('/img/loading-bg.gif');
		$(window).scrollPaging($('#projects_block'), {
			currentPage: 1,
			endPage: $('#projects_block').data('pages'),
			load: function(p, type) {
				$('#projects_block').append('<li id="page_loading" />');
				return $.get($('#projects_block').data('pager'), {feed: 1, p: p}, function (data) {
					$('#page_loading').remove();
					if (data.state == 'ok') {
						$('#projects_block').append(data.html);
					}

				}, 'json');
			}
		});
	}


	$('#light-switch').on('click', function (e) {
		e.target = e.target || e.srcElement || e.originalTarget;
		if (e.target.nodeType === 3) { e.target = e.target.parentNode; }

		var href = cl1  = cl2 = '',
			cy = 8;
		if ($(e.target).attr('id') == 'switch-off' || (e.target.tagName.toLowerCase() != 'text' && $('body').hasClass('light'))) {
			href = '/css/dark.css';
			cl1 = 'dark';
			cl2 = 'light';
			cy = 32;
			document.cookie = 'theme=0; path=/';
		} else {
			href = '/css/light.css';
			cl1 = 'light';
			cl2 = 'dark';
			cy = 8;
			document.cookie = 'theme=1; path=/';
		}

		$.get(href, function () {
			$('#theme-style').attr('href', href);
			$('body').removeClass(cl2).addClass(cl1);

			jQuery({v: $('#light-switch g circle').eq(0).attr('cy')}).animate({v: cy}, {
				duration: 100,

				step: function() { // called on every step
					$('#light-switch g circle').attr('cy', this.v);
				}
			});
		}, 'html');
	});
});
