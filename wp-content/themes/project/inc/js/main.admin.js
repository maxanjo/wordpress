$(document).ready(function(){

  $('.dropdown-with-search').dropselect();

// Color Picker Options
$('.color-picker').minicolors({
          control: $(this).attr('data-control') || 'hue',
          defaultValue: $(this).attr('data-defaultValue') || '',
          format: $(this).attr('data-format') || 'hex',
          keywords: $(this).attr('data-keywords') || '',
          inline: $(this).attr('data-inline') === 'true',
          letterCase: $(this).attr('data-letterCase') || 'lowercase',
          opacity: $(this).attr('data-opacity'),
          position: $(this).attr('data-position') || 'bottom left',
          swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
          },
          theme: 'bootstrap'
        });

// Select Options
     $(".form-group ul li a").on('click', function(e){
         e.preventDefault();
        styleText = $(this).attr('data-value');
        arr = styleText.split(', ')
        input = $(this).parents('.form-group').siblings('input');
        button = $(this).parents('.form-group').find('button');
        input.val(styleText);
        $(button).text(arr[1]);
    })

$('table.form-table textarea').each(function(){
  textareaId = $(this).attr('id')
  CKEDITOR.replace(textareaId);
})

$('.default-button').click(function(){
  confirm = confirm("Are you sure?");
  if(confirm){
    color = $('.default-color').val();
  second_color = $('.default-second-color').val();
  button_family = $('.default-button-family').val();
  button_size = $('.default-button-size').val();
  button_color = $('.default-button-color').val();
  background_color = $('.default-background-color').val();
  background_repeat = $('.default-background-repeat').val();
  background_position = $('.default-background-position').val();
  $('#web_main_color').val(color); 
  $('#web_second_color').val(second_color);
  $('#web_buttons_family').val(button_family);
  $('#web_buttons_size').val(button_size);
  $('#web_buttons_color').val(button_color);
  $('#web_bg_color').val(background_color);
  $('#web_bg_repeat').val(background_repeat);
  $('#web_bg_position').val(background_position);

  $('form.web-form').submit();
  }
  
})

})