Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs
$ composer create-project --prefer-dist laravel/laravel BillBooks
Installing laravel/laravel (v5.5.22)
  - Installing laravel/laravel (v5.5.22) Downloading: 100%
Created project in BillBooks
> @php -r "file_exists('.env') || copy('.env.example', '.env');"
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 69 installs, 0 updates, 0 removals
  - Installing hamcrest/hamcrest-php (v2.0.0) Downloading: 100%
  - Installing mockery/mockery (1.0) Downloading: 100%
  - Installing vlucas/phpdotenv (v2.4.0) Loading from cache
  - Installing symfony/css-selector (v3.4.0) Downloading: 100%
  - Installing tijsverkoyen/css-to-inline-styles (2.2.0) Loading from cache
  - Installing symfony/polyfill-mbstring (v1.6.0) Loading from cache
  - Installing symfony/var-dumper (v3.4.0) Downloading: 100%
  - Installing symfony/routing (v3.4.0) Downloading: 100%
  - Installing symfony/process (v3.4.0) Downloading: 100%
  - Installing paragonie/random_compat (v2.0.11) Loading from cache
  - Installing symfony/polyfill-php70 (v1.6.0) Downloading: 100%
  - Installing symfony/http-foundation (v3.4.0) Downloading: 100%
  - Installing symfony/event-dispatcher (v3.4.0) Downloading: 100%
  - Installing psr/log (1.0.2) Loading from cache
  - Installing symfony/debug (v3.4.0) Downloading: 100%
  - Installing symfony/http-kernel (v3.4.0) Downloading: 100%
  - Installing symfony/finder (v3.4.0) Downloading: 100%
  - Installing symfony/console (v3.4.0) Downloading: 100%
  - Installing doctrine/lexer (v1.0.1) Downloading: 100%
  - Installing egulias/email-validator (2.1.3) Loading from cache
  - Installing swiftmailer/swiftmailer (v6.0.2) Loading from cache
  - Installing ramsey/uuid (3.7.1) Loading from cache
  - Installing psr/simple-cache (1.0.0) Loading from cache
  - Installing psr/container (1.0.0) Loading from cache
  - Installing symfony/translation (v3.4.0) Downloading: 100%
  - Installing nesbot/carbon (1.22.1) Loading from cache
  - Installing mtdowling/cron-expression (v1.2.1) Loading from cache
  - Installing monolog/monolog (1.23.0) Loading from cache
  - Installing league/flysystem (1.0.41) Loading from cache
  - Installing erusev/parsedown (1.6.4) Loading from cache
  - Installing doctrine/inflector (v1.2.0) Loading from cache
  - Installing laravel/framework (v5.5.22) Downloading: 100%
  - Installing fideloper/proxy (3.3.4) Loading from cache
  - Installing jakub-onderka/php-console-color (0.1) Loading from cache
  - Installing jakub-onderka/php-console-highlighter (v0.3.2) Loading from cache
  - Installing dnoegel/php-xdg-base-dir (0.1) Loading from cache
  - Installing nikic/php-parser (v3.1.2) Loading from cache
  - Installing psy/psysh (v0.8.15) Loading from cache
  - Installing laravel/tinker (v1.0.2) Loading from cache
  - Installing filp/whoops (2.1.14) Downloading: 100%
  - Installing fzaninotto/faker (v1.7.1) Loading from cache
  - Installing sebastian/version (2.0.1) Loading from cache
  - Installing sebastian/resource-operations (1.0.0) Loading from cache
  - Installing sebastian/recursion-context (3.0.0) Loading from cache
  - Installing sebastian/object-reflector (1.1.1) Loading from cache
  - Installing sebastian/object-enumerator (3.0.3) Loading from cache
  - Installing sebastian/global-state (2.0.0) Loading from cache
  - Installing sebastian/exporter (3.1.0) Loading from cache
  - Installing sebastian/environment (3.1.0) Loading from cache
  - Installing sebastian/diff (2.0.1) Loading from cache
  - Installing sebastian/comparator (2.1.0) Loading from cache
  - Installing doctrine/instantiator (1.1.0) Loading from cache
  - Installing phpunit/php-text-template (1.2.1) Loading from cache
  - Installing phpunit/phpunit-mock-objects (5.0.0) Downloading: 100%
  - Installing phpunit/php-timer (1.0.9) Downloading: 100%
  - Installing phpunit/php-file-iterator (1.4.5) Downloading: 100%
  - Installing theseer/tokenizer (1.1.0) Loading from cache
  - Installing sebastian/code-unit-reverse-lookup (1.0.1) Downloading: 100%                                                           
  - Installing phpunit/php-token-stream (2.0.2) Downloading: 100%
  - Installing phpunit/php-code-coverage (5.2.4) Downloading: 100%
  - Installing webmozart/assert (1.2.0) Loading from cache
  - Installing phpdocumentor/reflection-common (1.0.1) Loading from cache
  - Installing phpdocumentor/type-resolver (0.4.0) Loading from cache
  - Installing phpdocumentor/reflection-docblock (4.2.0) Downloading: 100%
  - Installing phpspec/prophecy (1.7.3) Downloading: 100%
  - Installing phar-io/version (1.0.1) Loading from cache
  - Installing phar-io/manifest (1.0.1) Loading from cache
  - Installing myclabs/deep-copy (1.7.0) Loading from cache
  - Installing phpunit/phpunit (6.5.0) Downloading: 100%
