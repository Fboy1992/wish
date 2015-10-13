//Javacript Document

//获取元素属性值
function getStyle(obj, attr) {
	if (obj.currentStyle) {
		return obj.currentStyle[attr];
	}
	else {
		return getComputedStyle(obj, false)[attr];
	}
}

//运动函数
function startMove(obj, json, fn) {

	
	clearInterval(obj.iTimer);

	obj.iTimer = setInterval(function() {

		var onOff = true;
		for (var attr in json) {

			var iCur = 0;
			if (attr == 'opacity') {
				iCur = parseInt(parseFloat(getStyle(obj, attr)*100));
			}
			else {
				iCur = parseInt(getStyle(obj, attr));
			}

			var iSpeed = (json[attr] - iCur)/7;
			iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);

			if (iCur != json[attr]) {
				onOff = false;
			}
			
			if (attr == 'opacity') {
				obj.style.filter = 'alpha(opacity='+(iCur+iSpeed)+')';
				obj.style.opacity = (iCur + iSpeed)/100;
			}
			else {
				obj.style[attr] = (iCur + iSpeed) + 'px';
			}

		}
		if (onOff) {
			clearInterval(obj.iTimer);

			fn && fn.call(obj);
		}
	}, 30);
}

//运动函数1，速度快些
function startMove1(obj,json,fn){
	clearInterval(obj.timer);
	obj.timer = setInterval(function(){
		
		var bBtn = true;
		
		for(var attr in json){
			
			var iCur = 0;
			if( attr == 'opacity'){
				iCur = Math.round(getStyle(obj,attr)*100);
			}
			else{
				iCur = parseInt(getStyle(obj,attr));
			}
			
			var iSpeed = (json[attr] - iCur)/3;
			iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
			
			if(iCur != json[attr]){
				bBtn = false;
			}
			
			if(attr == 'opacity'){
				obj.style.filter = 'alpha(opacity='+ (iCur+iSpeed) +')';
				obj.style.opacity = (iCur+iSpeed)/100;
			}
			else{
				obj.style[attr] = iCur + iSpeed + 'px';
			}
			
			
		}
		
		if(bBtn){
			clearInterval(obj.timer);
			if(fn){
				fn.call(obj);
			}
		}
		
	},30);
}

//添加类
function addClass(obj, sClass) {

	var claArr = obj.className.split(' ');
	if (!claArr[0]) {
		obj.className = sClass;
		return;
	}

	for (var i=0; i<claArr.length; i++) {
		if (claArr[i] == sClass) {
			return;
		}
	}
	obj.className += ' ' + sClass; 
}

//检测类是否存在 

function hasClass(obj, sClass) {
	var claArr = obj.className.split(' ');

	for (var i=0; i<claArr.length; i++) {
		if (claArr[i] == sClass) {
			return true;
		}
	}
	return false;

}

//移除class

function removeClass(obj, sClass) {
	var claArr = obj.className.split(' ');

	for (var i=0; i<claArr.length; i++) {

		if (claArr[i]==sClass) {
			claArr.slice(i, 1);//移除指定位置的一个元素
			obj.className = claArr.join(' ');
			return;
		}
	}
}
//获取有id属性的元素
function getId(id) {
	return document.getElementById(id);
}

//获取有指定class的元素

function getClass(sClass, oParent) {

	var parent = oParent || document;
	var aEles = parent.getElementsByTagName("*");
	var arr = [];

	for (var i=0; i<aEles.length; i++) {
		var claArr = aEles[i].className.split(' ');

		for (var j=0; j<claArr.length; j++) {
			if (claArr[j] == sClass) {

				arr.push(aEles[i]);
			} 
		}
	}
	return arr;
}

//获取文档的可视区高度

function viewH() {

	return document.documentElement.clientHeight;
}

//获取文档的可视区款度

function viewW() {

	return document.documentElement.clientWidth;
}

//获取滚动条的滚动高度

function scrollTop() {
	return document.body.scrollTop || document.documentElement.scrollTop;
}

//事件监听器

function bindEvent(obj, events, fn) {

	if (obj.addEventListener) {
		obj.addEventListener(events, fn, false);

	}
	else {
		obj.attachEvent('on'+events, function () {
			fn.call(obj);
		});
	}

}

//拖拽函数

function drag(obj) {

	obj.onmousedown = function (ev) {

		if(obj.noDrag == 2) {
			return;
		}
		var ev = ev || event;
		var disX = ev.clientX - obj.offsetLeft;
		var disY = ev.clientY - obj.offsetTop;

		if (obj.setCapture) {
			obj.setCapture();

		}
		document.onmousemove = function (ev) {

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
		}
		document.onmouseup = function () {
			document.onmousemove = document.onmouseup = null;
			if (obj.releaseCapture) {
				obj.releaseCapture();
			}
		}
		return false;
	}
}

//设置cookie
function setCookie(key, value, iTime) {
	var oDate = new Date();
	oDate.setDate(oDate.getDate()+iTime);

	document.cookie = key + '=' + encodeURI(value)+';expries='+oDate.toUTCString();
}

//获取cookie
function getCookie(key) {

	var aCoo = document.cookie.split('; ');
	for (var i=0; i<aCoo.length; i++) {

		var arr = aCoo[i].split('=');
		if (arr[0] == key) {
			return decodeURI(arr[1]);
		}
	}

}

//删除cookie

function removeCookie(key) {

	setCookie(key, '', -1);
}

// 双位数字(字符串)
function getD(itime) {
	if (itime<10) {
		return '0' + itime;
	}
	return '' + itime;
}

function center(obj) {
	obj.style.top = (document.documentElement.clientHeight - obj.offsetHeight)/2 + 'px';
	obj.style.left = (document.documentElement.clientWidth - obj.offsetWidth + 67)/2 + 'px';
}
