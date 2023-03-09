# ResetTraffic-x-ui-english-with-php

#install requirements

git clone https://github.com/loghmanazari/ResetTraffic-x-ui-english-with-php.git /var/www/html/api

apt-get install software-properties-common -y

sudo apt-add-repository -r ppa:certbot/certbot

add-apt-repository ppa:ondrej/php -y

apt update && apt upgrade

apt-get install apache2 -y

apt-get install php8.1 -y

sudo apt install sqlite3 -y

apt-get install libapache2-mod-php8.1 php8.1-fpm php8.1-sqlite libapache2-mod-fcgid php8.1-curl php8.1-dev php8.1-gd php8.1-mbstring php8.1-zip php8.1-mysql php8.1-xml -y

chmod -R 777 /etc/x-ui-english

sudo chown www-data:www-data /etc/x-ui-english/x-ui-english.db

sudo chown -R www-data:www-data /var/www/html

chmod 777 /var/www/html/api/index.php

sudo a2dismod mpm_prefork

sudo a2dismod mpm_worker

sudo a2dismod mpm_event

sudo a2enmod php8.1

service apache2 restart

x-ui restart
