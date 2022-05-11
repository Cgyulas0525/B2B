docker run --name=my_drugstore -t -p 3306:3306 --network phpdev -e MYSQL_ROOT_PASSWORD=admin -e TZ=Europe/Budapest -v my_drugstore:/var/lib/mysql -d mysql/mysql-server
