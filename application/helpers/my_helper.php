<?php
defined('BASEPATH') OR exit('No direct script access allowed ');

/**
*@if(login('session', 'read'))
**/
  function is_login(){ 
      if(isset($_SESSION['login'])){
          return TRUE;
      } else {
         redirect(base_url().'cPanel/login/', 'refresh');
      }
  }

?>
