<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        User::create([
            'name' => '',
            'surname' => '',
            'patronymic' => 'adminName',
            'email' => env('DEV_ADMIN_EMAIL'),
            'login' => env('DEV_ADMIN_LOGIN'),
            'password' => Hash::make(env('DEV_ADMIN_PASSWORD')),
            'role_id' => Role::admin_role()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
