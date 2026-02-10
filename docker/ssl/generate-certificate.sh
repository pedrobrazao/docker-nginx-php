#!/bin/bash

mkdir -p /app/var/ssl
chmod 0777 /app/var

openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
  -keyout /app/var/ssl/nginx.key \
    -out /app/var/ssl/nginx.crt \
        -subj "/C=GB/ST=State/L=City/O=Organization/CN=localhost"
      
