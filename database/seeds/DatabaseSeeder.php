<?php

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
        // $this->call(UsersTableSeeder::class);
        // factory(App\User::class, 10)->create();
        // factory(App\Feedback::class, 30)->create();
        factory(App\Donor::class, 10)->create();
    }
}
