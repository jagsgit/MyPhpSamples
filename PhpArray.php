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
        $months = array(
            "days30" => array("April", "June", "September","November"),
            "days31" => array("January","March","May","July","August","December"),
            "days28" => array("February"),
        );
        
                
        foreach($months as $ki => $val){
            echo "<br>";
            if ($ki == "days30")
            {
                 echo "Months have days 30 are : ";  
                 foreach ($months['days30'] as $monthlist30=>$days30){
                 echo $days30.", ";   
                 }
            }
            if ($ki == "days31")
            {
                 echo "Months have days 31 are : ";  
                 foreach ($months['days31'] as $monthlist31=>$days31){
                 echo $days31.", ";   
                 }
            }
            if ($ki == "days28")
            {
                 echo "Months have days 28 are : ";  
                 foreach ($months['days28'] as $monthlist28=>$days28){
                 echo $days28.", ";   
                 }
            }
            
            }
            //echo $val."<br>";
            
        
        
        
        /*
        foreach ($months as $monthlist1=>$days){
            //echo "Months have days 30 = ". $monthlist."<br>";
                //echo $days ."<br>";
           foreach($days as $key => $value ){
                if($key == "days30"){
                    echo "Months have days 30 = <br>"; 
                    echo $value;
                }
                
           }
        }
      foreach ($months as $monthlist2){
            //echo "Months have days 30 = ". $monthlist."<br>";
                //echo $days ."<br>";
           foreach($months as $key => $value ){
                if($key == "days31"){
                    echo "Months have days 31 = <br>"; 
                    echo $key."<br>";
                }
                
           }
        }
        
        foreach ($months as $monthlist3){
            //echo "Months have days 30 = ". $monthlist."<br>";
                //echo $days ."<br>";
           foreach($months as $key => $value ){
                if($key == "days28"){
                    echo "Months have days 28 = <br>"; 
                    echo $key."<br>";
                }
                
           }
        }
        
        print_r(array_keys($months));
        */
        ?>
    </body>
</html>

