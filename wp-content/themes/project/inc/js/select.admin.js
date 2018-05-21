$(document).ready(function(){
  // Uploader file Options
  var mediaCustom;
  $('.web-media-uploader').on('click', function(e){
    e.preventDefault();
    if(mediaCustom){
      mediaCustom.open();
      return;
    }
    uploadButton = $(this);
     
    mediaCustom = wp.media.frames.file_frame = wp.media({
      title: 'Choose Image',
      button: {
        text: 'Choose Image'
      },
      multiple: false
    });


    mediaCustom.on('select', function(){
      attachment = mediaCustom.state().get('selection').first().toJSON();
      $(uploadButton).siblings('input[type="hidden"]').val(attachment.url);
      $(uploadButton).siblings('.web-preview ').children('.web-image-preview').css('background-image', 'url(' +attachment.url +')');
    });

    mediaCustom.open();
  });

  var $urlPath = directory.url;

  // Remove file Options
  $('.remove-file').on('click', function(){
    $(this).siblings('.web-preview').find('.web-image-preview').css({'background-image': 'url('+$urlPath+'/inc/img/bg-logo-admin-transparent.png)'});
    $(this).siblings('input[type="hidden"]').val($urlPath +'/inc/img/bg-logo-admin-transparent.png');

  })
})