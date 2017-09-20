$(document).ready(function(){
	var updateCss = function(){
		$("#web_custom_css").val( editor.getSession().getValue());
	}
	$('.web-form-css-form').submit(updateCss);
});

var editor = ace.edit("aceCss");
editor.setTheme('ace/theme/monokai');
editor.getSession().setMode("ace/mode/css");