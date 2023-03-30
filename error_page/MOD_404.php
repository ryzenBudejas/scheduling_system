<?php 

$page_title =isset($mod_msg['title']) ? $mod_msg['title']: 'PAGE NOT FOUND';
$page_sub =isset($mod_msg['subtitle']) ? $mod_msg['subtitle']: 'The page you are looking for might have been removed had its name changed or is temporarily unavailable.';
$server_error = isset($mod_msg['server_no']) ? $mod_msg['server_no']: '404';
$js_code = isset($mod_msg['js']) ? $mod_msg['js']: '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="City College of Calamba">
    <meta name="author" content="">
	<title>e-GURO</title>
	<link rel="shortcut icon" href="../images/favicon.png">
<style>
* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
  background:#ffa200;
  color:white;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 460px;
  width: 100%;
  text-align: center;
  line-height: 1.4;
}

.notfound .notfound-404 {
  position: relative;
  width: 180px;
  height: 180px;
  margin: 0px auto 50px;
}

.notfound .notfound-404>div:first-child {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: #ffa200;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  border: 5px solid white;
  border-radius: 5px;
}

.notfound .notfound-404>div:first-child:before {
  content: '';
  position: absolute;
  left: -5px;
  right: -5px;
  bottom: -5px;
  top: -5px;
  -webkit-box-shadow: 0px 0px 0px 5px rgba(0, 0, 0, 0.1) inset;
  box-shadow: 0px 0px 0px 5px rgba(0, 0, 0, 0.1) inset;
  border-radius: 5px;
}

.notfound .notfound-404 h1 {
  font-family: 'Cabin', sans-serif;
  color: white;
  font-weight: 700;
  margin: 0;
  font-size: 90px;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  left: 50%;
  text-align: center;
  height: 40px;
  line-height: 40px;
}

.notfound h2 {
  font-family: 'Cabin', sans-serif;
  font-size: 33px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 7px;
}

.notfound p {
  font-family: 'Cabin', sans-serif;
  font-size: 16px;
  color: white;
  font-weight: 400;
}



.notfound a:hover {
  background-color: #2c2c2c;
}

  
</style>
</head>
<body>
<div id="notfound">
<div class="notfound">
<div class="notfound-404">
<div class="box"></div>
<h1><?php echo $server_error;?></h1>
</div>
<h2><?php echo $page_title;?></h2>
<p><?php echo $page_sub;?></p>
</div>
</div>
</body>
<script>
<?php echo $js_code; ?>

</script>
</html>
