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
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
    <header>
        <div class="container">
            <div class="headflex">
                <div>
                    <div class="menubar">
                        <div>
                            <img src="images/barcodeicon.png" alt=""/>
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
                    <img src="images/logo@2x.png" width="105" />
                </div>
                <div>
                    <span class="copyn">&copy; 2018.NStore</span>
                    <span class="rightn">All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Pop Up -->
   <div class="popbg">
        <div class="popflex formsector">
            <div>
                <div class="calctotal">
                    <a href="#" class="closebtn grey closepop">X</a>
                    <div class="totalpart active">
                            <div>
                                <div class="textboxdiv">
                                    <label>Text</label>
                                    <input type="text" class="textbox" />
                                </div>
                            </div>
                            <div>
                                <div class="textboxdiv">
                                    <label>Password</label>
                                    <input type="password" class="textbox" />
                                </div>
                            </div>
                            <div>
                                <div class="textboxdiv">
                                    <label>Number</label>
                                    <input type="number" class="textbox" />
                                </div>
                            </div>
                            <div>
                                <div class="textboxdiv">
                                    <label>Selectbox</label>
                                    <div class="selectbox">
                                        <input type="hidden" />
                                        <span>Dropdown</span>
                                        <div>
                                            <ul>
                                                <li>Item 01</li>
                                                <li>Item 02</li>
                                                <li>Item 03</li>
                                                <li>Item 04</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="groupinput">
                                        <div class="checkradiobox checkbox">
                                            <input type="checkbox" id="checkbox4" />
                                            <label for="checkbox4">Checkbox Demo</label>
                                        </div>
                                        <div class="checkradiobox checkbox">
                                            <input type="checkbox" id="checkbox5" />
                                            <label for="checkbox5">Checkbox Demo</label>
                                        </div>
                                        <div class="checkradiobox checkbox">
                                            <input type="checkbox" id="checkbox6" />
                                            <label for="checkbox6">Checkbox Demo</label>
                                        </div>
                                </div>
                            </div>
                            <div>
                                <div class="groupinput">
                                    <div class="checkradiobox radiobox">
                                        <input type="radio" id="radio4" name="radiogroup" />
                                        <label for="radio4">Checkbox Demo</label>
                                    </div>
                                    <div class="checkradiobox radiobox">
                                        <input type="radio" id="radio5" name="radiogroup" />
                                        <label for="radio5">Checkbox Demo</label>
                                    </div>
                                    <div class="checkradiobox radiobox">
                                        <input type="radio" id="radio6" name="radiogroup" />
                                        <label for="radio6">Checkbox Demo</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="textboxdiv">
                                    <label>Textarea</label>
                                    <textarea class="textbox" rows="5"></textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="js/main.js"></script>
   </body>
</html>
