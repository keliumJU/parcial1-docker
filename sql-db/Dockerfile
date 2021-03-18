FROM mysql:5.6

ENV MYSQL_DATABASE facturacion 
ENV MYSQL_ROOT_PASSWORD pass
COPY facturacion.sql /docker-entrypoint-initdb.d/facturacion.sql
COPY my.cnf /etc/mysql/my.cnf
RUN /entrypoint.sh mysqld & sleep 30 && killall mysqld
RUN rm /docker-entrypoint-initdb.d/facturacion.sql

EXPOSE 3306