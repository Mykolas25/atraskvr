<?php
/**
 * Created by PhpStorm.
 * User: karolis
 * Date: 5/17/2017
 * Time: 9:49 AM
 */

namespace App\Console\Commands;

use App\Models\VRUsers;
use Illuminate\Console\Command;
use Ramsey\Uuid\Uuid;

class CreateAdministrator extends Command
{
    protected $signature = "make:admin";

    protected $description = "Create admin user account";

    public function handle()
    {

        $this->comment("Creating admin user");

        $record = VRUsers::create([
            'id' => Uuid::uuid4(),
            'first_name' => $first_name = $this->ask('Please provide first name'),
            'last_name' => $last_name = $this->ask('Please provide last name'),
            'name' => $first_name . " " . $last_name,
            'email' => $this->ask('Please provide email'),
            'phone' => $this->ask('Please provide phone'),
            'password' => bcrypt($password = $this->secret('Please provide password'))
        ]);

        $record -> connection() -> sync('super-admin');

        $this->comment("Great success!");
    }
}