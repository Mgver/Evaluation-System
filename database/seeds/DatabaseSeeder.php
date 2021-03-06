<?php

use App\Semester;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AcademicYearsTableSeeder::class,
            SemestersTableSeeder::class,
            CourseTableSeeder::class,
            SubjectTableSeeder::class,
            StudentTableSeeder::class,
            InstructorTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
