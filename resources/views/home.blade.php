<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('/') }}img/mindfox-icon.png">

    <title>MINDFOX</title>

    @include('linkhead')

  </head>
  <body>
    <div id ="big-container">
        @include('navfoo/navigation')

        <!-- PARALAX -->
        <div class="a-row paralax-a" data-stellar-background-ratio="0.5">
            <div class="a-vh vertical-center opacity-w">
                <div class="container">
                    <!-- <h2 class="roboto-f black-c text-center fw300 para-cont-s">Let’s put love on your brand</h2>
                    <h2 class="roboto-f black-c text-center fw300 para-cont-s">Great in customising your giveaway needs</h2>
                    <h2 class="roboto-f black-c text-center fw300 para-cont-s">Our art direction is seamless</h2> -->

                    <h2 class="roboto-f black-c text-center fw300 para-cont-s wow flipInX" data-wow-duration="1s" data-wow-delay="0s">LET'S PUT LOVE ON YOUR BRAND</h2>
                    <h2 class="roboto-f black-c text-center fw300 para-cont-s wow flipInX" data-wow-duration="1s" data-wow-delay=".5s">GREAT IN CUSTOMISSING YOUR GIVEAWAY NEEDS</h2>
                    <h2 class="roboto-f black-c text-center fw300 para-cont-s wow flipInX" data-wow-duration="1s" data-wow-delay="1s">OUR ART DIRECTION IS SEAMLESS</h2>

                </div>
            </div>
        </div>

        @include('whatwedo_cat')



        <!-- FOOTER -->
        @include('navfoo/footer')

    </div>


  </body>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('/') }}js/bootstrap.min.js"></script>

    <script src="{{ asset('/') }}js/wow.min.js"></script>

    <!-- PARALLAX -->
    <script src="{{ asset('/') }}js/jquery.stellar.js"></script>

    <!-- ISOTOPE -->
    <script src="{{ asset('/') }}js/isotope.pkgd.js"></script>
    <script src="{{ asset('/') }}js/isotope.js"></script>

    

    <script type="text/javascript">



        var wow = new WOW(
  {
    boxClass:     'wow',      
    animateClass: 'animated', 
    offset:       0,          
    mobile:       true,       
    live:         true,       
    callback:     function(box) {
    
    },
    scrollContainer: null 
  }
);
wow.init();






            
        $(function(){
          $.stellar({
            horizontalScrolling: false,
            verticalOffset: 20
          });
        });

        $(document).ready(function(){
            $("#showall").addClass('iso-btn-active');
            if($(window).width() <= 991){
              $(".isotope-btn").addClass('center-block');
            }
            else {
              $(".isotope-btn").removeClass('center-block');
            }
            // $("#home").children("a").removeClass('make-w');
            $("#home").addClass('active-nav1');

            

            setTimeout(function() {
                //$("#giveaways").click();
                $("#showall").click();
            },1000);
            
        });

        $(".isotope-btn").click(function(){
          $(".isotope-btn").removeClass('iso-btn-active');
          $(this).addClass('iso-btn-active');
        });


    </script>

</html>