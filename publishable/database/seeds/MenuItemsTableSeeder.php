<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $menuItem = $this->menuItem('id', 1);
        if (!$menuItem->exists) {
            \DB::table('menu_items')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'menu_id' => 1,
                    'title' => 'Dashboard',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-boat',
                    'color' => '#000000',
                    'parent_id' => NULL,
                    'order' => 1,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-08-18 12:50:51',
                    'route' => 'voyager.dashboard',
                    'parameters' => 'null',
                ),
                1 => 
                array (
                    'id' => 2,
                    'menu_id' => 1,
                    'title' => 'Media',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-images',
                    'color' => NULL,
                    'parent_id' => 29,
                    'order' => 3,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-08-17 11:16:22',
                    'route' => 'voyager.media.index',
                    'parameters' => NULL,
                ),
                2 => 
                array (
                    'id' => 3,
                    'menu_id' => 1,
                    'title' => 'Manage Users',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-people',
                    'color' => '#000000',
                    'parent_id' => NULL,
                    'order' => 4,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-10-04 12:35:00',
                    'route' => 'voyager.users.index',
                    'parameters' => 'null',
                ),
                3 => 
                array (
                    'id' => 6,
                    'menu_id' => 1,
                    'title' => 'Menu Builder',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-list',
                    'color' => NULL,
                    'parent_id' => 5,
                    'order' => 1,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-08-17 05:09:28',
                    'route' => 'voyager.menus.index',
                    'parameters' => NULL,
                ),
                4 => 
                array (
                    'id' => 7,
                    'menu_id' => 1,
                    'title' => 'Database',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-data',
                    'color' => NULL,
                    'parent_id' => 5,
                    'order' => 2,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-08-17 05:09:28',
                    'route' => 'voyager.database.index',
                    'parameters' => NULL,
                ),
                5 => 
                array (
                    'id' => 8,
                    'menu_id' => 1,
                    'title' => 'Compass',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-compass',
                    'color' => NULL,
                    'parent_id' => 5,
                    'order' => 3,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-08-17 05:09:28',
                    'route' => 'voyager.compass.index',
                    'parameters' => NULL,
                ),
                6 => 
                array (
                    'id' => 9,
                    'menu_id' => 1,
                    'title' => 'BREAD',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-bread',
                    'color' => NULL,
                    'parent_id' => 5,
                    'order' => 4,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-08-17 05:09:43',
                    'route' => 'voyager.bread.index',
                    'parameters' => NULL,
                ),
                7 => 
                array (
                    'id' => 10,
                    'menu_id' => 1,
                    'title' => 'Settings',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-settings',
                    'color' => NULL,
                    'parent_id' => NULL,
                    'order' => 7,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-10-04 12:35:00',
                    'route' => 'voyager.settings.index',
                    'parameters' => NULL,
                ),
                8 => 
                array (
                    'id' => 11,
                    'menu_id' => 1,
                    'title' => 'Categories',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-categories',
                    'color' => NULL,
                    'parent_id' => 31,
                    'order' => 2,
                    'created_at' => '2018-12-21 10:25:07',
                    'updated_at' => '2019-08-17 11:51:06',
                    'route' => 'voyager.categories.index',
                    'parameters' => NULL,
                ),
                9 => 
                array (
                    'id' => 13,
                    'menu_id' => 1,
                    'title' => 'Pages',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-file-text',
                    'color' => NULL,
                    'parent_id' => 29,
                    'order' => 2,
                    'created_at' => '2018-12-21 10:25:08',
                    'updated_at' => '2019-08-17 05:02:16',
                    'route' => 'voyager.pages.index',
                    'parameters' => NULL,
                ),
                10 => 
                array (
                    'id' => 14,
                    'menu_id' => 1,
                    'title' => 'Hooks',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-hook',
                    'color' => NULL,
                    'parent_id' => 5,
                    'order' => 5,
                    'created_at' => '2018-12-21 10:25:08',
                    'updated_at' => '2019-08-17 05:09:43',
                    'route' => 'voyager.hooks',
                    'parameters' => NULL,
                ),
                11 => 
                array (
                    'id' => 15,
                    'menu_id' => 1,
                    'title' => 'Events',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-calendar',
                    'color' => '#000000',
                    'parent_id' => 31,
                    'order' => 1,
                    'created_at' => '2018-12-22 08:54:46',
                    'updated_at' => '2019-08-17 11:51:06',
                    'route' => 'voyager.events.index',
                    'parameters' => 'null',
                ),
                12 => 
                array (
                    'id' => 27,
                    'menu_id' => 1,
                    'title' => 'Contacts',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-mail',
                    'color' => '#000000',
                    'parent_id' => NULL,
                    'order' => 6,
                    'created_at' => '2019-07-09 08:52:22',
                    'updated_at' => '2019-10-04 12:35:00',
                    'route' => 'voyager.contacts.index',
                    'parameters' => 'null',
                ),
                13 => 
                array (
                    'id' => 29,
                    'menu_id' => 1,
                    'title' => 'Manage Site',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-controller',
                    'color' => '#000000',
                    'parent_id' => NULL,
                    'order' => 5,
                    'created_at' => '2019-08-17 05:00:51',
                    'updated_at' => '2019-10-04 12:35:00',
                    'route' => NULL,
                    'parameters' => '',
                ),
                14 => 
                array (
                    'id' => 31,
                    'menu_id' => 1,
                    'title' => 'Manage Events',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-shop',
                    'color' => '#000000',
                    'parent_id' => NULL,
                    'order' => 2,
                    'created_at' => '2019-08-17 05:08:35',
                    'updated_at' => '2019-08-17 05:37:59',
                    'route' => NULL,
                    'parameters' => '',
                ),
                15 => 
                array (
                    'id' => 32,
                    'menu_id' => 1,
                    'title' => 'Manage Bookings',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-bag',
                    'color' => '#000000',
                    'parent_id' => NULL,
                    'order' => 3,
                    'created_at' => '2019-08-17 05:11:20',
                    'updated_at' => '2019-08-17 08:10:06',
                    'route' => NULL,
                    'parameters' => '',
                ),
                16 => 
                array (
                    'id' => 33,
                    'menu_id' => 1,
                    'title' => 'Bookings',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-dollar',
                    'color' => NULL,
                    'parent_id' => 32,
                    'order' => 1,
                    'created_at' => '2019-08-17 05:29:55',
                    'updated_at' => '2019-08-17 05:30:04',
                    'route' => 'voyager.bookings.index',
                    'parameters' => NULL,
                ),
                17 => 
                array (
                    'id' => 38,
                    'menu_id' => 1,
                    'title' => 'Banners',
                    'url' => '',
                    'target' => '_self',
                    'icon_class' => 'voyager-photo',
                    'color' => NULL,
                    'parent_id' => 29,
                    'order' => 1,
                    'created_at' => '2019-10-04 12:34:41',
                    'updated_at' => '2019-10-04 12:35:00',
                    'route' => 'voyager.banners.index',
                    'parameters' => NULL,
                ),
            ));    
        }
        
    }

    protected function menuItem($field, $for)
    {
        return MenuItem::firstOrNew([$field => $for]);
    }
}