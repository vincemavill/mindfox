<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('/') }}img/mindfox-icon.png">
    <title>MINDFOX</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link href="{{ asset('/') }}css/font-awesome.css" rel="stylesheet">

    <!-- THE STYLE -->
    <link href="{{ asset('/') }}css/thecss.css" rel="stylesheet">

  </head>
  <body>
    <div id ="big-container">
        @include('navfoo/navigation')

        <!-- PARALAX -->
<!--         <div class="a-row paralax-b" data-stellar-background-ratio="0.5">
            <div class="a-vh vertical-center opacity-w">
                <div class="container">
                    <h2 class="roboto-f black-c text-center fw400">WHO WE ARE?</h2>
                </div>
            </div>
        </div> -->

        <div class="b-row">
            <div class="col-lg-12 cont-pads">
                <div class="container">
                    <div class="col-lg-10 col-lg-offset-1 content-pad">
                        <h3 class="roboto-f text-center tit-cont">Welcome to MindFox Design & Technical Works Company</h3>
                        <p class="roboto-f text-center p-cont">We are one of the fastest growing creative production team and promotional merchandise provider in the South East Asia.</p>
                        <p class="roboto-f text-center p-cont">We commit ourselves in playing a big role in creating meaningful relationships with our client’s audience through our branding designs, production materials, printing services and novelty items. Here are the list of our services:</p>
                    </div>

                    <div class="col-lg-10 col-lg-offset-1 content-pad">
                        <h3 class="roboto-f text-center tit-cont">CORPORATE GIVEAWAYS & PROMOTIONAL GIFTS</h3>
                        <p class="roboto-f text-center p-cont">We supply every industry we cater with quality corporate giveaways across the country and overseas. Fact: Branded promotional products offer a long-term advertising impact with recipients and additionally, they enhance relationship by reinforcing customer loyalty and creating trust in your company. It’s a powerful tool for ‘brand recall’ and effective visual communication.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="b-row">
            <div class="col-lg-12 cont-pad">
                <div class="container">

                  <button class="btn btn-1 btn-1a center-block" onclick="location.href='../file/MindFox-2017.pdf'">DOWNLOAD COMPANY PROFILE</button>
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

            if($(window).width() <= 991){
              $(".isotope-btn").addClass('center-block');
            }
            else {
              $(".isotope-btn").removeClass('center-block');
            }
            // $("#whatwedo").children("a").removeClass('make-w');
            $("#whatwedo").addClass('active-nav1');

            setTimeout(function() {
                
                $("#showall").click();
            },1000);
            
        });

        $(".isotope-btn").click(function(){
          $(".isotope-btn").removeClass('iso-btn-active');
          $(this).addClass('iso-btn-active');
        });


    </script>

</html>