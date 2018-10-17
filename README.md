# Wordpress Starter Kit

Based on a MAMP setup

```
cd /wordpress-starter-kit
composer install

/Applications/MAMP/Library/bin/mysql -uroot -proot
CREATE DATABASE wordpress_dev;
GRANT ALL PRIVILEGES ON wordpress_dev.* TO “wordpress_user”@“localhost" IDENTIFIED BY "password";
FLUSH PRIVILEGES;
EXIT;

cd public
openssl rand -base64 12 >> dbpass.txt
wp config create --dbname=wordpress_dev --dbuser=wordpress_user --dbhost=localhost:8889 --prompt=dbpass < dbpass.txt
wp core install --url=http://localhost:8888/ --title=Wordpress-Dev --admin_user=wordpress-user --admin_password=password --admin_email=example@example.com
```

#### Misc

Backup Database

`wp db export wp-$(date +"%Y%m%d_%H%M%S").sql`

#### Troubleshoot

(http://laurenpittenger.com/wpcli-error-establishing-database-connection-mamp/)[wp cli error connection]

