<?php

return [
    // General App Configuration
    'app_name' => 'LPHP Framework',   // The name of your application
    'env' => 'development',           // Environment setting: 'development', 'production'
    'debug' => true,                  // Whether to display errors (set to false for production)
    'url' => 'http://localhost',      // Base URL for your app

    // Timezone (set it based on your region)
    'timezone' => 'UTC',              // Default timezone

    // Database Configuration (for later use in database connection)
    'db' => [
        'host' => 'localhost',         // Database server host (e.g., 'localhost')
        'port' => 3306,                // Database port (default for MySQL: 3306)
        'database' => 'lphp',          // The name of your database
        'username' => 'root',          // Database username
        'password' => '',              // Database password
        'charset' => 'utf8mb4',        // Character set (recommend utf8mb4 for MySQL)
        'collation' => 'utf8mb4_unicode_ci',  // Collation
    ],

    // Mail Configuration (for sending emails)
    'mail' => [
        'smtp_host' => 'smtp.mailtrap.io', // SMTP server for sending emails
        'smtp_port' => 587,                // SMTP port
        'smtp_user' => 'your_smtp_username', // SMTP username
        'smtp_pass' => 'your_smtp_password', // SMTP password
        'from_email' => 'no-reply@lphp.com', // "From" email address for outgoing mails
        'from_name' => 'LPHP Framework',    // "From" name for outgoing mails
    ],

    // File Storage Configuration (where to store uploaded files)
    'storage' => [
        'path' => __DIR__ . '/../storage',   // Storage directory path
        'url' => '/storage/',                 // URL to access stored files
    ],

    // Logging Configuration
    'logging' => [
        'log_level' => 'debug',  // Can be 'debug', 'info', 'warning', 'error', 'critical'
        'log_file' => __DIR__ . '/../storage/logs/app.log', // Path to the log file
    ],

    // Cache Configuration (if using caching)
    'cache' => [
        'enabled' => true,          // Enable or disable caching
        'cache_dir' => __DIR__ . '/../storage/cache', // Cache directory
    ],

    // Session Configuration
    'session' => [
        'driver' => 'file',             // Session storage driver (file, database, etc.)
        'lifetime' => 120,              // Session lifetime in minutes
        'secure' => false,              // Whether the session cookie should be secure
        'same_site' => 'Lax',           // SameSite cookie policy: 'Strict', 'Lax', 'None'
    ],

    // API Keys (if your app integrates with third-party APIs)
    'api_keys' => [
        'google_maps' => 'your-google-maps-api-key',
        'stripe' => 'your-stripe-api-key',
    ],
];
