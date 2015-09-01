
<footer>
  <div class="container">
    <div class="row footer-list">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <ul>
          <li><a href="">Продвижение сайтов</a></li>
          <li><a href="">Создание сайтов</a></li>
          <li><a href="">Контекстная реклама</a></li>
          <li><a href="">Создание контента</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <ul>
          <li><a href="">Портфолио</a></li>
          <li><a href="">Блог</a></li>
        <ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <ul>
          <li><a href=""></a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-sozseti">
        <ul>
          <li>Мы в социальных сетях:</li>
          <li>
              <a href="" target="_blank" rel="nofollow"><i class="fa fa-facebook fa-2x"></i></a>
              <a href="" target="_blank" rel="nofollow"><i class="fa fa-vk fa-2x"></i></a>
              <a href="" target="_blank" rel="nofollow"><i class="fa fa-youtube fa-2x"></i></a>
              <a href="" target="_blank" rel="nofollow"><i class="fa fa-twitter fa-2x"></i></a>
              <a href="" target="_blank" rel="nofollow"><i class="fa fa-google-plus fa-2x"></i></a>
          </li>
        </ul>
      </div>
    </div>
    
    <div class="row footer-bottom">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">© 2015, Creative Seo</div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="">Наши реквизиты</a></div>
    </div>
  </div>
</footer>



<script src="/dev/libs/jquery/dist/jquery.min.js"></script>
<script src="/dev/libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="/dev/js/navigation.js"></script>
<script src="/dev/js/typewriting.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src="/dev/js/TweenMax.min.js"></script>
<script src="/dev/js/animation.gsap.js"></script>
<script src="/dev/js/animation.gsap.js"></script>
<script src="/dev/js/jquery.smoothscroll.js"></script>

  <script>
  $(function () {

  var controller = new ScrollMagic.Controller();
  var controller2 = new ScrollMagic.Controller();
  var controller3 = new ScrollMagic.Controller();
  

  var img1 = document.getElementsByClassName("img1");
  var img2 = document.getElementsByClassName("img2");
  var s3block2 = document.getElementsByClassName("block2");
  


   var slides = new TimelineMax()
      .to(".descr", 0.5, {top:"40%"})
      .to(".wblock", 0.5, {right:"-100%"},0)
      .to(".wblock2", 0.5, {right:"-100%"})
      .to(img1, 0.1, {opacity:1},0)
      .to(".imgn", 0.5, {opacity:1},0.35)
      .to(".descr-right", 0.5, {top:"20%",opacity:1},0.6)
      .to(".descr-left", 0.5, {opacity:0},0.6)
      .to(".descr-right", 0.5, {position:"fixed"},0.6);

  var slide2 = new TimelineMax()
        .to(".descr-right", 0.5, {top:"50%"})
        .to(".pr1", 0.5, {opacity:1})
        .to(".pr2", 0.5, {opacity:1})
        .to(".pr3", 0.5, {opacity:1})
        .to(".descr-right", 0.5, {top:"-100%"},5);


  var slide3 = new TimelineMax()
        .to(s3block2, 10, {left:"-50%"})
        .to(".block-l1", 0.5, {opacity:"0"},0)
        .to(".block-l2", 0.5, {opacity:"1"},0)
        .to(".block3", 10, {left:"50%"})
        .to(".block-l2", 0.1, {opacity:"0"},20)
        .to(".block-l3", 0.1, {opacity:"1"},20)
        .to(".block3", 10, {left:"-50%"})
        .to(".block4", 10, {left:"50%"})
        .to(".block-l3", 0.1, {opacity:"0"},50)
        .to(".block-l4", 0.1, {opacity:"1"},50)
        .to(".block4", 10, {left:"-50%"})
        ;

      
  var scene1 = new ScrollMagic.Scene({
          triggerElement: ".first-slide",
          triggerHook: "onLeave",
          duration: "120%"
        })
        .setPin(".first-slide")
        .setTween(slides)
        //.addIndicators()
        .addTo(controller);

  var scene2 = new ScrollMagic.Scene({
          triggerElement: ".slide2",
          triggerHook: "onLeave",
          duration: "150%"
          
        })
        .setTween(slide2)
        //.addIndicators()
        .addTo(controller2)
        .setPin(".slide2");

  var scene3 = new ScrollMagic.Scene({
          triggerElement: ".slide3",
          triggerHook: "onLeave",
          duration: "200%",
          
          
        })
        .setTween(slide3)
        //.addIndicators()
        .addTo(controller3)
        .setPin(".slide3");

  
  });
</script> 

<script src="/dev/js/jquery.hoverdir.js"></script> 
<script type="text/javascript">
      $(function() {

        $('.da-thumbs ').each( function() { $(this).hoverdir({
          hoverDelay : 75
        }); } );

      });
    </script>

</body>
</html>