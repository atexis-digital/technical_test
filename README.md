# Prueba Técnica

## Description
This application allows to track all arrivals to an airport in an interval of time.

## Requisitos
- Docker installed

## Instalation
1. Clone the repo into your machine
   ```bash
   git@github.com:atexis-digital/technical-test.git
   ```
2. Change directory into the project folder
    ```
    cd tech_test
    ```
3. Build images 
   ```
    docker-compose build front --no-cache
    docker-compose build php --no-cache

   ```
4. Start project with docker-compose
    ```
   docker-compose up
   ```
5. Wait some minutes for node to build and serve the project
6. Goto to http://localhost:8080/ and enjoy :)