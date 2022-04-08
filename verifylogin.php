<?php
function loginValidInput($username,$password){
    if($username=="admin" || $password== "admin"){
        return true;
    }else{
        return false;
    }
  }

?>