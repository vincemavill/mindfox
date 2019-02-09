<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('/') }}img/mindfox-icon.png">
    <title>MINDFOX</title>

    @include('linkhead')
    
    <!-- THE STYLE -->
    <link href="{{ asset('/') }}css/admincss.css" rel="stylesheet">


  </head>
  <body>
    <div id ="big-container">

        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'home')" id="defaultOpen">Home</button>
          <button class="tablinks" onclick="openCity(event, 'whatwedo')">What We Do</button>
          <button class="tablinks" onclick="openCity(event, 'blog')">Blog</button>
          <button class="tablinks" onclick="openCity(event, 'contact')">Contact</button>
          <button class="tablinks" >Logout</button>
        </div>

        <div id="home" class="tabcontent">
          <h3>Home</h3>
        </div>

        <div id="whatwedo" class="tabcontent">
          <h3>What we Do</h3>
        </div>

        <div id="blog" class="tabcontent">
          <h3>Blog</h3>
        </div>

        <div id="contact" class="tabcontent">
          <h3>Contact</h3>

         <table class="table table-bordered admin-table">
            <thead>
              <tr>
                <th>Address</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($address as $add_row)
                  <tr>
                    <td>{{ $add_row->address }}</td>
                    <td>
                        <i class="fa fa-trash admindelete" onclick="functiondel({{ $add_row->id }}, 'address_tbl')" aria-hidden="true"></i></i>
                    </td>
                  </tr>
                @endforeach
                <tr>
                    <td colspan="2">
                        <button type="button" class="center-block btn-default" data-toggle="modal" data-target="#addmodal" onclick="functionadd('address','address_tbl','1')">Add</button>
                    </td>
                </tr>
            </tbody>
          </table>

         <table class="table table-bordered admin-table">
            <thead>
              <tr>
                <th>Emails</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($emails as $emails_row)
                  <tr>
                    <td>{{ $emails_row->email }}</td>
                    <td>
                        <i class="fa fa-trash admindelete" onclick="functiondel({{ $emails_row->id }}, 'emails_tbl')" aria-hidden="true"></i></i>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

        </div>


        <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form id="addform" class="addform">
                    <label for="usr" id="titlechanges"></label>
                    <input type="text" class="form-control" name="addinput" id="addinput" required>
                    <input type="hidden" class="form-control" name="thetable" id="thetable">
                    <input type="hidden" class="form-control" name="thecolumn" id="thecolumn">
                    <input type="hidden" class="form-control" name="thetype" id="thetype">
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn-default" form="addform">Save</button>
              </div>
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


    <script type="text/javascript">

    $("#addform").submit(function(stay){

        $table = $('#thetable').val();
        $addinput = $('#addinput').val();
        $column = $('#thecolumn').val();
        $type = $('#thetype').val();

        $.ajax({
            // type: 'POST',
            url: "{{ url('/') }}/admin/add",
            data: { addinput : $addinput, table : $table, column : $column, type : $type },
            success: function (data) {
              alert('Page has been updated');
              location.reload();
            },
        });

      stay.preventDefault();
    });


    function functionadd($column,$table,$type){
      $('#titlechanges').text($column+':');
      $('#thetable').val($table);
      $('#thecolumn').val($column);
      $('#thetype').val($type);
    }


    function functiondel($iddel,$table){
        
        $.ajax({
            // type: 'POST',
            url: "{{ url('/') }}/admin/delete",
            data: { iddel : $iddel, table : $table },
            success: function (data) {
              alert('Page has been updated');
              location.reload();
            },
        });

    }

            
            function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();





    </script>

</html>