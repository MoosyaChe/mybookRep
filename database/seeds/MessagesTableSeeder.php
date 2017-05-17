<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert(
                [
                    [
                        'username' => 'Петр',
                        'message' => 'Бла!'
                    ],
                    [
                        'username' => 'Василий',
                        'message' => 'БлаБлаБлаБлаБла'
                    ],
                    [
                        'username' => 'Иван',
                        'message' => 'БлаБлаБла-БлаБла??'
                    ]
                ]);
    }
}
