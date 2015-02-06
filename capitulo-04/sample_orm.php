<?php

// @1
require __DIR__ . '/vendor/autoload.php';

// @2
/** esta clase mapea la tabla con una clase PHP (thanks ORM) */
class Student extends Model
{
}

// @3
ORM::configure('mysql:host=localhost;dbname=db_test');
ORM::configure('username', 'user');
ORM::configure('password', 'password');

// @4
$allStudents = Model::factory('Student')->find_many();

// @5
foreach ($allStudents as $student){
    print sprintf('%06d | %30s' . PHP_EOL, $student->id, $student->name); }