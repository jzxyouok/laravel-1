<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use App\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(StudentTableSeeder::class);
    }
}


class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Teacher::class, 5)->create();
    }
}

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 10)->create();
    }
}

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 10)->create();
        
    }
}

