# ResetTraffic-x-ui-english-with-php

#install requirements

apt-get install software-properties-common -y

add-apt-repository ppa:ondrej/php -y

apt-get update -y

apt-get install php8.1 -y

sudo apt install sqlite3 -y

apt-get install libapache2-mod-php8.1 php8.1-fpm php8.1-sqlite libapache2-mod-fcgid php8.1-curl php8.1-dev php8.1-gd php8.1-mbstring php8.1-zip php8.1-mysql php8.1-xml -y

chmod 777 /etc/x-ui-english

sudo chown www-data:www-data /etc/x-ui-english/x-ui-english.db

service apache2 restart

