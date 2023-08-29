# RabbitMQ PHP Project

This project demonstrates how to send and receive messages from RabbitMQ using PHP.

## Requirements

* Docker
* Docker Compose

## Getting Started

1. Clone the project repository:

git clone git@github.com:khemrajregmi/phprabbitmq.git


2. Change directory to the project directory:

cd phprabbitmq


3. Build and run the project:

docker-compose build
docker-compose up

This will build the Docker images and then start the two Docker containers. The sender container will send a message to the RabbitMQ queue, and the receiver container will receive the message and print it to the console.

Contribute
Feel free to contribute to this project by submitting pull requests.

License
This project is licensed under the MIT License.

I hope this helps! Let me know if you have any other questions.