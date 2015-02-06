<?php

require __DIR__ . '/vendor/autoload.php';

class Student extends Model
{
    public function grade()
    {
        return $this->has_one('Grade');
    }
}

class Grade extends Model
{
    public function students()
    {
        return $this->has_many('Student');
    }
}

// ...

$grade = Model::factory('Grade')->create();
$grade->name = '1st';
$grade->save();

// insert
$student = Model::factory('Student')->create();
$student->name = 'JOSELUIS';
$student->grade_id = $grade->id;
$student->save();
$student = Model::factory('Student')->create();
$student->name = 'ANGEL';
$student->grade_id = $grade->id;
$student->save();

// retrieve all studentes in grade
$allStudents = $grade->students()->find_many();
foreach ($allStudents as $student){
    print sprintf('%06d | %30s' . PHP_EOL, $student->id, $student->name);
}