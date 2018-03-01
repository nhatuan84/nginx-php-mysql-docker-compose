FROM php:fpm 
MAINTAINER nha.tuan84@gmail.com 

RUN apt -y update
RUN docker-php-ext-install pdo pdo_mysql
