<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/classes/DBConnection.php';

// Create a new instance of the Database class
$db = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Get all users
$usersWithVideo = $db->getUsersWithVideo();

// Close the database connection
$db->closeConnection();

// Include the template to display user data
require_once __DIR__ . '/templates/usersWithVideos.php';
