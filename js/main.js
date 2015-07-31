$(function(){

  // set up default visibility states
  $('.answer').append('<div class="btn-back">X</div>');
  $('.answer').addClass('closed');
  $('.question').addClass('open');

  // handle quiz events (question/answer)
  $('.quiz-choice').click(function(){
    $('.question').removeClass('open').addClass('closed anim');
    $('.answer').removeClass('closed').addClass('open anim');
    if( $(this).is(':checked')){
      var val = $("input[name=quiz-choice]:checked").val();
      $('.answer-message').text(val);
    }
  });

  // handle quiz events (close panel)
  $('.btn-back').click(function(){
    $('.answer').removeClass('open').addClass('closed anim');
    $('.question').removeClass('closed').addClass('open anim');
  });

  // slide links area up from bottom (and over "quiz" area)
  // modify top value based on screen width using modernizr conditional
  if ( Modernizr.mq('only screen and (min-width: 600px)') ){

    $('.hashtag').click(function(){
      var top = $('.wrapper-cards').offset().top;
      $('html,body').animate({scrollTop: top - 132},400); // slide .wrapper-cards just beneath the masthead
    });

  }


  // set up default state for nav items
  $('.item').addClass('start');
  // create "close" button
  $('.wrapper-nav-themes').prepend('<div class="close">X</div>');

  // handle button event for nav toggle
  $('.toggle-nav-themes, .close').click(function(){
    $('.wrapper-nav-themes').toggleClass('fade');
    $('.item').toggleClass('start');
  });


  // position .wrapper-cards at bottom of default screen height
  // add top margin equal to window height
  // breakpoints < 600 do not get quiz so there's no need to push .card-wrapper down
  if ( Modernizr.mq('only screen and (min-width: 600px)') ){

    var wh = $(window).height();
    $('.wrapper-cards').css('marginTop',wh);
    
    $(window).resize(function(){
      var wh = $(window).height();
      $('.wrapper-cards').css('marginTop',wh);
    });

  }

  // make a grid for cards
  var iw = $('.instagram').outerWidth() - 20; // subtract 20px for borders
  $('.card').find('.content:eq(0)').css('height',iw*1.5);
  $('.card').find('.content').not(':eq(0)').css('height',iw);
  
  $(window).resize(function(){
    var iw = $('.instagram').outerWidth() - 20; // subtract 20px for borders
    $('.card').find('.content:eq(0)').css('height',iw*1.5);
    $('.card').find('.content').not(':eq(0)').css('height',iw);
  });

  // for wide browser breakpoints
  if ( Modernizr.mq('only screen and (min-width: 1080px)') ){
    // make a grid for cards
    var iw = $('.instagram').outerWidth() - 20; // subtract 20px for borders
    $('.card').find('.content:eq(0)').css('height',iw*2);
    $('.card').find('.content').not(':eq(0)').css('height',iw);
    $(window).resize(function(){
      var iw = $('.instagram').outerWidth() - 20; // subtract 20px for borders
      $('.card').find('.content:eq(0)').css('height',iw*2);
      $('.card').find('.content').not(':eq(0)').css('height',iw);
    });
  }

  // call fitvids plug in for embedded cast videos
  $(".cast").fitVids();


  // open rel=external links in a new window
  $('a[rel*=external]').attr('target','_blank');


});
