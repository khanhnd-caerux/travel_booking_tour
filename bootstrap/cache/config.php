<?php return array (
  'app' =>
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'version' => '1.0.0',
    'debug' => true,
    'url' => 'http://travel.local.com',
    'asset_url' => NULL,
    'force_ssl' => false,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:84RcLplWTS3QHl8A+iqnngrWXud4amW+arOGS9rGJNo=',
    'cipher' => 'AES-256-CBC',
    'providers' =>
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'Cms\\CmsServiceProvider',
      27 => 'Spatie\\Permission\\PermissionServiceProvider',
    ),
    'aliases' =>
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'auth' =>
  array (
    'defaults' =>
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' =>
    array (
      'web' =>
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
    ),
    'providers' =>
    array (
      'users' =>
      array (
        'driver' => 'eloquent',
        'model' => 'Cms\\Modules\\Core\\Models\\User',
      ),
    ),
    'passwords' =>
    array (
      'users' =>
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' =>
  array (
    'default' => 'log',
    'connections' =>
    array (
      'pusher' =>
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' =>
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' =>
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' =>
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' =>
      array (
        'driver' => 'log',
      ),
      'null' =>
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' =>
  array (
    'default' => 'array',
    'stores' =>
    array (
      'apc' =>
      array (
        'driver' => 'apc',
      ),
      'array' =>
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' =>
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' =>
      array (
        'driver' => 'file',
        'path' => '/home/projects/travel_booking_tour/storage/framework/cache/data',
      ),
      'memcached' =>
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' =>
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' =>
        array (
        ),
        'servers' =>
        array (
          0 =>
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' =>
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' =>
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' =>
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cors' =>
  array (
    'paths' =>
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' =>
    array (
      0 => '*',
    ),
    'allowed_origins' =>
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' =>
    array (
    ),
    'allowed_headers' =>
    array (
      0 => '*',
    ),
    'exposed_headers' =>
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' =>
  array (
    'default' => 'mysql',
    'connections' =>
    array (
      'sqlite' =>
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'travel_booking',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' =>
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'travel_booking',
        'username' => 'root',
        'password' => '12345',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' =>
        array (
        ),
      ),
      'pgsql' =>
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'travel_booking',
        'username' => 'root',
        'password' => '12345',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' =>
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'travel_booking',
        'username' => 'root',
        'password' => '12345',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' =>
    array (
      'client' => 'phpredis',
      'options' =>
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' =>
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' =>
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' =>
  array (
    'default' => 'local',
    'disks' =>
    array (
      'local' =>
      array (
        'driver' => 'local',
        'root' => '/home/projects/travel_booking_tour/storage/app',
      ),
      'public' =>
      array (
        'driver' => 'local',
        'root' => '/home/projects/travel_booking_tour/public/storage',
        'url' => 'http://travel.local.com',
        'visibility' => 'public',
      ),
      's3' =>
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
      ),
    ),
    'links' =>
    array (
      '/home/projects/travel_booking_tour/public/storage' => '/home/projects/travel_booking_tour/storage/app/public',
    ),
  ),
  'hashing' =>
  array (
    'driver' => 'bcrypt',
    'bcrypt' =>
    array (
      'rounds' => 10,
    ),
    'argon' =>
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' =>
  array (
    'default' => 'stack',
    'deprecations' => NULL,
    'channels' =>
    array (
      'stack' =>
      array (
        'driver' => 'stack',
        'channels' =>
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' =>
      array (
        'driver' => 'single',
        'path' => '/home/projects/travel_booking_tour/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' =>
      array (
        'driver' => 'daily',
        'path' => '/home/projects/travel_booking_tour/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' =>
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' =>
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' =>
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' =>
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' =>
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' =>
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' =>
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' =>
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' =>
      array (
        'path' => '/home/projects/travel_booking_tour/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' =>
  array (
    'default' => 'smtp',
    'mailers' =>
    array (
      'smtp' =>
      array (
        'transport' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => '587',
        'encryption' => 'tls',
        'username' => 'linenbackpacker@gmail.com',
        'password' => 'irjmiabiuunzloct',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' =>
      array (
        'transport' => 'ses',
      ),
      'mailgun' =>
      array (
        'transport' => 'mailgun',
      ),
      'postmark' =>
      array (
        'transport' => 'postmark',
      ),
      'sendmail' =>
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' =>
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' =>
      array (
        'transport' => 'array',
      ),
      'failover' =>
      array (
        'transport' => 'failover',
        'mailers' =>
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' =>
    array (
      'address' => 'linenbackpacker@gmail.com',
      'name' => 'Laravel',
    ),
    'markdown' =>
    array (
      'theme' => 'default',
      'paths' =>
      array (
        0 => '/home/projects/travel_booking_tour/resources/views/vendor/mail',
      ),
    ),
  ),
  'permission' =>
  array (
    'models' =>
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' =>
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' =>
    array (
      'role_pivot_key' => NULL,
      'permission_pivot_key' => NULL,
      'model_morph_key' => 'model_id',
      'team_foreign_key' => 'team_id',
    ),
    'register_permission_check_method' => true,
    'teams' => false,
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' =>
    array (
      'expiration_time' =>
      DateInterval::__set_state(array(
         'y' => 0,
         'm' => 0,
         'd' => 0,
         'h' => 24,
         'i' => 0,
         's' => 0,
         'f' => 0.0,
         'weekday' => 0,
         'weekday_behavior' => 0,
         'first_last_day_of' => 0,
         'invert' => 0,
         'days' => false,
         'special_type' => 0,
         'special_amount' => 0,
         'have_weekday_relative' => 0,
         'have_special_relative' => 0,
      )),
      'key' => 'spatie.permission.cache',
      'store' => 'default',
    ),
  ),
  'queue' =>
  array (
    'default' => 'sync',
    'connections' =>
    array (
      'sync' =>
      array (
        'driver' => 'sync',
      ),
      'database' =>
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' =>
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' =>
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' =>
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' =>
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' =>
  array (
    'stateful' =>
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'travel.local.com',
    ),
    'guard' =>
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' =>
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' =>
  array (
    'mailgun' =>
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' =>
    array (
      'token' => NULL,
    ),
    'ses' =>
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' =>
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/projects/travel_booking_tour/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' =>
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' =>
  array (
    'paths' =>
    array (
      0 => '/home/projects/travel_booking_tour/resources/views',
    ),
    'compiled' => '/home/projects/travel_booking_tour/storage/framework/views',
  ),
  'flare' =>
  array (
    'key' => NULL,
    'reporting' =>
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' =>
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' =>
    array (
      0 => 'password',
    ),
  ),
  'ignition' =>
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' =>
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'categories' =>
  array (
    'categories' =>
    array (
      'tour' => 'Đặt Tour',
      'booking_car' => 'Cho thuê xe',
      'booking_ticket' => 'Đặt vé xe',
    ),
  ),
  'country' =>
  array (
    'countries' =>
    array (
      0 =>
      array (
        'code' => '+93',
        'country' => 'Afghanistan',
      ),
      1 =>
      array (
        'code' => '+355',
        'country' => 'Albania',
      ),
      2 =>
      array (
        'code' => '+213',
        'country' => 'Algeria',
      ),
      3 =>
      array (
        'code' => '+376',
        'country' => 'Andorra',
      ),
      4 =>
      array (
        'code' => '+244',
        'country' => 'Angola',
      ),
      5 =>
      array (
        'code' => '+1-268',
        'country' => 'Antigua and Barbuda',
      ),
      6 =>
      array (
        'code' => '+54',
        'country' => 'Argentina',
      ),
      7 =>
      array (
        'code' => '+374',
        'country' => 'Armenia',
      ),
      8 =>
      array (
        'code' => '+297',
        'country' => 'Aruba',
      ),
      9 =>
      array (
        'code' => '+61',
        'country' => 'Australia',
      ),
      10 =>
      array (
        'code' => '+43',
        'country' => 'Austria',
      ),
      11 =>
      array (
        'code' => '+994',
        'country' => 'Azerbaijan',
      ),
      12 =>
      array (
        'code' => '+1-242',
        'country' => 'Bahamas',
      ),
      13 =>
      array (
        'code' => '+973',
        'country' => 'Bahrain',
      ),
      14 =>
      array (
        'code' => '+880',
        'country' => 'Bangladesh',
      ),
      15 =>
      array (
        'code' => '+1-246',
        'country' => 'Barbados',
      ),
      16 =>
      array (
        'code' => '+375',
        'country' => 'Belarus',
      ),
      17 =>
      array (
        'code' => '+32',
        'country' => 'Belgium',
      ),
      18 =>
      array (
        'code' => '+501',
        'country' => 'Belize',
      ),
      19 =>
      array (
        'code' => '+229',
        'country' => 'Benin',
      ),
      20 =>
      array (
        'code' => '+1-441',
        'country' => 'Bermuda',
      ),
      21 =>
      array (
        'code' => '+975',
        'country' => 'Bhutan',
      ),
      22 =>
      array (
        'code' => '+591',
        'country' => 'Bolivia',
      ),
      23 =>
      array (
        'code' => '+387',
        'country' => 'Bosnia and Herzegovina',
      ),
      24 =>
      array (
        'code' => '+267',
        'country' => 'Botswana',
      ),
      25 =>
      array (
        'code' => '+55',
        'country' => 'Brazil',
      ),
      26 =>
      array (
        'code' => '+246',
        'country' => 'British Indian Ocean Territory',
      ),
      27 =>
      array (
        'code' => '+1-284',
        'country' => 'British Virgin Islands',
      ),
      28 =>
      array (
        'code' => '+673',
        'country' => 'Brunei',
      ),
      29 =>
      array (
        'code' => '+359',
        'country' => 'Bulgaria',
      ),
      30 =>
      array (
        'code' => '+226',
        'country' => 'Burkina Faso',
      ),
      31 =>
      array (
        'code' => '+257',
        'country' => 'Burundi',
      ),
      32 =>
      array (
        'code' => '+855',
        'country' => 'Cambodia',
      ),
      33 =>
      array (
        'code' => '+237',
        'country' => 'Cameroon',
      ),
      34 =>
      array (
        'code' => '+1',
        'country' => 'Canada',
      ),
      35 =>
      array (
        'code' => '+238',
        'country' => 'Cape Verde',
      ),
      36 =>
      array (
        'code' => '+1-345',
        'country' => 'Cayman Islands',
      ),
      37 =>
      array (
        'code' => '+236',
        'country' => 'Central African Republic',
      ),
      38 =>
      array (
        'code' => '+235',
        'country' => 'Chad',
      ),
      39 =>
      array (
        'code' => '+56',
        'country' => 'Chile',
      ),
      40 =>
      array (
        'code' => '+86',
        'country' => 'China',
      ),
      41 =>
      array (
        'code' => '+61',
        'country' => 'Christmas Island',
      ),
      42 =>
      array (
        'code' => '+61',
        'country' => 'Cocos Islands',
      ),
      43 =>
      array (
        'code' => '+57',
        'country' => 'Colombia',
      ),
      44 =>
      array (
        'code' => '+269',
        'country' => 'Comoros',
      ),
      45 =>
      array (
        'code' => '+682',
        'country' => 'Cook Islands',
      ),
      46 =>
      array (
        'code' => '+506',
        'country' => 'Costa Rica',
      ),
      47 =>
      array (
        'code' => '+385',
        'country' => 'Croatia',
      ),
      48 =>
      array (
        'code' => '+53',
        'country' => 'Cuba',
      ),
      49 =>
      array (
        'code' => '+599',
        'country' => 'Curacao',
      ),
      50 =>
      array (
        'code' => '+357',
        'country' => 'Cyprus',
      ),
      51 =>
      array (
        'code' => '+420',
        'country' => 'Czech Republic',
      ),
      52 =>
      array (
        'code' => '+243',
        'country' => 'Democratic Republic of the Congo',
      ),
      53 =>
      array (
        'code' => '+45',
        'country' => 'Denmark',
      ),
      54 =>
      array (
        'code' => '+253',
        'country' => 'Djibouti',
      ),
      55 =>
      array (
        'code' => '+1-767',
        'country' => 'Dominica',
      ),
      56 =>
      array (
        'code' => '+1-809',
        'country' => 'Dominican Republic',
      ),
      57 =>
      array (
        'code' => '+670',
        'country' => 'East Timor',
      ),
      58 =>
      array (
        'code' => '+593',
        'country' => 'Ecuador',
      ),
      59 =>
      array (
        'code' => '+20',
        'country' => 'Egypt',
      ),
      60 =>
      array (
        'code' => '+503',
        'country' => 'El Salvador',
      ),
      61 =>
      array (
        'code' => '+240',
        'country' => 'Equatorial Guinea',
      ),
      62 =>
      array (
        'code' => '+291',
        'country' => 'Eritrea',
      ),
      63 =>
      array (
        'code' => '+372',
        'country' => 'Estonia',
      ),
      64 =>
      array (
        'code' => '+251',
        'country' => 'Ethiopia',
      ),
      65 =>
      array (
        'code' => '+500',
        'country' => 'Falkland Islands',
      ),
      66 =>
      array (
        'code' => '+298',
        'country' => 'Faroe Islands',
      ),
      67 =>
      array (
        'code' => '+679',
        'country' => 'Fiji',
      ),
      68 =>
      array (
        'code' => '+358',
        'country' => 'Finland',
      ),
      69 =>
      array (
        'code' => '+33',
        'country' => 'France',
      ),
      70 =>
      array (
        'code' => '+689',
        'country' => 'French Polynesia',
      ),
      71 =>
      array (
        'code' => '+241',
        'country' => 'Gabon',
      ),
      72 =>
      array (
        'code' => '+220',
        'country' => 'Gambia',
      ),
      73 =>
      array (
        'code' => '+995',
        'country' => 'Georgia',
      ),
      74 =>
      array (
        'code' => '+49',
        'country' => 'Germany',
      ),
      75 =>
      array (
        'code' => '+233',
        'country' => 'Ghana',
      ),
      76 =>
      array (
        'code' => '+350',
        'country' => 'Gibraltar',
      ),
      77 =>
      array (
        'code' => '+30',
        'country' => 'Greece',
      ),
      78 =>
      array (
        'code' => '+299',
        'country' => 'Greenland',
      ),
      79 =>
      array (
        'code' => '+1-473',
        'country' => 'Grenada',
      ),
      80 =>
      array (
        'code' => '+1-671',
        'country' => 'Guam',
      ),
      81 =>
      array (
        'code' => '+502',
        'country' => 'Guatemala',
      ),
      82 =>
      array (
        'code' => '+224',
        'country' => 'Guinea',
      ),
      83 =>
      array (
        'code' => '+245',
        'country' => 'Guinea-Bissau',
      ),
      84 =>
      array (
        'code' => '+592',
        'country' => 'Guyana',
      ),
      85 =>
      array (
        'code' => '+509',
        'country' => 'Haiti',
      ),
      86 =>
      array (
        'code' => '+504',
        'country' => 'Honduras',
      ),
      87 =>
      array (
        'code' => '+852',
        'country' => 'Hong Kong',
      ),
      88 =>
      array (
        'code' => '+36',
        'country' => 'Hungary',
      ),
      89 =>
      array (
        'code' => '+354',
        'country' => 'Iceland',
      ),
      90 =>
      array (
        'code' => '+91',
        'country' => 'India',
      ),
      91 =>
      array (
        'code' => '+62',
        'country' => 'Indonesia',
      ),
      92 =>
      array (
        'code' => '+98',
        'country' => 'Iran',
      ),
      93 =>
      array (
        'code' => '+964',
        'country' => 'Iraq',
      ),
      94 =>
      array (
        'code' => '+353',
        'country' => 'Ireland',
      ),
      95 =>
      array (
        'code' => '+44-1624',
        'country' => 'Isle of Man',
      ),
      96 =>
      array (
        'code' => '+972',
        'country' => 'Israel',
      ),
      97 =>
      array (
        'code' => '+39',
        'country' => 'Italy',
      ),
      98 =>
      array (
        'code' => '+225',
        'country' => 'Ivory Coast',
      ),
      99 =>
      array (
        'code' => '+1-876',
        'country' => 'Jamaica',
      ),
      100 =>
      array (
        'code' => '+81',
        'country' => 'Japan',
      ),
      101 =>
      array (
        'code' => '+962',
        'country' => 'Jordan',
      ),
      102 =>
      array (
        'code' => '+7',
        'country' => 'Kazakhstan',
      ),
      103 =>
      array (
        'code' => '+254',
        'country' => 'Kenya',
      ),
      104 =>
      array (
        'code' => '+686',
        'country' => 'Kiribati',
      ),
      105 =>
      array (
        'code' => '+383',
        'country' => 'Kosovo',
      ),
      106 =>
      array (
        'code' => '+965',
        'country' => 'Kuwait',
      ),
      107 =>
      array (
        'code' => '+996',
        'country' => 'Kyrgyzstan',
      ),
      108 =>
      array (
        'code' => '+856',
        'country' => 'Laos',
      ),
      109 =>
      array (
        'code' => '+371',
        'country' => 'Latvia',
      ),
      110 =>
      array (
        'code' => '+961',
        'country' => 'Lebanon',
      ),
      111 =>
      array (
        'code' => '+266',
        'country' => 'Lesotho',
      ),
      112 =>
      array (
        'code' => '+231',
        'country' => 'Liberia',
      ),
      113 =>
      array (
        'code' => '+218',
        'country' => 'Libya',
      ),
      114 =>
      array (
        'code' => '+423',
        'country' => 'Liechtenstein',
      ),
      115 =>
      array (
        'code' => '+370',
        'country' => 'Lithuania',
      ),
      116 =>
      array (
        'code' => '+352',
        'country' => 'Luxembourg',
      ),
      117 =>
      array (
        'code' => '+853',
        'country' => 'Macau',
      ),
      118 =>
      array (
        'code' => '+389',
        'country' => 'Macedonia',
      ),
      119 =>
      array (
        'code' => '+261',
        'country' => 'Madagascar',
      ),
      120 =>
      array (
        'code' => '+265',
        'country' => 'Malawi',
      ),
      121 =>
      array (
        'code' => '+60',
        'country' => 'Malaysia',
      ),
      122 =>
      array (
        'code' => '+960',
        'country' => 'Maldives',
      ),
      123 =>
      array (
        'code' => '+223',
        'country' => 'Mali',
      ),
      124 =>
      array (
        'code' => '+356',
        'country' => 'Malta',
      ),
      125 =>
      array (
        'code' => '+692',
        'country' => 'Marshall Islands',
      ),
      126 =>
      array (
        'code' => '+222',
        'country' => 'Mauritania',
      ),
      127 =>
      array (
        'code' => '+230',
        'country' => 'Mauritius',
      ),
      128 =>
      array (
        'code' => '+262',
        'country' => 'Mayotte',
      ),
      129 =>
      array (
        'code' => '+52',
        'country' => 'Mexico',
      ),
      130 =>
      array (
        'code' => '+691',
        'country' => 'Micronesia',
      ),
      131 =>
      array (
        'code' => '+373',
        'country' => 'Moldova',
      ),
      132 =>
      array (
        'code' => '+377',
        'country' => 'Monaco',
      ),
      133 =>
      array (
        'code' => '+976',
        'country' => 'Mongolia',
      ),
      134 =>
      array (
        'code' => '+382',
        'country' => 'Montenegro',
      ),
      135 =>
      array (
        'code' => '+1-664',
        'country' => 'Montserrat',
      ),
      136 =>
      array (
        'code' => '+212',
        'country' => 'Morocco',
      ),
      137 =>
      array (
        'code' => '+258',
        'country' => 'Mozambique',
      ),
      138 =>
      array (
        'code' => '+95',
        'country' => 'Myanmar',
      ),
      139 =>
      array (
        'code' => '+264',
        'country' => 'Namibia',
      ),
      140 =>
      array (
        'code' => '+674',
        'country' => 'Nauru',
      ),
      141 =>
      array (
        'code' => '+977',
        'country' => 'Nepal',
      ),
      142 =>
      array (
        'code' => '+31',
        'country' => 'Netherlands',
      ),
      143 =>
      array (
        'code' => '+599',
        'country' => 'Netherlands Antilles',
      ),
      144 =>
      array (
        'code' => '+687',
        'country' => 'New Caledonia',
      ),
      145 =>
      array (
        'code' => '+64',
        'country' => 'New Zealand',
      ),
      146 =>
      array (
        'code' => '+505',
        'country' => 'Nicaragua',
      ),
      147 =>
      array (
        'code' => '+227',
        'country' => 'Niger',
      ),
      148 =>
      array (
        'code' => '+234',
        'country' => 'Nigeria',
      ),
      149 =>
      array (
        'code' => '+683',
        'country' => 'Niue',
      ),
      150 =>
      array (
        'code' => '+850',
        'country' => 'North Korea',
      ),
      151 =>
      array (
        'code' => '+1-670',
        'country' => 'Northern Mariana Islands',
      ),
      152 =>
      array (
        'code' => '+47',
        'country' => 'Norway',
      ),
      153 =>
      array (
        'code' => '+968',
        'country' => 'Oman',
      ),
      154 =>
      array (
        'code' => '+92',
        'country' => 'Pakistan',
      ),
      155 =>
      array (
        'code' => '+680',
        'country' => 'Palau',
      ),
      156 =>
      array (
        'code' => '+970',
        'country' => 'Palestine',
      ),
      157 =>
      array (
        'code' => '+507',
        'country' => 'Panama',
      ),
      158 =>
      array (
        'code' => '+675',
        'country' => 'Papua New Guinea',
      ),
      159 =>
      array (
        'code' => '+595',
        'country' => 'Paraguay',
      ),
      160 =>
      array (
        'code' => '+51',
        'country' => 'Peru',
      ),
      161 =>
      array (
        'code' => '+63',
        'country' => 'Philippines',
      ),
      162 =>
      array (
        'code' => '+64',
        'country' => 'Pitcairn',
      ),
      163 =>
      array (
        'code' => '+48',
        'country' => 'Poland',
      ),
      164 =>
      array (
        'code' => '+351',
        'country' => 'Portugal',
      ),
      165 =>
      array (
        'code' => '+1-787',
        'country' => 'Puerto Rico',
      ),
      166 =>
      array (
        'code' => '+974',
        'country' => 'Qatar',
      ),
      167 =>
      array (
        'code' => '+242',
        'country' => 'Republic of the Congo',
      ),
      168 =>
      array (
        'code' => '+40',
        'country' => 'Romania',
      ),
      169 =>
      array (
        'code' => '+7',
        'country' => 'Russia',
      ),
      170 =>
      array (
        'code' => '+250',
        'country' => 'Rwanda',
      ),
      171 =>
      array (
        'code' => '+590',
        'country' => 'Saint Barthelemy',
      ),
      172 =>
      array (
        'code' => '+290',
        'country' => 'Saint Helena',
      ),
      173 =>
      array (
        'code' => '+1-869',
        'country' => 'Saint Kitts and Nevis',
      ),
      174 =>
      array (
        'code' => '+1-758',
        'country' => 'Saint Lucia',
      ),
      175 =>
      array (
        'code' => '+590',
        'country' => 'Saint Martin',
      ),
      176 =>
      array (
        'code' => '+508',
        'country' => 'Saint Pierre and Miquelon',
      ),
      177 =>
      array (
        'code' => '+1-784',
        'country' => 'Saint Vincent and the Grenadines',
      ),
      178 =>
      array (
        'code' => '+685',
        'country' => 'Samoa',
      ),
      179 =>
      array (
        'code' => '+378',
        'country' => 'San Marino',
      ),
      180 =>
      array (
        'code' => '+239',
        'country' => 'Sao Tome and Principe',
      ),
      181 =>
      array (
        'code' => '+966',
        'country' => 'Saudi Arabia',
      ),
      182 =>
      array (
        'code' => '+221',
        'country' => 'Senegal',
      ),
      183 =>
      array (
        'code' => '+381',
        'country' => 'Serbia',
      ),
      184 =>
      array (
        'code' => '+248',
        'country' => 'Seychelles',
      ),
      185 =>
      array (
        'code' => '+232',
        'country' => 'Sierra Leone',
      ),
      186 =>
      array (
        'code' => '+65',
        'country' => 'Singapore',
      ),
      187 =>
      array (
        'code' => '+1-721',
        'country' => 'Sint Maarten',
      ),
      188 =>
      array (
        'code' => '+421',
        'country' => 'Slovakia',
      ),
      189 =>
      array (
        'code' => '+386',
        'country' => 'Slovenia',
      ),
      190 =>
      array (
        'code' => '+677',
        'country' => 'Solomon Islands',
      ),
      191 =>
      array (
        'code' => '+252',
        'country' => 'Somalia',
      ),
      192 =>
      array (
        'code' => '+27',
        'country' => 'South Africa',
      ),
      193 =>
      array (
        'code' => '+82',
        'country' => 'South Korea',
      ),
      194 =>
      array (
        'code' => '+211',
        'country' => 'South Sudan',
      ),
      195 =>
      array (
        'code' => '+34',
        'country' => 'Spain',
      ),
      196 =>
      array (
        'code' => '+94',
        'country' => 'Sri Lanka',
      ),
      197 =>
      array (
        'code' => '+249',
        'country' => 'Sudan',
      ),
      198 =>
      array (
        'code' => '+597',
        'country' => 'Suriname',
      ),
      199 =>
      array (
        'code' => '+47',
        'country' => 'Svalbard and Jan Mayen',
      ),
      200 =>
      array (
        'code' => '+268',
        'country' => 'Swaziland',
      ),
      201 =>
      array (
        'code' => '+46',
        'country' => 'Sweden',
      ),
      202 =>
      array (
        'code' => '+41',
        'country' => 'Switzerland',
      ),
      203 =>
      array (
        'code' => '+963',
        'country' => 'Syria',
      ),
      204 =>
      array (
        'code' => '+886',
        'country' => 'Taiwan',
      ),
      205 =>
      array (
        'code' => '+992',
        'country' => 'Tajikistan',
      ),
      206 =>
      array (
        'code' => '+255',
        'country' => 'Tanzania',
      ),
      207 =>
      array (
        'code' => '+66',
        'country' => 'Thailand',
      ),
      208 =>
      array (
        'code' => '+228',
        'country' => 'Togo',
      ),
      209 =>
      array (
        'code' => '+690',
        'country' => 'Tokelau',
      ),
      210 =>
      array (
        'code' => '+676',
        'country' => 'Tonga',
      ),
      211 =>
      array (
        'code' => '+1-868',
        'country' => 'Trinidad and Tobago',
      ),
      212 =>
      array (
        'code' => '+216',
        'country' => 'Tunisia',
      ),
      213 =>
      array (
        'code' => '+90',
        'country' => 'Turkey',
      ),
      214 =>
      array (
        'code' => '+993',
        'country' => 'Turkmenistan',
      ),
      215 =>
      array (
        'code' => '+1-649',
        'country' => 'Turks and Caicos Islands',
      ),
      216 =>
      array (
        'code' => '+688',
        'country' => 'Tuvalu',
      ),
      217 =>
      array (
        'code' => '+1-340',
        'country' => 'U.S. Virgin Islands',
      ),
      218 =>
      array (
        'code' => '+256',
        'country' => 'Uganda',
      ),
      219 =>
      array (
        'code' => '+380',
        'country' => 'Ukraine',
      ),
      220 =>
      array (
        'code' => '+971',
        'country' => 'United Arab Emirates',
      ),
      221 =>
      array (
        'code' => '+44',
        'country' => 'United Kingdom',
      ),
      222 =>
      array (
        'code' => '+1',
        'country' => 'United States',
      ),
      223 =>
      array (
        'code' => '+598',
        'country' => 'Uruguay',
      ),
      224 =>
      array (
        'code' => '+998',
        'country' => 'Uzbekistan',
      ),
      225 =>
      array (
        'code' => '+678',
        'country' => 'Vanuatu',
      ),
      226 =>
      array (
        'code' => '+379',
        'country' => 'Vatican',
      ),
      227 =>
      array (
        'code' => '+58',
        'country' => 'Venezuela',
      ),
      228 =>
      array (
        'code' => '+84',
        'country' => 'Vietnam',
      ),
      229 =>
      array (
        'code' => '+681',
        'country' => 'Wallis and Futuna',
      ),
      230 =>
      array (
        'code' => '+212',
        'country' => 'Western Sahara',
      ),
      231 =>
      array (
        'code' => '+967',
        'country' => 'Yemen',
      ),
      232 =>
      array (
        'code' => '+260',
        'country' => 'Zambia',
      ),
      233 =>
      array (
        'code' => '+263',
        'country' => 'Zimbabwe',
      ),
    ),
  ),
  'location' =>
  array (
    'locations' =>
    array (
      1 => 'HA LONG',
      2 => 'SAPA',
      3 => 'HA NOI',
      4 => 'NINH BINH',
      5 => 'CAT BA',
    ),
  ),
  'settings' =>
  array (
    'settings' =>
    array (
      'ten-web-chinh' => 'Tên Web Chính',
      'ten-web-phu' => 'Tên Web Phụ',
      'hotline' => 'Hotline',
      'du-lich' => 'Du lịch',
      'tu-thien' => 'Từ Thiện',
      'trai-nghiem' => 'Trải nghiệm',
      'nam-kinh-nghiem-to-chuc-tour' => 'Năm kinh nghiệm tổ chức tour',
      'top-20-doanh-nghiep-du-lich' => 'Top 20 doanh nghiệp du lịch',
      'top-tour-ha-giang' => 'Top Tour Hà Giang',
      'khach-hang-hai-long' => 'Khách hàng hài lòng',
      'van-phong' => 'Văn Phòng',
      'email' => 'Email',
      'number' => 'Số người từ thiện',
      'total-money' => 'Tổng tiền từ thiện',
      'count-from' => 'Số bắt đầu',
    ),
  ),
  'type' =>
  array (
    'moto_types' =>
    array (
      1 => 'Ride by yourself',
      2 => 'Seat behind your friend',
      3 => 'Easyrider',
    ),
  ),
  'tinker' =>
  array (
    'commands' =>
    array (
    ),
    'alias' =>
    array (
    ),
    'dont_alias' =>
    array (
      0 => 'App\\Nova',
    ),
  ),
);
