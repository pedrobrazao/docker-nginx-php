FROM ubuntu:latest

RUN apt-get -y update \
  && apt-get -y install openssl

WORKDIR /app/docker/ssl

CMD ["/app/docker/ssl/generate-certificate.sh"]
