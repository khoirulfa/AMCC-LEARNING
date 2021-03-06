<?php

use App\Information;
use App\Member;
use App\User;
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
        factory(User::class, 5)->create();
        factory(Member::class, 100)->create();
        factory(Information::class, 1)->create();
    }
}
