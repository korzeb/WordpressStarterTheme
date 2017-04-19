<?php

if(!defined('THEME_DIR')){
    define('THEME_DIR', get_theme_root().'/'.get_template().'/' );
}

if(!defined('THEME_URL')){
define('THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/' );
}

?>