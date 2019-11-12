<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    private $menuName = null;
    private $menuId = null;
    private $dropdownId = array();
    private $dropdown = false;
    private $sequence = 1;

    public function insertLink($name, $href, $icon = null){
        if($this->dropdown === false){
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_name' => $this->menuName,
                'menu_id' => $this->menuId,
                'sequence' => $this->sequence
            ]);
        }else{
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_name' => $this->menuName,
                'menu_id' => $this->menuId,
                'parent_id' => $this->dropdownId[count($this->dropdownId) - 1],
                'sequence' => $this->sequence
            ]);
        }
        $this->sequence++;
    }

    public function insertTitle($name){
        DB::table('menus')->insert([
            'slug' => 'title',
            'name' => $name,
            'menu_name' => $this->menuName,
            'menu_id' => $this->menuId,
            'sequence' => $this->sequence
        ]);
        $this->sequence++;
    }

    public function beginDropdown($name, $icon){
        if(count($this->dropdownId)){
            $parentId = $this->dropdownId[count($this->dropdownId) - 1];
        }else{
            $parentId = null;
        }
        DB::table('menus')->insert([
            'slug' => 'dropdown',
            'name' => $name,
            'icon' => $icon,
            'menu_name' => $this->menuName,
            'menu_id' => $this->menuId,
            'sequence' => $this->sequence,
            'parent_id' => $parentId
        ]);
        array_push($this->dropdownId, DB::getPdo()->lastInsertId());
        $this->dropdown = true;
        $this->sequence++;
    }

    public function endDropdown(){
        $this->dropdown = false;
        array_pop( $this->dropdownId );
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dropdownId = array();
        /* sidebar menu */
        $this->menuId = 1;
        /* guest menu */
        $this->menuName = 'guest';
        $this->insertLink('Dashboard', '/', 'cui-speedometer');
        $this->insertLink('Login', '/login', 'cui-account-logout');
        $this->insertLink('Register', '/register', 'cui-account-logout');
        $this->insertLink('Download CoreUI', 'https://coreui.io', 'cui-cloud-download');
        $this->insertLink('Try CoreUI PRO', 'https://coreui.io/pro/', 'cui-layers');
        /* user menu */
        $this->menuName = 'user';
        $this->insertLink('Dashboard', '/', 'cui-speedometer');
        $this->insertTitle('Theme');
        $this->insertLink('Colors', '/colors', 'cui-drop1');
        $this->insertLink('Typography', '/typography', 'cui-pencil');
        $this->beginDropdown('Base', 'cui-puzzle');
            $this->insertLink('Breadcrumb',    '/base/breadcrumb');
            $this->insertLink('Cards',         '/base/cards');
            $this->insertLink('Carousel',      '/base/carousel');
            $this->insertLink('Collapse',      '/base/collapse');
            $this->insertLink('Forms',         '/base/forms');
            $this->insertLink('Jumbotron',     '/base/jumbotron');
            $this->insertLink('List group',    '/base/list-group');
            $this->insertLink('Navs',          '/base/navs');
            $this->insertLink('Pagination',    '/base/pagination');
            $this->insertLink('Popovers',      '/base/popovers');
            $this->insertLink('Progress',      '/base/progress');
            $this->insertLink('Scrollspy',     '/base/scrollspy');
            $this->insertLink('Switches',      '/base/switches');
            $this->insertLink('Tables',        '/base/tables');
            $this->insertLink('Tabs',          '/base/tabs');
            $this->insertLink('Tooltips',      '/base/tooltips');
        $this->endDropdown();
            $this->beginDropdown('Buttons', 'cui-cursor');
            $this->insertLink('Buttons',           '/buttons/buttons');
            $this->insertLink('Buttons Group',     '/buttons/button-group');
            $this->insertLink('Dropdowns',         '/buttons/dropdowns');
            $this->insertLink('Brand Buttons',     '/buttons/brand-buttons');
        $this->endDropdown();
        $this->insertLink('Charts', '/charts', 'cui-chart-pie');
        $this->beginDropdown('Icons', 'cui-star');
            $this->insertLink('CoreUI Icons',      '/icon/coreui-icons');
            $this->insertLink('Flags',             '/icon/flags');
            $this->insertLink('Brands',            '/icon/brands');
        $this->endDropdown();
        $this->beginDropdown('Notifications', 'cui-bell');
            $this->insertLink('Alerts',     '/notifications/alerts');
            $this->insertLink('Badge',      '/notifications/badge');
            $this->insertLink('Modals',     '/notifications/modals');
        $this->endDropdown();
        $this->insertLink('Widgets', '/widgets', 'cui-calculator');
        $this->insertTitle('Extras');
        $this->beginDropdown('Pages', 'cui-star');
            $this->insertLink('Login',         '/login');
            $this->insertLink('Register',      '/register');
            $this->insertLink('Error 404',     '/404');
            $this->insertLink('Error 500',     '/500');
        $this->endDropdown();
        $this->insertLink('Download CoreUI', 'https://coreui.io', 'cui-cloud-download');
        $this->insertLink('Try CoreUI PRO', 'https://coreui.io/pro/', 'cui-layers');

        $this->endDropdown();
        $this->endDropdown();
        $this->endDropdown();
        $this->endDropdown();
        $this->endDropdown();
    }
}
