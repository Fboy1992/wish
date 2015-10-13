window.onload = function() {

	/*var oPage = document.getElementById('page');
	var oA = oPage.getElementsByTagName('a');
	var oDivPaper = oPage.getElementsByTagName('div');
	var len = oDivPaper.length;
	var alen = oA.length;
	var iMinZindex = 2;
	var aPos =[];

	for (var j=0; j<alen; j++) {
		oA[j].index = j;
		oA[j].onclick = function() {
			startMove1(oDivPaper[this.index],{
				'height':'0',
				'opacity':'0'
			});
			oDivPaper[this.index].style.display = 'none';
		};
	}
	//获取所有的div的offsetLeft和offsetTop,存到一个数组里边
	for (var i=0; i<len; i++) {
		aPos.push([ oDivPaper[i].offsetLeft, oDivPaper[i].offsetTop ]);
	}
	//转换布局,并给每个元素添加拖拽效果
	for (var i=0; i<len; i++) {
		oDivPaper[i].style.position = 'absolute';
		oDivPaper[i].style.left = aPos[i][0] + 'px';
		oDivPaper[i].style.top = aPos[i][1]+ 'px';
		oDivPaper[i].style.margin = '0';	
		setDrag(oDivPaper[i]);
		
	}
	//加入了zIndex变换的拖拽，保证激活的div在最上边
	function setDrag(obj) {
		obj.onmousedown = function(ev) {
			var ev = ev || event;
			obj.style.zIndex = iMinZindex++;
			obj.style.border = '1px solid red';
			startMove1(obj,{
				'opacity':'80'
			});
			var disX = ev.clientX - obj.offsetLeft;
			var disY = ev.clientY - obj.offsetTop;
			if (obj.setCapture) {
				obj.setCapture();
			}
			document.onmousemove = function(ev) {
				var ev = ev || event;
				var L = ev.clientX - disX;
				var T = ev.clientY - disY;

				//left
				if (L <= 10) {
					L = 0;
				}
				//right
				if (L >= document.documentElement.clientWidth -obj.offsetWidth-20) {
					L = document.documentElement.clientWidth -obj.offsetWidth-20;
				}
				//up
				if (T <= 0) {
					T = 0;
				}
				//down
				if (T >= document.documentElement.clientHeight -obj.offsetHeight-120) {
					T = document.documentElement.clientHeight -obj.offsetHeight-120;
				} 
				obj.style.left = L + 'px';
				obj.style.top = T + 'px';
			};
			document.onmouseup = function() {
				document.onmousemove = document.onmouseup = null;
				obj.style.border = 'none';
				startMove1(obj,{
				'opacity':'100'
				});
				if (obj.releaseCapture) {
					obj.releaseCapture();
				}	
			};
			return false;
		};
	}*/
	//我要许愿点击事件
	var oAdd = document.getElementById('add');
	var oForm = document.getElementById('send_form');

	oAdd.onclick = function() {
		oForm.style.display='block';
	};
};