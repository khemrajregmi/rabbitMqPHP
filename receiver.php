<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Message\AMQPMessage;

// Create a connection to RabbitMQ
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');

// Create a channel
$channel = $connection->channel();

// Declare a queue
$channel->queue_declare('my_queue', false, false, false, false);

// Consume messages
while (true) {
    $message = $channel->basic_get('my_queue');

    if ($message === null) {
        sleep(1);
        continue;
    }

    // Do something with the message
    echo $message->body;

    // Acknowledge the message
    $channel->basic_ack($message->delivery_tag);
}

// Close the connection
$connection->close();

