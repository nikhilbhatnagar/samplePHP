<html>
  <head>
    <title>Welcome to firstphp.com!</title>
  </head>
  <body>
    <h1>Success!  The firstphp.com virtual host is working!</h1>
    <br/><br/>
    
    <?php
		echo $_SERVER['HTTP_USER_AGENT'];
		phpinfo();
	?>
  </body>
</html>
