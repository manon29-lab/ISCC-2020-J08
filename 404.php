<?php
  function redirectionErreur404()
  {
    header('HTTP/1.0 404 Not Found');
    exit;
  }
  
  if(!file_exists('/pages/mapage.html'))
  {
    redirectionErreur404();
  }
?>