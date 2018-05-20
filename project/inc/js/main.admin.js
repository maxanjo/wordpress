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


})