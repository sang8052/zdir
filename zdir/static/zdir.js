$(document).ready(function(){
	msg();
});

//清空内容
function clear_msg(){
	$("#msg-content").empty();
}
function msg(){
	//生成0-5的随机数
	var num = parseInt(Math.random()*4);;
	
	var content = new Array();
	content[0] = '原/layer 移动到 layui/layer                                         Date:2019年11月2日';
	content[1] = '原/html5shiv 和 / respond.js  移动到 html5/html5shiv html5/respond/ Date:2019年11月2日';
	content[2] = '新增/htext  目录存放前端常用富文本编辑器                            Date:2019年11月2日';
	content[3] = '新增/hchart 目录存放前端常用图标控件                                Date:2019年11月2日';
	$("#msg-content").append(content[num]);
	window.setTimeout("clear_msg()",9800);
	window.setTimeout("msg()",10000);
}