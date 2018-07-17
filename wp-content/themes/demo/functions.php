<?php

//Check users' WordPress version. 
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')){
    die('Your WordPress is so old. Please update to use this theme.');
}
?>