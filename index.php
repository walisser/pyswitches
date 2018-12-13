<?php

$output = '';
if (isset($_POST['cmd']))
{
    $script = $_POST['cmd'];

    $p = popen("sudo /usr/bin/python $script.py", "r");
    $output = fread($p, 1024);
    pclose($p); 
}

$state = 'Failed to get power state';

$p = popen("sudo /usr/bin/python power-led.py", "r");
if ($p)
{
    $state = fread($p, 1024);
    pclose($p);
}


?><html>

<head>
<meta http-equiv="refresh" content="10; url=/" />
<title>Pi Switches</title>
<style type="text/css">
body {
    font-size: 2em;
}

input {
    font-size: 2em;
}
</style>
</head>
<body>
<h1>Pi Switches v1.0</h1>

<h2><?php echo $state ?></h2>
<h2><a href="/">Refresh</a></h2>

<p><?php echo $output ?></p>

<form method="POST" action="">
<input type="submit" name="cmd" value="reset" /><br /><br />
<input type="submit" name="cmd" value="power" /><br /><br />
<input type="submit" name="cmd" value="power-hold" /> 
</form>

</body></html>
