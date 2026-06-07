<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;



/**
 * Singleton Pattern Example in PHP
 *
 * Goal:
 * Ensure that only ONE object of a class can exist.
 *
 * Common uses:
 * - Database connections
 * - Logger classes
 * - Configuration managers
 * - Cache handlers
 */

class DatabaseConnection
{
    /**
     * This static property stores the SINGLE instance
     * of the class.
     *
     * static means it belongs to the class itself,
     * not to individual objects.
     */
    private static ?DatabaseConnection $instance = null;

    /**
     * Example property.
     */
    private string $connectionName;

    /**
     * Constructor is PRIVATE.
     *
     * This prevents:
     * new DatabaseConnection()
     *
     * from being called outside the class.
     */
    private function __construct()
    {
        $this->connectionName = "Main Database Connection";

        echo "Database connection created.<br>";
    }

    /**
     * Prevent cloning.
     *
     * Without this, someone could do:
     * clone $object;
     *
     * which would create another instance.
     */
    private function __clone()
    {
    }

    /**
     * Prevent unserializing.
     *
     * Without this, another instance could be created
     * through serialization tricks.
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    /**
     * Main access method.
     *
     * This method:
     * 1. Checks if instance already exists
     * 2. Creates it if not
     * 3. Returns the same instance every time
     */
    public static function getInstance(): DatabaseConnection
    {
        // If instance does not exist yet
        if (self::$instance === null) {
            // Create the SINGLE object
            self::$instance = new self();
            var_dump(self::$instance);
            var_dump(DatabaseConnection::$instance);
            die();
        }

        // Return the same object every time
        return self::$instance;
    }

    /**
     * Example method.
     */
    public function connect(): void
    {
        echo "Using: {$this->connectionName}<br>";
    }
}

// Contructor private so the below is not possible 

// $db = new DatabaseConnection;


/**
 * Usage
 */

// Get first instance
$db1 = DatabaseConnection::getInstance();

$db1->connect();

echo "<hr>";

// Get second instance
$db2 = DatabaseConnection::getInstance();

$db2->connect();

echo "<hr>";

/**
 * Compare both variables
 *
 * Since Singleton returns the SAME object,
 * this will be TRUE.
 */
if ($db1 === $db2) {
    echo "Both variables contain the SAME instance.";
} else {
    echo "Different instances.";
}