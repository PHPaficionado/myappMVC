<?php

define('DEBUG', true);

//Database parameters
define('DB_HOST', '127.0.0.1'); // database host ***use IP address to avoid DNS lookup
define('DB_NAME', 'myapp');
define('DB_USER', 'root');
define('DB_PASSWORD', '');



define('DEFAULT_CONTROLLER', 'Home'); // default controller if there isn't one defined in the url
define('DEFAULT_LAYOUT', 'default'); // if no layout is set in the controller use this alyout.

define('PROOT', '/myappMvc/'); // set this to '/' for a live server. PROOT short for project root

define('SITE_TITLE', 'Mario MVC Framework'); // This will be used if no site title is set

define('CURRENT_USER_SESSION_NAME', 'sksiijIaks8kksi833skisk'); // session name for logged in user
define('REMEMBER_ME_COOKIE_NAME', 'sksi21EDcdks8kksi833skisk'); // cookie name for logged in user remember me
define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); // time in seconds for remember me cookie to live(30 days)

define('ACCESS_RESTRICTED', 'Restricted'); // controller name for the restricted redirect
