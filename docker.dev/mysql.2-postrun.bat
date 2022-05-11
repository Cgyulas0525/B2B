docker exec -d my_drugstore mysql -padmin -e "UPDATE mysql.user SET host='%%' WHERE user='root'; FLUSH PRIVILEGES; "
