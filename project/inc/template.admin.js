$(document).ready(function(){
// Logo uploader
  var mediaLogo;
  $('#upload-button-logo').on('click', function(e){
    e.preventDefault();
    if(mediaLogo){
      mediaLogo.open();
      return;
    }

    mediaLogo = wp.media.frames.file_frame = wp.media({
      title: 'Choose a Logo',
      button: {
        text: 'Choose Pitcure'
      },
      multiple: false
    });

    mediaLogo.on('select', function(){
      attachment = mediaLogo.state().get('selection').first().toJSON();
      $('#logo-picture').val(attachment.url);
      $('#web-logo').css('background-image', 'url(' +attachment.url +')');
    });

    mediaLogo.open();
  });

var $urlPath = directory.url;

// Remove Logo
  $('.remove-logo').click(function(){
    var removeLogoResult = confirm('Are you sure?');
    if(removeLogoResult === true){
      $('#web-logo').css('background-image', 'url('+$urlPath+'/inc/img/bg-logo-admin-transparent.png)');
    $('#logo-picture').val($urlPath +'/inc/img/bg-logo-admin-transparent.png');
    $('form.web-form-general-form').submit();
    }
  })

  // Logo Footer uploader
  var mediaLogoFooter;
  $('#upload-button-logo-footer').on('click', function(e){
    e.preventDefault();
    if(mediaLogoFooter){
      mediaLogoFooter.open();
      return;
    }

    mediaLogoFooter = wp.media.frames.file_frame = wp.media({
      title: 'Choose a Logo',
      button: {
        text: 'Choose Pitcure'
      },
      multiple: false
    });

    mediaLogoFooter.on('select', function(){
      attachment = mediaLogoFooter.state().get('selection').first().toJSON();
      $('#logo-footer').val(attachment.url);
      $('#web-logo-footer').css('background-image', 'url(' +attachment.url +')');
    });

    mediaLogoFooter.open();
  });

// Remove footer Logo
   $('.remove-logo-footer').click(function(){
    var removeLogoResult = confirm('Are you sure?');
    if(removeLogoResult === true){
      $('.web-logo-footer').css({'background-image': 'url('+$urlPath+'/inc/img/bg-logo-admin-transparent.png)'});
    $('#logo-footer').val($urlPath +'/inc/img/bg-logo-admin-transparent.png');
    $('form.web-form-general-form').submit();
    }
  })

// Favicon uploader
  var mediaFavicon;
  $('#upload-button-favicon').on('click', function(a){
    a.preventDefault();
    if(mediaFavicon){
      mediaFavicon.open();
      return;
    }
    mediaFavicon = wp.media.frames.file_frame = wp.media({
      title: 'Choose a Favicon',
      button: {
        text: 'Choose Pitcure'
      },
      multiple: false
    });
    mediaFavicon.on('select', function(){
      attachment2 = mediaFavicon.state().get('selection').first().toJSON();
      $('#favicon-picture').val(attachment2.url);
      $('#web-favicon').css('background-image', 'url(' +attachment2.url +')');
      });
    mediaFavicon.open();
    });

// Remove Favicon
$('.remove-favicon').click(function(){
    var removeFaviconResult = confirm('Are you sure?');
    if(removeFaviconResult === true){
      $('.web-favicon').css({'background-image': 'url('+$urlPath+'/inc/img/bg-logo-admin-transparent.png)'});
    $('#favicon-picture').val($urlPath +'/inc/img/bg-logo-admin-transparent.png');
    $('form.web-form-general-form').submit();
    }
  })
  })

  