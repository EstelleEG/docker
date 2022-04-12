#sert a créer une img, mon code sera integrer dans l'img, je devrais relancer un container mais je n'aurais pas a recreer l'img
#avec la commande below: 
#docker build . -t +nomImage

FROM php:8-apache
#to work with cmd commands
RUN apt-get update
#-y to be asked yes or no
RUN apt-get install -y git

#install php extension
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

#
COPY ./app /var/www/html
#img will be transformed into a container and service will run on port 80
EXPOSE 80