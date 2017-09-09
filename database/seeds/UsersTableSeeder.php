<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Jobs\User::class)->times(27)->create([
            'phone' => '(43) 9999-8888',
        ]);
    }
}
