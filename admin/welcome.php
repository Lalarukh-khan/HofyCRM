<?php
function welcome(){
 
 if(date("H") < 12){

   return "Good Evening";

 }elseif(date("H") > 11 && date("H") < 18){

   return "Good Afternoon";

 }elseif(date("H") > 17){

   return "Good Morning";

 }

} 
?>