cd /var/www/ft_server/

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.3/phpMyAdmin-4.9.3-english.tar.gz
tar -xf phpMyAdmin-4.9.3-english.tar.gz
mv phpMyAdmin-4.9.3-english phpmyadmin
mv /tmp/phpmyadmin/config.inc.php /var/www/ft_server/phpmyadmin/config.inc.php

wget https://wordpress.org/latest.tar.gz
tar -xf latest.tar.gz -o wordpress
mv /tmp/wordpress/wp-config.php /var/www/ft_server/wordpress/wp-config.php

chown -R www-data:www-data /var/www/ft_server