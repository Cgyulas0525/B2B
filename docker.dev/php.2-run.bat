@docker stop php_drugstore
@docker run --name=php_drugstore -ti --rm -p 80:80 --network phpdev -v %cd%\..\:/var/www/html -v %cd%\..\_log:/var/www/log -v %cd%\..\_cache:/var/www/cache -v %cd%\..\_twig:/var/www/twig phpex
