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
      

        <!-- PARALAX -->
        <div class="z-row paralax-a" data-stellar-background-ratio="0.5">
            <div class="z-vh vertical-center opacity-w">
                <div class="container">
                    <img src="img/comming.png" width="400" class="img-responsive center-block " alt="Mindfox">
                    <h2 class="roboto-f black-c text-center fw300">Please come back later</h2>
                    <!-- <h4 class="roboto-f black-c text-center fw700">- The fox says</h4> -->
                    <!-- <h2 class="roboto-f black-c text-center fw300 para-cont-s">Let’s put love on your brand</h2>
                    <h2 class="roboto-f black-c text-center fw300 para-cont-s">Great in customising your giveaway needs</h2>
                    <h2 class="roboto-f black-c text-center fw300 para-cont-s">Our art direction is seamless</h2> -->

                </div>
            </div>
        </div>
    </div>


  </body>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('/') }}js/bootstrap.min.js"></script>

    <!-- PARALLAX -->
    <script src="{{ asset('/') }}js/jquery.stellar.js"></script>

    <!-- ISOTOPE -->
    <script src="{{ asset('/') }}js/isotope.pkgd.js"></script>
    <script src="{{ asset('/') }}js/isotope.js"></script>


    <script type="text/javascript">
            
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
            $("#home").addClass('active-nav1');
            
        });

        $(".isotope-btn").click(function(){
          $(".isotope-btn").removeClass('iso-btn-active');
          $(this).addClass('iso-btn-active');
        });


    </script>

</html>