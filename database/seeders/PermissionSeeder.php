<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $permissions = [
    
            'اضافة مستخدم',
            'تعديل مستخدم',
            'حذف مستخدم',
    
            'عرض صلاحية',
            'اضافة صلاحية',
            'تعديل صلاحية',
            'حذف صلاحية',
    
            'اضافة منتج',
            'تعديل منتج',
            'حذف منتج',
    
            'اضافة قسم',
            'تعديل قسم',
            'حذف قسم',
            'الاشعارات',
    
    ];
    
    
    
    foreach ($permissions as $permission) {
    
    Permission::create(['name' => $permission]);
    }
    }





}
