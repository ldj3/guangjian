var menu = function(){
	var t = 15, z = 50, s = 6, a;
	function sl(c, f){
		var h = c.offsetHeight;
		if ((h <= 0 && f != 1) || (h >= c.mh && f == 1)) {
			if (f == 1) {
				c.style.filter = '';
				c.style.opacity = 1;
				c.style.overflow = 'visible';
			}
			clearInterval(c.t);
			return
		}
		var d = (f == 1) ? Math.ceil((c.mh - h) / s) : Math.ceil(h / s), o = h / c.mh;
		//c.style.opacity = o;
		//c.style.filter = 'alpha(opacity=' + (o * 100) + ')';
		c.style.opacity = 0;
		c.style.height = h + (d * f) + 'px';
	};
	function dd(n){
		this.h = [];//存取有子菜单的项目
		this.c = [];//存取子菜单
	};
	dd.prototype = {
		init: function(p, c){
			a = c;
			var that = this;
			var w = document.getElementById(p), s = w.getElementsByTagName('ul'), l = s.length/*二级菜单的个数*/, i = 0;
			for (i; i < l; i++) {
				var h = s[i].parentNode;
				this.h[i] = h;
				this.c[i] = s[i];
				/*
				 * 重点就在这里，一点JS的语法技巧，通过闭包来实现对i（索引的传递）
				 * 然后就是Javascript里比较奇怪的一点，必须在内部的函数之外声明that=this
				 * 这样对象的作用域才可以保持，很奇怪，但是很有效
				*/ 
				h.onmouseover = function(index){
					return function(){
						that.st(index, true);
					}
				}(i);
				h.onmouseout = function(index){
					return function(){
						that.st(index, false);
					}
				}(i);
			}
		},
		st: function(x, f){
			var c = this.c[x], h = this.h[x], p = h.getElementsByTagName('a')[0];
			if (c.t) {
				clearInterval(c.t);
			}
			c.style['overflow'] = 'hidden';
			if (f) {
				p.className += ' ' + a;
				if (!c.mh) {
					c.style.display = 'block';
					c.style.height = '';
					c.mh = c.offsetHeight;
					c.style.height = 0;
				}
				if (c.mh == c.offsetHeight) {
					c.style.overflow = 'visible';
				}
				else {
					c.style.zIndex = z;
					z++;
					c.t = setInterval(function(){
						sl(c, 1)
					}, t);
				}
			}
			else {
				p.className = p.className.replace(a, '');
				c.t = setInterval(function(){
					sl(c, -1)
				}, t);
			}
		}
	};
	return {
		dd: dd
	};
}();

var menu=new menu.dd();
	menu.init("menu","menuhover");
	
	
	
	