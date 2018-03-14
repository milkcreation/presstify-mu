<?php
/**
 * @name presstify-mu-plugins-installer
 * @description Chargement automatique des mu-plugins Wordress
 * @see https://codex.wordpress.org/Must_Use_Plugins
 *
 * ex.: /presstify-mu/presstify-mu.php
 */

$dirs = glob(dirname(__FILE__) . '/*' , GLOB_ONLYDIR);

foreach($dirs as $dir) :
    if(file_exists($dir . DIRECTORY_SEPARATOR . basename($dir) . ".php")) :
        require($dir . DIRECTORY_SEPARATOR . basename($dir) . ".php");
    endif;
endforeach;
