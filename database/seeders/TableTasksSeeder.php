<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TableTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::insert([
            'name' => 'php'
        ]);

        Task::insert([
            'name' => 'laravel'
        ]);

        Task::insert([
            'name' => 'AngularJS'
        ]);
        
        Task::factory(3)->create();
    }
}
