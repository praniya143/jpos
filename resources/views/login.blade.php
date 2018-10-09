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
    <div class="container">
        <div class="bargenerate mobiletopflow">
	    <div class="formleft">
		<form action="/authenticate" method="POST">
		{{ csrf_field() }}
                <div class="formtwiceway">
                    <div>
                        <div class="textboxdiv">
                            <label>Username</label>
                            <input name="username" type="text" class="textbox" />
                        </div>
                    </div>
                    <div>
                        <div class="textboxdiv">
                            <label>Password</label>
                            <input name="password" type="password" class="textbox" />
                        </div>
                    </div>
                </div>
		<span style="float:right"><button name="login" type="submit" class="btn secondary wide">Submit</button></span>
		</form>
            </div>
        </div>
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

   <!-- script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="js/main.js"></script>
   </body>
</html>
