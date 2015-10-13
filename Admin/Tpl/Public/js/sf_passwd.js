window.onload = function() {
	var oReset = document.getElementById('reset');
	var op1 = document.getElementById('p1');
	var op2 = document.getElementById('p2');

	oReset.onclick = function() {
		return false;
		op1.value = op2.value = '';
	};
};