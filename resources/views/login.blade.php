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
        <div class="col-lg-3">
        <img src="{{ asset('/')}}img/mindfoxlogo.png" width="300" class="img-responsive center-block" alt="Mindfox">

        <form id="login_admin" method="post" action="{{ url('/') }}/admin">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h2 class="form-signin-heading text-center">Login Admin</h2>
            <p class="roboto-f">USERNAME</p>
            <div class="form-group">
                
                <input type="text" class="form-control roboto-f custom-input" id=""  name="username" required>
            </div>
            <p class="roboto-f">PASSWORD</p>
            <div class="form-group">
                <input type="password" class="form-control roboto-f custom-input" id=""  name="password" required>
            </div>
            <button type="submit" id="btn_contact" class="btn btn-1 btn-1a">SIGN IN</button>
        </form>

        </div>

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

    // $("#login_admin").submit(function(stay){

    //     $("#btn_contact").attr("disabled", true);
        
    //     $.ajax({
    //         type: 'POST',
    //         url: "{{ url('/') }}/admin",
    //         data: $(this).serialize(),
    //         beforeSend: function() {

    //         },
    //         success: function (data) {
    //           $("#login_admin")[0].reset();
    //           console.log(data);
    //           alert(data);
    //         },
    //     });

    //     stay.preventDefault(); 
    // });

    </script>

</html>