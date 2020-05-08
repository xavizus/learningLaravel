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
        factory(App\Models\Company::class, 5)->create()->each(function ($company) {
            $company->users()->saveMany(factory(App\Models\User::class, 25)->make());
        });
    }
}
