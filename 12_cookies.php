<?php
/*----- Cookies ------*>

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again
*/

// Set cookie
setcookie('name', 'Amanda', time() + 86400 * 30);

if(isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

//unset cookie
setcookie('name', '', time() - 86400);