symfony/var-dumper suggests installing ext-intl (To show region name in time zone dump)
symfony/var-dumper suggests installing ext-symfony_debug ()
symfony/routing suggests installing doctrine/annotations (For using the annotation loader)
symfony/routing suggests installing symfony/config (For using the all-in-one router or any loader)
symfony/routing suggests installing symfony/dependency-injection (For loading routes from a service)
symfony/routing suggests installing symfony/expression-language (For using expression matching)
symfony/routing suggests installing symfony/yaml (For using the YAML loader)
paragonie/random_compat suggests installing ext-libsodium (Provides a modern crypto API that can be used to generate random bytes.)
symfony/event-dispatcher suggests installing symfony/dependency-injection ()
symfony/http-kernel suggests installing symfony/browser-kit ()
symfony/http-kernel suggests installing symfony/config ()
symfony/http-kernel suggests installing symfony/dependency-injection ()
symfony/console suggests installing symfony/lock ()
egulias/email-validator suggests installing ext-intl (PHP Internationalization Libraries are required to use the SpoofChecking validation)
ramsey/uuid suggests installing ircmaxell/random-lib (Provides RandomLib for use with the RandomLibAdapter)
ramsey/uuid suggests installing ext-libsodium (Provides the PECL libsodium extension for use with the SodiumRandomGenerator)
ramsey/uuid suggests installing ext-uuid (Provides the PECL UUID extension for use with the PeclUuidTimeGenerator and PeclUuidRandomGenerator)
ramsey/uuid suggests installing moontoast/math (Provides support for converting UUID to 128-bit integer (in string form).)
ramsey/uuid suggests installing ramsey/uuid-doctrine (Allows the use of Ramsey\Uuid\Uuid as Doctrine field type.)
ramsey/uuid suggests installing ramsey/uuid-console (A console application for generating UUIDs with ramsey/uuid)
symfony/translation suggests installing symfony/config ()
symfony/translation suggests installing symfony/yaml ()
monolog/monolog suggests installing aws/aws-sdk-php (Allow sending log messages to AWS services like DynamoDB)
monolog/monolog suggests installing doctrine/couchdb (Allow sending log messages to a CouchDB server)
monolog/monolog suggests installing ext-amqp (Allow sending log messages to an AMQP server (1.0+ required))
monolog/monolog suggests installing ext-mongo (Allow sending log messages to a MongoDB server)
monolog/monolog suggests installing graylog2/gelf-php (Allow sending log messages to a GrayLog2 server)
monolog/monolog suggests installing mongodb/mongodb (Allow sending log messages to a MongoDB server via PHP Driver)
monolog/monolog suggests installing php-amqplib/php-amqplib (Allow sending log messages to an AMQP server using php-amqplib)
monolog/monolog suggests installing php-console/php-console (Allow sending log messages to Google Chrome)
monolog/monolog suggests installing rollbar/rollbar (Allow sending log messages to Rollbar)
monolog/monolog suggests installing ruflin/elastica (Allow sending log messages to an Elastic Search server)
monolog/monolog suggests installing sentry/sentry (Allow sending log messages to a Sentry server)
league/flysystem suggests installing league/flysystem-aws-s3-v2 (Allows you to use S3 storage with AWS SDK v2)
league/flysystem suggests installing league/flysystem-aws-s3-v3 (Allows you to use S3 storage with AWS SDK v3)
league/flysystem suggests installing league/flysystem-azure (Allows you to use Windows Azure Blob storage)
league/flysystem suggests installing league/flysystem-cached-adapter (Flysystem adapter decorator for metadata caching)
league/flysystem suggests installing league/flysystem-eventable-filesystem (Allows you to use EventableFilesystem)
league/flysystem suggests installing league/flysystem-rackspace (Allows you to use Rackspace Cloud Files)
league/flysystem suggests installing league/flysystem-sftp (Allows you to use SFTP server storage via phpseclib)
league/flysystem suggests installing league/flysystem-webdav (Allows you to use WebDAV storage)
league/flysystem suggests installing league/flysystem-ziparchive (Allows you to use ZipArchive adapter)
league/flysystem suggests installing spatie/flysystem-dropbox (Allows you to use Dropbox storage)
league/flysystem suggests installing srmklive/flysystem-dropbox-v2 (Allows you to use Dropbox storage for PHP 5 applications)
laravel/framework suggests installing aws/aws-sdk-php (Required to use the SQS queue driver and SES mail driver (~3.0).)
laravel/framework suggests installing doctrine/dbal (Required to rename columns and drop SQLite columns (~2.5).)
laravel/framework suggests installing ext-pcntl (Required to use all features of the queue worker.)
laravel/framework suggests installing ext-posix (Required to use all features of the queue worker.)
laravel/framework suggests installing guzzlehttp/guzzle (Required to use the Mailgun and Mandrill mail drivers and the ping methods on schedules (~6.0).)
laravel/framework suggests installing league/flysystem-aws-s3-v3 (Required to use the Flysystem S3 driver (~1.0).)
laravel/framework suggests installing league/flysystem-rackspace (Required to use the Flysystem Rackspace driver (~1.0).)
laravel/framework suggests installing nexmo/client (Required to use the Nexmo transport (~1.0).)
laravel/framework suggests installing pda/pheanstalk (Required to use the beanstalk queue driver (~3.0).)
laravel/framework suggests installing predis/predis (Required to use the redis cache and queue drivers (~1.0).)
laravel/framework suggests installing pusher/pusher-php-server (Required to use the Pusher broadcast driver (~3.0).)
laravel/framework suggests installing symfony/dom-crawler (Required to use most of the crawler integration testing tools (~3.3).)
laravel/framework suggests installing symfony/psr-http-message-bridge (Required to psr7 bridging features (~1.0).)
psy/psysh suggests installing ext-pcntl (Enabling the PCNTL extension makes PsySH a lot happier :))
psy/psysh suggests installing ext-posix (If you have PCNTL, you'll want the POSIX extension as well.)
psy/psysh suggests installing ext-pdo-sqlite (The doc command requires SQLite to work.)
psy/psysh suggests installing hoa/console (A pure PHP readline implementation. You'll want this if your PHP install doesn't already support readline or libedit.)
filp/whoops suggests installing whoops/soap (Formats errors as SOAP responses)
sebastian/global-state suggests installing ext-uopz (*)
phpunit/phpunit-mock-objects suggests installing ext-soap (*)
phpunit/phpunit suggests installing phpunit/php-invoker (^1.1)
Writing lock file
Generating autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Package manifest generated successfully.
> @php artisan key:generate
Application key [base64:q5COOJcXTJ4TX5PhLzcU6rH8kRRyTzLd1HN7aWA8S50=] set successfully.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs
$ php artisan make:auth
Could not open input file: artisan

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs
$ cd BillBooks/

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ php artisan make:auth
Authentication scaffolding generated successfully.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ php artisan migrat


  Command "migrat" is ambiguous.
  Did you mean one of these?
      migrate          Run the database migrations
      migrate:fresh    Drop all tables and re-run all migrations
      migrate:install  Create the migration repository
      migrate:refresh  Reset and re-run all migrations
      migrate:reset    Rollback all database migrations
      migrate:rollback Rollback the last database migration
      migrate:status   Show the status of each migration



Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ php artisan migrate
Migration table created successfully.

In Connection.php line 664:

  SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter tab
  le `users` add unique `users_email_unique`(`email`))


