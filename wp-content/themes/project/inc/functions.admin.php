<?php
 function searchInArray($array, $value){
     $result = stripos(json_encode($array), $value);
     if($result !== false){
         return true;
     }else{
         return false;
     }
 };
?>