docker stop php_drugstore
docker run --name=php_drugstore -ti --rm -p 80:80 --network phpdev --add-host=host.docker.internal:host-gateway -v $(pwd)/../:/var/www/html -v $(pwd)/../_log:/var/www/log -v $(pwd)/../_cache:/var/www/cache -v $(pwd)/../_twig:/var/www/twig phpex
