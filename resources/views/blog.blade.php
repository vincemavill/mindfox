<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/mindfox-icon.png">
    <title>MINDFOX</title>

@include('linkhead')

  </head>
  <body>
    <div id ="big-container">
        @include('navfoo/navigation')

        <!-- PARALAX -->
        <div class="b-row nav-cont-pad">
            <div class="b-vh vertical-center">
                <div class="container">
                    <!-- <h1 class="roboto-f fw-400 text-center">"The fox says, please wait."</h1> -->
                </div>
            </div>
        </div>
      






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
    <!-- <script src="{{ asset('/') }}js/isotope.pkgd.js"></script> -->


    <!-- <script src="{{ asset('/') }}js/custom-isotope.js"></script> -->

    <script type="text/javascript">
            
        $(function(){
          $.stellar({
            horizontalScrolling: false,
            verticalOffset: 20
          });
        });

        $(document).ready(function(){
            $("#blog").addClass('active-nav1');
        });
    </script>

</html>