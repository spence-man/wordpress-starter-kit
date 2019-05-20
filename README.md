## Wordpress Starter Kit

Simple setup for WordPress local development testing.

**Dependencies:**

[Homebrew](https://docs.brew.sh/Installation), [PHPUnit](https://make.wordpress.org/core/handbook/testing/automated-testing/phpunit/), [PHP Codesniffer](https://github.com/squizlabs/PHP_CodeSniffer), [WP CLI](https://wp-cli.org/#installing), [XDebug](https://xdebug.org/docs/install), [Visual Studio Code](https://code.visualstudio.com/), [Bootstrap](https://getbootstrap.com/docs/4.3/getting-started/download/)

[See Wiki](https://github.com/spence-man/wordpress-starter-kit/wiki/Dependencies) to install dependencies.

### Setup

**Install Starter Package & Setup WordPress**

```
git clone https://github.com/spence-man/wordpress-starter-kit
cd /wordpress-starter-kit
openssl rand -base64 12 >> dbpass.txt
openssl rand -base64 12 >> adminpass.txt
```
**DB**
```
mysql -uroot -proot
CREATE DATABASE wordpress_dev;
GRANT ALL PRIVILEGES ON wordpress_dev.* TO "wordpress_user"@"localhost" IDENTIFIED BY "dbpass";
FLUSH PRIVILEGES;
EXIT;
```
**WordPress Init**
```
wp config create --dbname=wordpress_dev --dbuser=wordpress_user --dbhost=127.0.0.1:3306 --prompt=dbpass < dbpass.txt --extra-php <<PHP
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
PHP

wp core install --url=http://localhost:8222/ --title=Wordpress-Dev --admin_user=wordpress-user --admin_email=info@example.com --prompt=admin_password < admin_password.txt
wp theme activate wpstarterkit

# Make Executable
chmod +x run.sh
# Run PHP Server
bash run.sh

# or
php -S localhost:8222 -t ./wordpress
```

http://127.0.0.1:8222

**PHPUnit & WordPress**
```
cd wp-content/themes/wpstarterkit
# This will create a separate test db
bash bin/install-wp-tests.sh wordpress_dev_test root '' 127.0.0.1:3306 latest

# Run tests
phpunit
```

Setup additional tests
```
# Desired theme & plugin to test
wp scaffold theme-tests some-theme
wp scaffold plugin-tests some-plugin
```
From WordPress CLI [handbook](https://make.wordpress.org/cli/handbook/plugin-unit-tests/)

**Setup Complete!**
***

### Notes

- `wp-content` directory is symlinked outside the wp core to project root
- `wpstarterkit` theme enqueues bootstrap
- `debug.log` is symlinked to project root
-  visit `http://localhost:8222/phpinfo.php` for php info
- `/etc/settings.json` contains some good defaults for Visual Studio Code
- `/etc/themeunittestdata.wordpress.xml` contains seed data for theme testing (import using the WordPress importer)
- `wordpress/wp-content/themes/wpstarterkit/test-sandbox` for manual testing
- `wordpress/wp-content/themes/wpstarterkit/tests/test-resources.php` contains various examples of unit test methods

#### Resources
[Helpful Snippets](https://github.com/spence-man/wordpress-starter-kit/wiki/Helpful-Snippets)

[Unit Testing links & more](https://github.com/spence-man/wordpress-starter-kit/wiki/Resources)
#### Troubleshoot
- [wp cli error connection](http://laurenpittenger.com/wpcli-error-establishing-database-connection-mamp/)
- [can't connect to local MySQL server through socket](https://superuser.com/questions/1333504/brew-install-mysql5-7-cant-connect-to-local-mysql-server-through-socket)
