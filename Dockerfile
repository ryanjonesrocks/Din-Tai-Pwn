FROM php:7.4-apache
COPY public-html/ /var/www/html/
RUN chmod -R a+r /var/www/html/
EXPOSE 80