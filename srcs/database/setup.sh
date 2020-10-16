service mysql start
mysql -uroot -e "CREATE DATABASE wordpress;"
mysql -uroot -e "CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'newuser';"
mysql -uroot -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'newuser'@'localhost';"
mysql < /tmp/phpmyadmin/sql/create_tables.sql
mysql -uroot -e "GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'newuser'@'localhost';"
mysql -uroot -e "FLUSH PRIVILEGES;"