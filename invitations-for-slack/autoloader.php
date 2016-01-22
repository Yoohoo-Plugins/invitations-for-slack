<?php

/**
 * Custom autoloader for plugin classes
 *
 * @param $classname
 */
function autoload_function( $classname )
{
    $class = str_replace( '\\', DIRECTORY_SEPARATOR, str_replace( '_', DIRECTORY_SEPARATOR, strtolower($classname) ) );
    $filePath = SlackInviter::$dir . str_replace( 'slackinviter', SlackInviter::$class_path, $class ) . '.php';

    if(file_exists($filePath))
    {
        require_once $filePath;
    }
}

spl_autoload_register('autoload_function');