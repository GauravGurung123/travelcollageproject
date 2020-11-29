<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeders extends Seeder
{
/**
     * Crud list
     */
    protected $crudList=[
        'view-',
        'create-',
        'update-',
        'delete-',
    ];
    /**
     * Permission slugs
     */
    protected $permissionSlugs=[
        // 'users',
        // 'roles',
        // 'permissions',
        // 'testimonials',
        // 'blogs',
        // 'galleries',
        // 'countries',
        // 'packages',
        // 'visitors',
        // 'settings',

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->permissionSlugs as $slug){
            foreach($this->crudList as $index => $crud){
                $result = DB::table('permissions')->insert(['name'=>$crud.$slug,'guard_name'=>'sanctum']);
                if (!$result) {
                    $this->command->info("Insert failed at record $index.");

                    return;
                }
            }
        }
        $this->command->info('Inserted '.count($this->crudList)*count($this->permissionSlugs).' records.');
    }
}
