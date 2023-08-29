<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

// Create a connection to RabbitMQ
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');

// Create a channel
$channel = $connection->channel();

// Declare a queue
$channel->queue_declare('my_queue', false, false, false, false);

// Create a message
$message = new AMQPMessage('Hello, world!');

// Send the message
$channel->basic_publish($message, '', 'my_queue');

// Close the connection
$connection->close();

