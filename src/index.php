<?php
    echo "Hello World!";
    echo "Localhost says hi!";
    $host=gethostbyname('db');
    echo $host;
    $uname="root";
    $pas="swarna99@GB";
    $link = mysqli_connect($host, $uname, $pas) or die ("cannot connect");
    
    echo '------MySQL connected successfully------'
?>