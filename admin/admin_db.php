<?php
    SESSION_START();
    $mail=$_REQUEST['em'];
    $pass=$_REQUEST['ps'];
    $mail2="kevalvavaliya@gmail.com";
    $pass2="2910";
         if($mail2==$mail && $pass2==$pass)
         {
              $_SESSION['admin']=$mail;
              header('location:choice.php');
         }
         else{
              header('location:index.php?er=1');
          
         }
?>