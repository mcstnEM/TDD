<?php
require_once './vendor/autoload.php';

use App\User;

$user = new User(name: 'Edouard', surname: 'Delamain');

echo $user->getName();