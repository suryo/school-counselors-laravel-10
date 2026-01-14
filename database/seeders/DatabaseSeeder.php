<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Sample Categories
        \App\Models\Category::create(['name' => 'Academic', 'description' => 'Issues related to studies and grades']);
        \App\Models\Category::create(['name' => 'Personal', 'description' => 'Social and emotional issues']);
        \App\Models\Category::create(['name' => 'Career', 'description' => 'Future plans and career guidance']);

        // Sample Counselors
        \App\Models\Counselor::create([
            'name' => 'John Doe',
            'email' => 'john@school.com',
            'phone' => '123456789',
            'specialization' => 'Academic Guidance'
        ]);
        \App\Models\Counselor::create([
            'name' => 'Jane Smith',
            'email' => 'jane@school.com',
            'phone' => '987654321',
            'specialization' => 'Social-Emotional Counseling'
        ]);

        // Sample Students
        \App\Models\Student::create([
            'student_id' => '2024001',
            'name' => 'Alice Wonder',
            'gender' => 'Female',
            'class' => 'X-IPA',
            'address' => 'Wonderland Street'
        ]);
        \App\Models\Student::create([
            'student_id' => '2024002',
            'name' => 'Bob Builder',
            'gender' => 'Male',
            'class' => 'X-IPS',
            'address' => 'Construction Ave'
        ]);
    }
}
