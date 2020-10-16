cd /var/www/ft_server/wordpress/

head -n 48 wp-config.php > tmp
wget https://api.wordpress.org/secret-key/1.1/salt/
cat index.html >> tmp
rm index.html
tail -n 33 wp-config.php >> tmp
rm wp-config.php
mv tmp wp-config.php

apt-get install -y procps

service nginx start
status=$?
if [ $status -ne 0 ]; then
  echo "Failed to start nginx: $status"
  exit $status
fi

service mysql start
status=$?
if [ $status -ne 0 ]; then
  echo "Failed to start mysql: $status"
  exit $status
fi

service php7.3-fpm start
status=$?
if [ $status -ne 0 ]; then
  echo "Failed to start php: $status"
  exit $status
fi

while sleep 2; do
  ps aux |grep nginx > /dev/null 2>&1
  PROCESS_1_STATUS=$?
  ps aux |grep sql > /dev/null 2>&1
  PROCESS_2_STATUS=$?
  ps aux |grep php-fpm > /dev/null 2>&1
  PROCESS_3_STATUS=$?

  if [ $PROCESS_1_STATUS -ne 0 -o $PROCESS_2_STATUS -ne 0 -o $PROCESS_3_STATUS -ne 0 ]; then
    echo "One of the processes has already exited."
    exit 1
  fi
done