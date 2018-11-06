<?php
// use Monolog\Logger;
// use \Monolog\Handler\SlackWebhookHandler;
// // Create our WP Mail email handler
// $email = new WPMailHandler(
//   'mandzik@gmail.com',
//   'Error on ' . home_url(),
//   'logs@example.com',
//   Logger::ERROR
// );
// //Create slack handler
// $slack = new SlackWebhookHandler(
//   'https://hooks.slack.com/services/form-social.slack.com',
//   'channel-name',
//   null,
//   null,
//   'scream_cat', //Choose your emoji:)
//   false,
//   false,
//   isset( $_ENV[ 'SLACK_MIN_LEVEL' ] ) ? $_ENV[ 'SLACK_MIN_LEVEL' ] : Logger::ERROR // Use ENV variable for min level to send, else use ERROR
// );
// //Start Wonolog
// \Inpsyde\Wonolog\bootstrap( )
//   //Add slack handler
//   ->use_handler( $slack )
//   //Add email handler
//   ->use_handler( $email );