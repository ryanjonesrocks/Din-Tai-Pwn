#!/bin/sh
docker build -t myphpsite .
docker run -p 8080:80 -d myphpsite
docker ps