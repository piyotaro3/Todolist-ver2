<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = [
            'todoname' => 'tony',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];


    }
}