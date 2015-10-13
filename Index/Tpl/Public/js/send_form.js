$(function() {
	var zen=2;
	//随机位置和拖拽
	$('#page .paper').each(function() {
		pos($(this));
		drag1($(this));
	});

	var oA1 = $('#page .paper a.close');
	close(oA1);
	//我要许愿点击事件
	$('#add').click(function() {
		$('#send_form').show();
	});
	//关闭form
	$('#send_form #close').click(function() {
		$('#send_form').hide();
	});

	//提交数据
	$('.submit').click(function() {
		if ($('input[name=nickname]').val()=='') {
			alert('昵称不能为空！');
			return;
		}
		if ($('textarea[name=content]').val()=='') {
			alert('许愿内容不能为空！');
			return;
		}
		if ($('textarea[name=content]').val().length>50) {
			alert('输入内容不得大于50个字！');
			return;
		}
		//wish接受数据,serialize()直接序列化
		var wish = $('form[name=send_wish]').serialize();
		$.post(CONTROL + '/ajax_wish', wish, function(data) {
			$('#page').append(data);
			var obj = $('#page .paper').last();
			pos(obj);
			drag1(obj);
			var oA = $('#page .paper a.close');
			close(oA);
		}, 'html');
		//清空表单数据
		$('input[name=nickname]').val(function() {
			return this.value ='';
		});
		$('textarea[name=content]').val(function() {
			return this.value ='';
		});
		//关闭留言编辑器
		$('#send_form').hide();
	});
	//关闭form
	$('#send_form #close').click(function() {
		$('#send_form').hide();
	});

	//发送表情数据
	$('#phiz img').each(function() {
		var i = $(this).index();
		$(this).click(function() {
			var c = $('textarea[name=content]');
			c.val(function() {
				return this.value+'['+(i+1)+']';
			}); 
		});
	});


	//------------------函数区域-----------------
	//随机位置函数
	function pos(obj) {
		var FW = $('#page').width();
		var FH = $('#page').height();
		obj.css({
			position : 'absolute',
			left : parseInt(Math.random() * (FW-obj.width())) + 'px',
			top : parseInt(Math.random() * (FH-obj.height())) + 'px'
		});
	}
	/**
	*元素拖拽
	*obj 被拖拽的对象
	*element 触发拖拽的对象
	*/
	function drag1(obj) {

		obj.mousedown(function(e) {
			
			obj.css({
				zIndex:(zen++),
				opacity: 0.8,
				filter:'Alpha(opacity = 50)',
				border:'1px solid red',
				margin: 0
			});
			var positionDiv = obj.offset();
			var distanceX = e.pageX - positionDiv.left;
			var distanceY = e.pageY - positionDiv.top;
		
			$(document).mousemove(function(e){
				var x = e.pageX - distanceX;
				var y = e.pageY - distanceY;
				
				if(x<0){
					x=0;
				}else if(x>$('#bd').width()-obj.outerWidth(true)-25){	//jquery和原生有些区别
					x = $('#bd').width()-obj.outerWidth(true)-25;
				}

				if(y<95){
					y=95;
				}else if(y>$('#bd').height()-obj.outerHeight(true)+90){
					y = $('#bd').height()-obj.outerHeight+90(true);
				}

				obj.css({
				'left': x,
				'top': y-95	//这里的95s是布局中top+header的高度和
				});
			});
			$(document).mouseup(function(){

					$(document).off('mousemove');
					$(document).off('mouseup');
					obj.css({
					border:'none',
					opacity: 1,
					filter:'Alpha(opacity = 100)'
					});
		
			});
		});
	}
	//关闭paper函数
	function close(obj) {
		//each遍历每个元素
		obj.each(function(){
			//将当前的索引存入p
			var p = $(this).index('a');
			
			$(this).click(function() {
				//获取对应的div
				
				$('.paper').get(p).style.display = 'none';
			});
			
		});
	}
	//
});