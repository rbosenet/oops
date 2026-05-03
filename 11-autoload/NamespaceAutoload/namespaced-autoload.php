<?php

use MySql\subNameSpace\Connection;

/**
 * Example of a custom autoloader.
 * Converts a fully qualified class name (namespace\ClassName)
 * into a file path and includes the file if it exists.
 */
// $simpleAutoload = function (string $classname) {
//     // Replace namespace separators "\" with directory separators "/"
//     $classname = str_replace('\\', DIRECTORY_SEPARATOR, $classname);

//     // Include the corresponding file if it exists
//     if (file_exists("{$classname}.php")) {
//         require_once "{$classname}.php";
//     }
// };

/**
 * Register PHP's default SPL autoloader.
 *
 * If no custom callback is provided, PHP uses its internal autoloading mechanism.
 * It attempts to load classes by mapping namespaces to directory paths.
 *
 * Example:
 *   MySql\subNameSpace\Connection
 *   → MySql/subNameSpace/Connection.php
 *
 * This behavior is similar to the custom autoloader defined above.
 */
spl_autoload_register();

// Create an instance of the Connection class
$mysql = new Connection();

// Call the connect method and output the result
echo $mysql->connect();

?>
