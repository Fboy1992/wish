//许愿墙后台js
$(function() {

	//导航菜单点击效果
	$('.menu dd').each(function() {
		$(this).click(function() {
			$(this).css({
				'background':'pink'
			}).siblings('dd').css({
				'background':'#eacd64'
			});
		});
	});
});