<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $filename = "./InFile.txt";
        $file = fopen($filename, 'r');
        //$filetext = file_get_contents($filename);
        if($file == false)
        {
           echo ("Error opening the file :$filename");
            exit();
        }
        
        $filesize = filesize($filename);
        $filetext = fread($file, $filesize);
        
        fclose($file);
        
        echo("File size : $filesize bytes");
        echo("<pre>$filetext<pre>");        
        
        /*echo "$str1 $str2";
        echo "$str1 $str2"." and ".$_SERVER["HTTP_USER_AGENT"];
        
        foreach ($_SERVER as $key=>$value)
        {
            echo $key."=".$value;
            echo "<br><br>";
        }*/
        ?>
    </body>
</html>

