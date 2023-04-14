 <?php
    function init_php_session() : bool {
  if (!$_SESSION[id]){


    session_start();
    session_regenerate_id();
    return true;

  }

   return false
    }    
      function is_logged() : bool {
        return true
      }
        
 ?>