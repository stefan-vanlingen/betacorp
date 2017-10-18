#!/bin/bash
MYPWD=${PWD}
sass ./css/main.scss ./css/main.css
open http://localhost:80 &
docker run -d -p 80:80 -v $MYPWD:/var/www "eriksencosta/php-dev:latest"
sass --watch ./css/main.scss:./css/main.css

