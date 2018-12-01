FROM linkedpipes/etl

RUN mkdir -p /etl/www

#nakopirovat custom soubory
COPY www /etl/www
COPY configuration.properties /etl/deploy/
COPY docker-pipeline.jsonld /etl
COPY custom-start.sh /etl
RUN chmod a+x custom-start.sh

#pridat webovy server pro statistiku
RUN apt-get update
RUN apt-get install -y nginx
RUN rm -v /etc/nginx/nginx.conf
ADD nginx.conf /etc/nginx/

#spustit
CMD ["/bin/bash", "/etl/custom-start.sh"]
EXPOSE 80 8080
