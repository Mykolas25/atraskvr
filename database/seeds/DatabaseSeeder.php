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
        $this->call(RolesSeeder::class);
        $this->call( PagesCategoriesSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call( PagesCategoriesTranslationsSeeder::class);

        $this->call(VrPagesTableSeeder::class);
        $this->call(VrResourcesTableSeeder::class);
        $this->call(VrMenusTranslationsTableSeeder::class);
        $this->call(VrMenusTableSeeder::class);
        $this->call(VrPagesTranslationsTableSeeder::class);
    }
}
