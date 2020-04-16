<?php

  $password = $_GET['password'];
  echo $password;
  if ($password == 'Boolean') {
    echo "<h1 style='color:green;'> PUOI ACCEDERE </h1>";
  } else {
    echo "<h1 style='color:red;'> NON PUOI ACCEDERE </h1>";
  };

 ?>
