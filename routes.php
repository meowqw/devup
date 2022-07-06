<?php

require_once __DIR__.'/router.php';

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'index.php');

// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
