<!-- footer -->
<footer>
    <div class="copyright">
        <div class="container">
            <p>© 2018 ELMAW2AF. All rights reserved</p>
        </div>
    </div>
</footer>
<!-- //footer -->



<!-- js-scripts -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->
<script>
    $(document).ready(function () {
        $('#display_transport_form').click(function (e) {
            e.preventDefault();
            var location = $('#location').val();
            var destination = $('#destination').val();
            if(location != destination && location!= 't_from' && destination !='t_to') {
                $(this).parent().submit();
                $('.se-pre-con').show();
            }
            else if(location == 't_from' && destination != 't_to')
            {
                alert("Please choose Location");
            }
            else if(location != 't_from' && destination == 't_to')
            {
                alert("Please choose Destination");
            }
            else if(location == 't_from' && destination == 't_to')
            {
                alert("Please choose Location and destination");
            }
            else
            {
                alert("Please choose different destination");
            }
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->

<!-- Baneer-js -->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            pager:false,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- //Baneer-js -->

<!-- banner bottom video script -->
<script src="js/simplePlayer.js"></script>
<script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
</script>
<!-- //banner bottom video script -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="js/waypoints.min.js"></script>
<script src="js/counterup.min.js"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 100,
            time: 1000
        });
    });
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->


<!-- FlexSlider-JavaScript -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //FlexSlider-JavaScript -->

<!-- //js-scripts -->
