<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '家事',
            'id' => '1'
        ];

        tag::create($param);
        $param = [
            'name' => '勉強',
            'id' => '2'
        ];

        tag::create($param);
        $param = [
            'name' => '運動',
            'id' => '3'
        ];

        tag::create($param);
        $param = [
            'name' => '食事',
            'id' => '4'
        ];

        tag::create($param);
        $param = [
            'name' => '移動',
            'id'=> '5'
        ];
        tag::create($param);
        
    }
}
