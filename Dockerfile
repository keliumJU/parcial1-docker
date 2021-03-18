FROM php:7.3-apache


COPY . /var/www/html

#RUN chown -R 777 /var/www/html

# Install Composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN composer install

#EXPOSE 80

#CMD ["start-apache"]


