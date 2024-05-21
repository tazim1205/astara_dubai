<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label_id' => NULL,
                'parent_id' => NULL,
                'menu_name_en' => 'Dashboard',
                'menu_name_bn' => 'ড্যাশবোর্ড',
                'system_name' => 'Dashboard',
                'route' => 'dashboard',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 3,
                'icon' => 'fa fa-home',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 12:08:51',
                'updated_at' => '2023-10-28 12:08:51',
            ),
            1 => 
            array (
                'id' => 2,
                'label_id' => 1,
                'parent_id' => NULL,
                'menu_name_en' => 'Menu Settings',
                'menu_name_bn' => 'মেনু সেটিংস',
                'system_name' => 'Menu Settings',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 2,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-gears',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 12:20:25',
                'updated_at' => '2023-10-28 14:44:36',
            ),
            2 => 
            array (
                'id' => 3,
                'label_id' => NULL,
                'parent_id' => 2,
                'menu_name_en' => 'Menu Label',
                'menu_name_bn' => 'মেনু স্তর',
                'system_name' => 'Menu Label',
                'route' => 'menu_label',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 12:45:30',
                'updated_at' => '2023-10-28 12:45:30',
            ),
            3 => 
            array (
                'id' => 4,
                'label_id' => NULL,
                'parent_id' => 2,
                'menu_name_en' => 'Menu',
                'menu_name_bn' => 'মেনু',
                'system_name' => 'Menu',
                'route' => 'menu',
                'slug' => 'index',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 12:51:14',
                'updated_at' => '2023-10-28 12:51:14',
            ),
            4 => 
            array (
                'id' => 5,
                'label_id' => 2,
                'parent_id' => NULL,
                'menu_name_en' => 'Admin Settings',
                'menu_name_bn' => 'অ্যাডমিন সেটিংস',
                'system_name' => 'Admin Settings',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 3,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-user',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 13:57:37',
                'updated_at' => '2023-10-28 13:57:37',
            ),
            5 => 
            array (
                'id' => 6,
                'label_id' => NULL,
                'parent_id' => 5,
                'menu_name_en' => 'Role',
                'menu_name_bn' => 'রোল',
                'system_name' => 'Role',
                'route' => 'role',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 13:58:11',
                'updated_at' => '2023-10-28 13:58:11',
            ),
            6 => 
            array (
                'id' => 7,
                'label_id' => NULL,
                'parent_id' => 5,
                'menu_name_en' => 'Admin',
                'menu_name_bn' => 'অ্যাডমিন',
                'system_name' => 'Admin',
                'route' => 'user',
                'slug' => 'index',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 14:09:00',
                'updated_at' => '2023-10-28 14:09:00',
            ),
            7 => 
            array (
                'id' => 8,
                'label_id' => NULL,
                'parent_id' => 5,
                'menu_name_en' => 'Branch',
                'menu_name_bn' => 'ব্রাঞ্চ',
                'system_name' => 'Branch',
                'route' => 'branch',
                'slug' => 'index',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 14:10:55',
                'updated_at' => '2023-10-28 14:10:55',
            ),
            8 => 
            array (
                'id' => 15,
                'label_id' => 6,
                'parent_id' => NULL,
                'menu_name_en' => 'Software Settings',
                'menu_name_bn' => 'সফটওয়্যার সেটিংস',
                'system_name' => 'Software Settings',
                'route' => NULL,
                'slug' => NULL,
                'order_by' => 4,
                'status' => 1,
                'type' => 1,
                'icon' => 'fa fa-cog',
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-30 23:57:24',
                'updated_at' => '2023-10-30 23:57:24',
            ),
            9 => 
            array (
                'id' => 16,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Software Information',
                'menu_name_bn' => 'সফটওয়্যার তথ্য',
                'system_name' => 'Software Info',
                'route' => 'software_info',
                'slug' => 'create',
                'order_by' => 1,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-10-30 23:58:47',
                'updated_at' => '2023-10-30 23:58:47',
            ),
            10 => 
            array (
                'id' => 17,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Theme Settings',
                'menu_name_bn' => 'থিম সেটিংস',
                'system_name' => 'Theme Settings',
                'route' => 'user_theme',
                'slug' => 'create',
                'order_by' => 2,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2023-11-01 17:02:46',
                'updated_at' => '2023-11-01 17:02:46',
            ),
            11 => 
            array (
                'id' => 48,
                'label_id' => NULL,
                'parent_id' => 15,
                'menu_name_en' => 'Slider Settings',
                'menu_name_bn' => 'স্লাইডার সেটিংস',
                'system_name' => 'Slider Settings',
                'route' => 'slider',
                'slug' => 'index',
                'order_by' => 3,
                'status' => 1,
                'type' => 2,
                'icon' => NULL,
                'create_by' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-04-30 10:44:50',
                'updated_at' => '2024-04-30 11:15:39',
            ),
        ));
        
        
    }
}