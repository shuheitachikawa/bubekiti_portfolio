//Welcomeボタンクリックで画面高さ分自動スクロール
$(function(){
  $('.top-view__btn').on('click', function(){
    $height = $(window).height();
    $('html, body').animate({scrollTop:$height},400);
  })
})


//グローバルメニュークリックで自動スクロール
var id = "";
var position = "";

$(function(){
  $('.global-nav__item > a').on('click', function(e){
    if($('body').hasClass('home')){
      e.preventDefault();
      id = $(this).attr("id"); 
      scroll();
    };
  });
  
  function scroll(){
    position = $(`.${id}`).offset().top;
    if(id === 'top-view'){
      $('html, body').animate({scrollTop:0},400);
    }else if(id === 'service'){
      $('html, body').animate({scrollTop:position},400);
    }else{
      position = position - 30;
      $('html, body').animate({scrollTop:position},400);
    };
  }; 

});



//表示場所に合わせてグローバルメニューの表示変更
// function gmenu(){
//   $('.key').each(function(){
//     var $this = $(this);
//     $this.waypoint({
//       handler() {
//         let key = $this.attr('id');
//         //$this.css('opacity','100%');
//         $(`a#${key}`).css('opacity','0%');
//       },
//       offset: '80%',
//     });
//   });
// }

// $(function(){
//   $(window).on('scroll', function(){
//   })
//   gmenu();
// })


//制作物のフィルター
var id = "";
var position = "";

$(function(){
  $('.work__btn-item').on('click', function(){
    $('.work__btn-item').removeClass('active')
    $('.work__item').removeClass('article__non-active')
    $(this).addClass('active')
    var filter = $(this).text();
    if(filter === 'ALL'){
      $('.work__item').removeClass('article__non-active');
    }else{
      $('.work__item').each(function(){
        if(!$(this).hasClass(filter)){
          $(this).addClass('article__non-active'); 
        };
      });
    };
  });
});


//クラスにanimateを含む(sectionタグ)が表示エリアに入ったらanimate処理(waypoint.js + animate.css)
function animate(){
  $('.animated').each(function(){
    var $this = $(this);
    $this.waypoint({
      handler() {
        $this.addClass('fadeIn');
        $this.css('opacity','100%');
      },
      offset: '80%',
    });
  });
}

function titleEmphasis(){
  $('.title-emphasis').each(function(){
    var $this = $(this);
    console.log($this);
    $this.waypoint({
      handler() {
        $this.animate({
          'width':'200px',
        },1000);
        console.log($this);
      },
      offset: '50%',
    });
  });
}

$(function(){
  $(window).on('load', function(){
    $('.animated').css('opacity','0');
  })
  animate();
  titleEmphasis();
})




