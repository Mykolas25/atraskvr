<?php

use Illuminate\Database\Seeder;

class VrPagesResourcesConnectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        \DB::table('vr_pages_resources_connections')->delete();
        
        \DB::table('vr_pages_resources_connections')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => '3779baeb-90bb-484f-8b40-7d37f30ecf25',
                'created_at' => '2017-06-08 09:02:03',
                'updated_at' => '2017-06-08 09:02:03',
                'deleted_at' => NULL,
                'pages_id' => 'b852de66-6978-45c9-b467-6824e06052db',
                'resources_id' => '5d69fa89-fe75-4926-871c-3d59e1778de2',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}