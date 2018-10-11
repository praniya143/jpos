<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
      <title>Harvest Home</title>
      <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
      <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto.min.css" rel="stylesheet">
      <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
   </head>
   <body>
    <header>
        <div class="container">
            <div class="headflex">
                <div>
                    <div class="menubar">
                        <div>
                            <img src="{{ asset('/images/barcodeicon.png') }}" alt=""/>
                            <h1>Form</h1>
			</div>
			<div>
			<a href="/logout">
                            <span><br><br>
				<h4><u>Logout</u></h4>
                            </span>
                        </a>
			</div>
                        <div>
                            <div id="nav-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                             </div>
                             <span class="menutxt">Menu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <div class="leftmenu">
		<div class="menuboxflex">
		@if(!isset($menu))
			@include('menu')
		@else
			@include('master_menu')
		@endif
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
	@yield('content')
    </div>
    <footer>
        <div class="container">
            <div class="copyrightarea">
                <div>
                    <img src="{{ asset('/images/logo@2x.png') }}" width="105" />
                </div>
                <div>
                    <span class="copyn">&copy; 2018.NStore</span>
                    <span class="rightn">All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>

   <!-- script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="{{ asset('/js/main.js') }}"></script>
   </body>
</html>
