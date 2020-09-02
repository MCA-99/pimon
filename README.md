# PiMon

PiMon is a Docker, JS, PHP, HTML5 Web Application to view information about your Raspberry Pi Model.

### Tech

PiMon uses a number of 3 programming languages to work properly:

* HTML
* PHP
* JavaScript

### Installation

PiMon requires Docker/Docker Compose to run.

Install the Docker/Docker Compose and start the server.

```sh
$ sudo curl -sSL https://get.docker.com | sh
$ sudo curl https://bootstrap.pypa.io/get-pip.py -o get-pip.py && sudo python3 get-pip.py
$ sudo pip3 install docker-compose
$ docker-compose up -d
```

### Docker
PiMonis very easy to install and deploy in a Docker container.

By default, the Docker will expose port 80, so change this within the Dockerfile if necessary.

```sh
cd pimon
docker-compose up -d
```
This will create the PiMon image and pull in the necessary dependencies.

Once done, PiMon should be running at port 80.

Verify the deployment by navigating to your server address in your preferred browser.

```sh
127.0.0.1:80
```

