<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => '12',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@flower.jp',
            'age' => '34',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@happy.jp',
            'age' => '56',
        ];
        DB::table('people')->insert($param);
    }
}
