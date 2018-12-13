<?php

$script = $_POST['cmd'];

$cmd = "sudo /usr/bin/python $script.py";
system($cmd);
