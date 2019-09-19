<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AddStuffToDatabase::class);
    }
}


class AddStuffToDatabase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('users')->truncate();
        DB::table('supervisors')->truncate();
        DB::table('topics')->truncate();

        \App\Admin::create([
            'name'     => 'Administrator',
            'email'    => 'admin@jazanu.edu.sa',
            'password' => \Hash::make('123456'),
        ]);
        \App\Supervisor::create([
            'name'     => 'Supervisor',
            'email'    => 'supervisor@jazanu.edu.sa',
            'password' => \Hash::make('123456'),
        ]);
        \App\User::create([
            'name'     => 'Student',
            'email'    => 'student@jazanu.edu.sa',
            'password' => \Hash::make('123456'),
        ]);

        \App\Topic::create([
            'name'     => 'Course Registration System',
            'description'    => 'come up with a solution for managing courses and students and administrating them',
        ]);
        \App\Topic::create([
            'name'     => 'Graduation Project Management System',
            'description'    => 'design and build an online platform in which students and their supervisor can work together online, with an administrator managing their accounts',
        ]);
    }
}
