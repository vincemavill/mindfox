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
        <div class="a-row paralax-b" data-stellar-background-ratio="0.5">
            <div class="a-vh vertical-center opacity-w">
                <div class="container">
                    <h2 class="roboto-f black-c text-center fw400">WHO WE ARE?</h2>
                </div>
            </div>
        </div>
        <div class="b-row cont-pad">
            <div class="">
                <div class="container">

                  <button class="btn btn-1 btn-1a center-block" onclick="location.href='file/MindFox-2017.pdf'">DOWNLOAD COMPANY PROFILE</button>
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


    <script type="text/javascript">
            
        $(function(){
          $.stellar({
            horizontalScrolling: false,
            verticalOffset: 20
          });
        });

        $(document).ready(function(){
            $("#whoweare").addClass('active-nav1')
        });


    </script>

</html>