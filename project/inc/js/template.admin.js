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

// Favicon uploader
  var mediaFavicon;
  $('#upload-button-favicon').on('click', function(a){
    a.preventDefault();
    if(mediaFavicon){
      mediaFavicon.open();
      return;
    }
    mediaFavicon = wp.media.frames.file_frame = wp.media({
      title: 'Choose a Logo',
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

  // $('#remove-logo').on('click', function(e){
  //   e.preventDefault();
  //   var answer = confirm("Are you sure you want to remove your Logo?");
  //   if(answer ==true){
  //     $('#logo-picture').val('');
  //     $('.web-form-general-form').submit();
  //   }else{

  //   }
  //   return;
  // })

/*    $('#remove-favicon').on('click', function(e){
    e.preventDefault();
    var answers = confirm("Are you sure you want to remove your Favicon?");
    if(answers ==true){
      $('#favicon-picture').val('');
      $('.web-form-general-form').submit();
    }else{

    }
    return;
  })*/
})