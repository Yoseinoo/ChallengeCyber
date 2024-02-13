<?php

$output = shell_exec("cat /home/data/sensitive.txt");
var_dump($output);