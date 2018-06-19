$(document).foundation();
$(function(){

  if (Foundation.MediaQuery.atLeast('large')) {
    $("#sticker").sticky({ 
      topSpacing: 20
    }); 
  }

    //Google Captha Validator
    function verifyCaptcha(){
      var grecaptcha = $("#g-recaptcha-response").val();
      if (grecaptcha == ""){
          alert("Atenção: Obrigatório marcar a opção Não sou um robô.");
          event.preventDefault();
          return false;
      } 
    }  

    $(".btn-gc").on("click",function(){
      verifyCaptcha()
    })

    $("#signup-email").on("change", function(){
      var email = $(this).val();
      $.post("/action.php",{ email: email, action: "VerifyEmail" },function (e){
        if(e == 0){
          $(".fa-email-in-use").hide();
          $(".fa-check-email").show();
        }else if(e == 1){
          $(".fa-check-email").hide();
          $(".fa-email-in-use").show();
        }
      })
    })


    $(".expand-accordion").on("click",function(){
        $(".accordion").click();
      return false;
    })

    var swiper1 = new Swiper('.swiper1', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      pagination: {
        el: '.swiper-pagination1',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next1',
        prevEl: '.swiper-button-prev1',
      },
        autoplay: 3000
    });


    var v = document.getElementsByTagName("video");
    startVideos();
    verifyVideo();

    //Pausa quando o vídeo não estiver sendo mostrado
    //Executa o play no vídeo quando ele for mostrado.
  function verifyVideo() {
    var video = $(".swiper-slide").eq(swiper1.activeIndex).find('video');

    console.log('Video', video);

    if (!video.length) {
      startVideos();
    } else if (video.attr("autoplay") == "autoplay") {
      video[0].play();
    }
  }

  function startVideos() {
    var videos = $(".swiper-slide").find('video');
    if (videos.length) {
      for (var i = 0; i < videos.length; i++) {
        if (videos[i]) {
          videos[i].pause();
        }
      }
    }
  }

    swiper1.on('slideChange', function () {
      verifyVideo();
    });


})

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

