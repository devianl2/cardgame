# Card Game

This is a simple card game. Follow the steps below to build and run in docker environment:


## Download

Download this repository into your computer folder.

## Build Docker

Run the following command to build docker environment

    docker build -t app:latest <project_root_path>

## Switch to another file

Run the docker environment:

    docker run -d -p 80:80 app:latest
    
 once you run above command go to http://localhost

