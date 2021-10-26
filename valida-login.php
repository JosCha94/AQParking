<?php
    if(isset($_POST['btn_login'])){
       if(strlen($password)<2){
           echo"<p class='error'>*La contraseña es muy corta</p>";
       }
    }