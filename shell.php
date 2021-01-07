<?php
    $command = escapeshellcmd('C:\Users\MLADEN\AppData\Local\Programs\Python\Python37\python C:\wamp\www\TranslateFromImage\projekat.py');
    $output = shell_exec($command);
    echo $output;
?>