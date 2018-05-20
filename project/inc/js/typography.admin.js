$(document).ready(function(){

	  $('#dropselect-demo1').dropselect();
	  $('#dropselect-h1').dropselect();
	  $('#dropselect-h2').dropselect();
	  $('#dropselect-h3').dropselect();
	  $('#dropselect-h4').dropselect();
	  $('#dropselect-h5').dropselect();
	  $('#dropselect-h6').dropselect();

	  // FONT FAMILY
	  $(".body-font ul.dropselect-list li a").on('click', function(){
	  		html = $('.body-font .dropselect-selected a').text().replace('<i class="glyphicon glyphicon-ok dropselect-item-icon"></i>', '').replace(/^\s*(.*)\s*$/, '$1');
	  		$('input#web_font_family').val(html)	  		
	  })
	  $(".heading-1 ul.dropselect-list li a").on('click', function(){
	  		html = $('.heading-1 .dropselect-selected a').text().replace('<i class="glyphicon glyphicon-ok dropselect-item-icon"></i>', '').replace(/^\s*(.*)\s*$/, '$1');
	  		$('input#web_h1_family').val(html)	  		
	  })
	   $(".heading-2 ul.dropselect-list li a").on('click', function(){
	  		html = $('.heading-2 .dropselect-selected a').text().replace('<i class="glyphicon glyphicon-ok dropselect-item-icon"></i>', '').replace(/^\s*(.*)\s*$/, '$1');
	  		$('input#web_h2_family').val(html)	  		
	  })
	    $(".heading-3 ul.dropselect-list li a").on('click', function(){
	  		html = $('.heading-3 .dropselect-selected a').text().replace('<i class="glyphicon glyphicon-ok dropselect-item-icon"></i>', '').replace(/^\s*(.*)\s*$/, '$1');
	  		$('input#web_h3_family').val(html)	  		
	  })
	     $(".heading-4 ul.dropselect-list li a").on('click', function(){
	  		html = $('.heading-4 .dropselect-selected a').text().replace('<i class="glyphicon glyphicon-ok dropselect-item-icon"></i>', '').replace(/^\s*(.*)\s*$/, '$1');
	  		$('input#web_h4_family').val(html)	  		
	  })

	    // Font Style

	   $("ul#body_style li a").on('click', function(){
	  		styleText = $(this).text();
	  		$('input#web_body_style').val(styleText);
	  		$('.dropdown.font-style button.dropdown-toggle').text(styleText);
	  })
	    $("ul#h1_style li a").on('click', function(){
	  		styleText = $(this).text();
	  		$('input#web_h1_style').val(styleText);
	  		$('.dropdown.h1-style button.dropdown-toggle').text(styleText);
	  })
	    $("ul#h2_style li a").on('click', function(){
	  		styleText = $(this).text();
	  		$('input#web_h2_style').val(styleText);
	  		$('.dropdown.h2-style button.dropdown-toggle').text(styleText);
	  })
	    $("ul#h3_style li a").on('click', function(){
	  		styleText = $(this).text();
	  		$('input#web_h3_style').val(styleText);
	  		$('.dropdown.h3-style button.dropdown-toggle').text(styleText);
	  })
	    $("ul#h4_style li a").on('click', function(){
	  		styleText = $(this).text();
	  		$('input#web_h4_style').val(styleText);
	  		$('.dropdown.h4-style button.dropdown-toggle').text(styleText);
	  })


	   $("#web_default_font_body").on('click',function(){
	   	if(!($(this).is(':checked'))){
	   		$('#font-settings').removeClass('disabled')
	   }else{
	   	$('#font-settings').addClass('disabled')
	   }
	   })

	   $("#web_default_font_heading").on('click',function(){
	   	if(!($(this).is(':checked'))){
	   		$('#font-settings-heading, .font-settings-heading').removeClass('disabled')
	   }else{
	   	$('#font-settings-heading, .font-settings-heading').addClass('disabled')
	   }
	   })
})