FROM nginx:latest

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
  -keyout /etc/ssl/private/nginx.key \
    -out /etc/ssl/certs/nginx.crt \
      -subj "/C=GB/ST=State/L=City/O=Organization/CN=localhost"
      

