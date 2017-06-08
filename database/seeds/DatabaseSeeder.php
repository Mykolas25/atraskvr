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
    { DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        $this->call(RolesSeeder::class);
        $this->call( PagesCategoriesSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call( PagesCategoriesTranslationsSeeder::class);

        $this->call(VrPagesTableSeeder::class);
        $this->call(VrResourcesTableSeeder::class);
        $this->call(VrMenusTranslationsTableSeeder::class);
        $this->call(VrMenusTableSeeder::class);
        $this->call(VrPagesTranslationsTableSeeder::class);
        $this->call(VrPagesResourcesConnectionsTableSeeder::class);
        $this->call(VrPagesCategoriesTableSeeder::class);
        $this->call(VrPagesCategoriesTranslationsTableSeeder::class);
    }
}
