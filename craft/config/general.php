<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  'localhost' => array(
    'devMode' => true,
    'siteUrl' => 'http://localhost:8888/',
    'environmentVariables' => array(
      'basePath' => '/Applications/MAMP/sandbox/html/',
      'baseUrl'  => 'http://localhost:8888/',
    ),
    'testToEmailAddress' => 'dev@email.com',
  ),

  // Use IP address of your droplet below
  '104.236.161.221' => array(
    'siteUrl' => 'http://104.236.161.221/',
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://104.236.161.221/',
    )
  )
);
