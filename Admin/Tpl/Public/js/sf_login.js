$(function() {
	//验证码点击切换
	$('#verify_img').click(function() {
		var src = $(this).attr('src');
		$(this).attr('src',src+'&'+Math.random());
	});
});