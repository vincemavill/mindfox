<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    
    <title>MINDFOX</title>

    @include('linkhead')

  </head>
  <body>
    <div id ="big-container">
        @include('navfoo/navigation')

        <!-- PARALAX -->
        <div class="col-lg-12 nav-cont-pad">
            
                <div class="container">
                    <img src="{{ asset('/')}}img/contact/contact.jpg" class="img-responsive" alt="Mindfox">
                </div>
        </div>
        <div class="b-row">
            <div class="col-lg-12 cont-pad">
                <div class="container">
                  <div class="col-lg-6">
                    <div class="row">
                      <h3 class="roboto-f fw500">Contact Info</h3>
                    </div>
                    <div class="row">

                      @if (!empty($address)) 
                        <br>
                        <p class="roboto-f">Address</p>
                      @endif
                      @foreach ($address as $add_row)
                        <p class="roboto-f fw300">{{ $add_row->address }}</p>

                      @endforeach

                      @if (!empty($emails)) 
                        <br>
                        <p class="roboto-f">Email Us</p>
                      @endif
                      @foreach ($emails as $emails_row)
                        <p class="roboto-f fw300">{{ $emails_row->email }}</p>
                      @endforeach


                      @if (!empty($contactno)) 
                        <br>
                        <p class="roboto-f">Contact Us</p>
                      @endif
                      @foreach ($contactno as $cont_row)
                        <p class="roboto-f fw300">{{ $cont_row->contact_no }}</p>
                      @endforeach


                      

                      @if (!empty($contactno_b)) 
                        <div class="text-center">
                          <ul class="list-inline">
                            <li><a href="#"><i class=" foo-icon fa fa-fw fa fa-weixin"></i></a></li>
                            <li><a href="#"><i class=" foo-icon fa fa-fw fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class=" foo-icon fa fa-fw fa fa-phone"></i></a></li>
                          </ul>
                        </div>
                      @endif
                      @foreach ($contactno_b as $cont_b_row)
                        <p class="roboto-f fw300 text-center">{{ $cont_b_row->contact_no }}</p>
                      @endforeach
                      @if (!empty($contactno_b)) 
                        <p class="roboto-f text-center">We’re available on Wechat, Whatsapp & Viber<br>for local and overseas clients</p>
                      @endif
                      <br>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <form id="mindfox_contact">
                        <br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                          <input type="text" class="form-control roboto-f custom-input" id="" placeholder="Name" name="name" required>
                        </div>
                        <div class="form-group">
                          <input type="Email" class="form-control roboto-f custom-input" id="" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control roboto-f custom-input" id="" placeholder="Phone" name="phone" required>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control roboto-f custom-input" id="" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="form-group">
                          <textarea type="text" class="form-control roboto-f custom-input" id="" placeholder="Message" name="message" rows="6" required></textarea>
                        </div>
                        <div class="form-group">
                         
                          <button type="submit" id="btn_contact" class="btn btn-1 btn-1a">SEND MESSAGE</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>


<div class="alert alert-success alert-dismissable success-alert col-md-4 col-md-offset-4" hidden>
  <a href="#" class="alert_close pull-right" aria-label="close">&times;</a>
  <span class="mont-f"><strong>Message sent, thank you! </strong>Please check your email.</span>
  
</div>

<div class="loader" hidden></div>
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
            // $("#contact").children("a").removeClass('make-w');
            $("#contact").addClass('active-nav1');

        });

    // CONTACT

    $(".alert_close").click(function(){
      $(".success-alert").fadeOut();
    });

    $("#mindfox_contact").submit(function(stay){

      $("#btn_contact").attr("disabled", true);

        $.ajax({
            type: 'POST',
            url: "{{ url('/') }}/testing/send_mail",
            data: $(this).serialize(),
            beforeSend: function() {
               $('.loader').show();
            },
            success: function (data) {
              $('.loader').hide();
              $(".success-alert").fadeIn();
              $("#mindfox_contact")[0].reset();
              $("#btn_contact").removeAttr("disabled");
              console.log(data);
            },
        });
        stay.preventDefault(); 
    });



    </script>

</html>