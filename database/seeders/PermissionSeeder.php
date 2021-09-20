<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = ['Create', 'Update', 'Delete'];

        $entities =
            [
                ['group' => __('Orders'), 'name' => 'Orders'],
                ['group' => __('Users'), 'name' => 'Usrs'],
                ['group' => __('Items'), 'name' => 'Items'],
                ['group' => __('Services'), 'name' => 'Services'],
//                ['group' => __('Roles'), 'name' => 'Roles'],
                ['group' => __('Districts'), 'name' => 'Districts'],
                ['group' => __('Cities'), 'name' => 'Cities'],
                ['group' => __('Settings'), 'name' => 'Settings'],
//                ['group' => __('Universities'), 'name' => 'Universities'],
//                ['group' => __('Majors'), 'name' => 'Majors'],
//                ['group' => __('Links'), 'name' => 'Links'],
//                ['group' => __('Roles'), 'name' => 'Roles'],
//                ['group' => __('Users'), 'name' => 'Users'],
        ];



        foreach ($actions as $action) {
            foreach ($entities as $entity) {
                $permissions[] = ['group' => $entity['group'], 'name' => "$action-{$entity['name']}",
                    'guard_name' => 'web'];
            }
        }

        $permissionNames = collect($permissions)->pluck('name')->toArray();

        Permission::insert($permissions);

        User::first()->givePermissionTo(...$permissionNames);
    }
}
