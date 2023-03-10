<?php

namespace Database\Seeders;

use App\Models\ManagementAccess\Permission;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            // dashboard
            [
                'title'      => 'dashboard_access',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            // user
            [
                'title'      => 'user_access',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'user_table',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'user_create',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'user_edit',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'user_show',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'user_delete',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            // permission
            [
                'title'      => 'permission_access',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'permission_table',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            // role
            [
                'title'      => 'role_access',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'role_table',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'role_create',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'role_edit',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'role_show',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'role_delete',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            // type user
            [
                'title'      => 'type_user_access',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'type_user_table',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
          
            [
                'title'      => 'materi_access',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'materi_table',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'materi_create',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'materi_edit',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'materi_show',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'materi_delete',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
             // request_materi
            [
                'title'      => 'request_materi_access',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'request_materi_table',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            [
                'title'      => 'request_materi_show',
                'created_at' => '2022-04-22 00:00:00',
                'updated_at' => '2022-04-22 00:00:00',
            ],
            
        ];

        Permission::insert($permission);
    }
}
