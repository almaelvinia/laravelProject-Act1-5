<?php

namespace Database\Seeders;
 use App\Models\Student;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   

public function run()
{
    Student::create([
        'name' => 'Alice Johnson',
        'email' => 'alice@example.com',
        'course' => 'Computer Science',
    ]);

    Student::create([
        'name' => 'Bob Smith',
        'email' => 'bob@example.com',
        'course' => 'Mathematics',
    ]);

    Student::create([
        'name' => 'Charlie Brown',
        'email' => 'charlie@example.com',
        'course' => 'Physics',
    ]);
}

}