<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Ajukan Acara - HaloAcara</title>

  <!-- CSS  -->
  <link href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('assets/css/custom.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script>
    (function(d, w, c) {
        w.ChatraID = 'gHtyZdhTjau7aJZ8v';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
        + '//call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
  </script>
</head>
<body>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center blue-text">Admin Login</h1>
      <div class="row center">
        @if($error == 'error')
        <h7 class="header col s12 red-text">Login terlebih dahulu!</h7>
        @endif
        <div id="error" class="hidden">

        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
<!--         <form class="col s12" id="login" action="#">
          <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate" name="fName">
            <label for="icon_prefix">Username</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
            <input id="icon_vpn_key" type="password" class="validate" name="lName">
            <label for="icon_vpn_key">Password</label>
          </div>

            <div class="input-field col s6" id="login-process">
              <button class="btn waves-effect waves-light" type="submit">Submit
                <i class="material-icons right">send</i>
              </button>   
            </div>
          </div>
      </form> -->
      <form class="col s12" action="#" id="login">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate" name="username" value="{{ old('username') }}">
            <label for="icon_prefix">Username</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
            <input id="icon_vpn_key" type="password" class="validate" name="password">
            <label for="icon_vpn_key">Password</label>
          </div>
          <div class="input-field col s12 row center">
            <button class="btn waves-effect waves-light" id="btn-send">Submit
              <i class="material-icons right">send</i>
            </button>
            <div style="" class="hidden" id="sending">
              <div class="col s2 offset-s4">
                <p style="margin-top: 0px;" id="txt-send">Sending...</p>
              </div>
              <div class="col s2">
                <div class="progress">
                  <div class="indeterminate"></div>
                </div>
              </div>     
            </div> 
          </div>
        </div>
      </form>
      <div class="row">

      </div>
  </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="{{ url('http://materializecss.com') }}">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{{ asset('https://code.jquery.com/jquery-2.1.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/materialize.js') }}"></script>
  <script src="{{ asset('assets/js/init.js') }}"></script>
  <script type="text/javascript">
  $('#btn-send').on('click', function(e){
    e.preventDefault();

          $('#error').addClass('hidden');

          if(!$('input[name=username]').val() || !$('input[name=password]').val()){

            $('#error').removeClass('hidden');
            $('#error').html('<h7 class="header col s12 red-text">Lengkapi data login!</h7>');
          }

          else{

            $('#btn-send').addClass('hidden');
            $('#sending').removeClass('hidden');

            var dataString = $('#login').serialize();

            $.ajax({
              type : "POST",
              url : "admin-authenticate",
              data : dataString,
              dataType : 'json',

            success: function(data){

              // console.log(data);

              if(data == 'good'){
                $('#txt-send').text('Logging in...');
                setTimeout(function(){
                  window.location.replace("admin-dashboard");
                }, 2000);
              }

              else{
                $('#error').removeClass('hidden');
                $('#error').html('<h7 class="header col s12 red-text">Masukin Username/Passwordnya yg bener ajalah!</h7>');
                $('#btn-send').removeClass('hidden');
                $('#sending').addClass('hidden');
              }
            }
           });
          }
  });
  </script>
<!--   <script type="text/javascript">
      $(document).ready(function(){
        $('#login').submit(function(){

          $('#error').addClass('hidden');
          $('#btn-send').addClass('hidden');
          $('#sending').removeClass('hidden');

          var dataString = $('#login').serialize();

          $.ajax({
            type : "POST",
            url : "admin-authenticate",
            data : dataString,
            dataType : 'json',

          success: function(data){

            // console.log(data);

            if(data == 'good'){
              $('#txt-send').text('Logging in...');
                // window.location.replace("admin-dashboard"); 
            }

            else{
              $('#error').removeClass('hidden');
              $('#btn-send').removeClass('hidden');
              $('#sending').addClass('hidden');
            }
          }
         });
        });

      });
  </script> -->

  </body>
</html>