In Connection.php line 458:

  SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes



Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ ^C

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ php artisan migrate
Migration table created successfully.

In Connection.php line 664:

  SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter tab
  le `users` add unique `users_email_unique`(`email`))


In Connection.php line 458:

  SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes



Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ php artisan migrate

In AppServiceProvider.php line 16:

  Class 'App\Providers\Schema' not found



Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ php artisan migrate

In Connection.php line 664:

  SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'users' already exists (SQL: create table `users` (`id` int unsi
  gned not null auto_increment primary key, `name` varchar(191) not null, `email` varchar(191) not null, `password` varchar(191)
  not null, `remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default character set u
  tf8mb4 collate utf8mb4_unicode_ci)


In Connection.php line 458:

  SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'users' already exists



Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ php artisan migrate
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ cd ...
bash: cd: ...: No such file or directory

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks
$ cd ..

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs
$ dir
applications.html  composer.json  favicon.ico         index.php    PhpProject1                 Trello-App     vendor
BillBooks          composer.lock  garagemanager-main  New\ folder  pleasereleaseme-web-master  trusted        webalizer
bitnami.css        dashboard      img                 phpinfo.php  test                        unconditional  xampp

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs
$ git clone https://github.com/G00sfraba/BillBooks.git
fatal: destination path 'BillBooks' already exists and is not an empty directory.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs
$ git clone https://github.com/G00sfraba/BillBooks.git
Cloning into 'BillBooks'...
remote: Counting objects: 5, done.
remote: Compressing objects: 100% (4/4), done.
remote: Total 5 (delta 0), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (5/5), done.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs
$ git clone https://github.com/G00sfraba/BillBooks.git
Cloning into 'BillBooks'...
remote: Counting objects: 5, done.
remote: Compressing objects: 100% (4/4), done.
remote: Total 5 (delta 0), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (5/5), done.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs
$ cd

Georgi@WebDev-VM-6 MINGW64 ~
$ cd

Georgi@WebDev-VM-6 MINGW64 ~
$ dir
AppData            Music                                                                                         Pictures
Application\ Data  My\ Documents                                                                                 PrintHood
Contacts           NetHood                                                                                       Recent
Cookies            NTUSER.DAT                                                                                    Saved\ Games
Desktop            ntuser.dat.LOG1                                                                               Searches
Documents          ntuser.dat.LOG2                                                                               SendTo
Downloads          NTUSER.DAT{d044f646-ae7e-11e3-80bf-b8ca3aeed8ca}.TM.blf                                       Start\ Menu
Favorites          NTUSER.DAT{d044f646-ae7e-11e3-80bf-b8ca3aeed8ca}.TMContainer00000000000000000001.regtrans-ms  Templates
Links              NTUSER.DAT{d044f646-ae7e-11e3-80bf-b8ca3aeed8ca}.TMContainer00000000000000000002.regtrans-ms  Videos
Local\ Settings    ntuser.ini

Georgi@WebDev-VM-6 MINGW64 ~
$ cd c:/

Georgi@WebDev-VM-6 MINGW64 /c
$ cd xampp/htdocs/BillBooks/

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ composer require buzz/laravel-google-captcha
Using version ^2.1 for buzz/laravel-google-captcha
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 2 installs, 0 updates, 0 removals
  - Installing google/recaptcha (1.1.3) Downloading: 100%
  - Installing buzz/laravel-google-captcha (v2.1.4) Downloading: 100%
Writing lock file
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Package manifest generated successfully.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ composer update
Loading composer repositories with package information
Updating dependencies (including require-dev)
Nothing to install or update
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Package manifest generated successfully.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan make:controller AuthorController --resource --model=Author

 A App\Author model does not exist. Do you want to generate it? (yes/no) [yes]:
 > yes

Model created successfully.
Controller created successfully.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan make:migration create_authors_tablе
Created Migration: 2017_12_01_092432_create_authors_tablе�

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan make:controller AuthorController --resource --model=Author
Controller already exists!

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan make:migration create_authors_table
Created Migration: 2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate
Migrating: 2017_12_01_092520_create_authors_table
Migrated:  2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate:rollback
Rolling back: 2017_12_01_092520_create_authors_table
Rolled back:  2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate
Migrating: 2017_12_01_092520_create_authors_table
Migrated:  2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate:rollback
Rolling back: 2017_12_01_092520_create_authors_table
Rolled back:  2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate
Migrating: 2017_12_01_092520_create_authors_table
Migrated:  2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ dir
app      bootstrap      composer.lock  database  package.json  public     resources  server.php  tests   webpack.mix.js
artisan  composer.json  config         LICENSE   phpunit.xml   README.md  routes     storage     vendor

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan make:migration change_author_notes_field_to_longText
Created Migration: 2017_12_01_174126_change_author_notes_field_to_longText

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate

In Connection.php line 664:

  SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds
   to your MariaDB server version for the right syntax to use near ') default character set utf8mb4 collate utf8mb4_unicode_ci' a
  t line 1 (SQL: create table `authors` () default character set utf8mb4 collate utf8mb4_unicode_ci)


In Connection.php line 452:

  SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds
   to your MariaDB server version for the right syntax to use near ') default character set utf8mb4 collate utf8mb4_unicode_ci' a
  t line 1



Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate
Migrating: 2017_12_01_092520_create_authors_table
Migrated:  2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan make:controller BookController --resource --model=Book

 A App\Book model does not exist. Do you want to generate it? (yes/no) [yes]:
 > yes

Model created successfully.
Controller created successfully.

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan make:migration create_books_tablе
Created Migration: 2017_12_04_054732_create_books_tablе�

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan make:migration create_books_table
Created Migration: 2017_12_04_054800_create_books_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate:rollback
Rolling back: 2017_12_01_092520_create_authors_table
Rolled back:  2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate
Migrating: 2017_12_01_092520_create_authors_table
Migrated:  2017_12_01_092520_create_authors_table
Migrating: 2017_12_04_054800_create_books_table
Migrated:  2017_12_04_054800_create_books_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate:rollback
Rolling back: 2017_12_04_054800_create_books_table
Rolled back:  2017_12_04_054800_create_books_table
Rolling back: 2017_12_01_092520_create_authors_table
Rolled back:  2017_12_01_092520_create_authors_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate:rollback
Rolling back: 2014_10_12_100000_create_password_resets_table
Rolled back:  2014_10_12_100000_create_password_resets_table
Rolling back: 2014_10_12_000000_create_users_table
Rolled back:  2014_10_12_000000_create_users_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table
Migrating: 2017_12_01_092520_create_authors_table
Migrated:  2017_12_01_092520_create_authors_table
Migrating: 2017_12_04_054800_create_books_table
Migrated:  2017_12_04_054800_create_books_table

Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate
Migration table created successfully.

In Connection.php line 664:

  SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'users' already exists (SQL: create table `users` (`id` int unsi
  gned not null auto_increment primary key, `name` varchar(191) not null, `email` varchar(191) not null, `password` varchar(191)
  not null, `remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default character set u
  tf8mb4 collate utf8mb4_unicode_ci)


In Connection.php line 458:

  SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'users' already exists



Georgi@WebDev-VM-6 MINGW64 /c/xampp/htdocs/BillBooks (master)
$ php artisan migrate
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table
Migrating: 2017_12_01_092520_create_authors_table
Migrated:  2017_12_01_092520_create_authors_table
Migrating: 2017_12_04_054800_create_books_table
Migrated:  2017_12_04_054800_create_books_table