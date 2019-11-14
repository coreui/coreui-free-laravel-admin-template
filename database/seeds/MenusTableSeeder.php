<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    private $menuId = null;
    private $dropdownId = array();
    private $dropdown = false;
    private $sequence = 1;
    private $joinData = array();

    public function join($roles, $menusId){
        $roles = explode(',', $roles);
        foreach($roles as $role){
            array_push($this->joinData, array('role_name' => $role, 'menus_id' => $menusId));
        }
    }

    /*
        Function assigns menu elements to roles
        Must by use on end of this seeder
    */
    public function joinAllByTransaction(){
        DB::beginTransaction();
        foreach($this->joinData as $data){
            DB::table('menu_role')->insert([
                'role_name' => $data['role_name'],
                'menus_id' => $data['menus_id'],
            ]);
        }
        DB::commit();
    }

    public function insertLink($roles, $name, $href, $icon = null){
        if($this->dropdown === false){
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_id' => $this->menuId,
                'sequence' => $this->sequence
            ]);
        }else{
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_id' => $this->menuId,
                'parent_id' => $this->dropdownId[count($this->dropdownId) - 1],
                'sequence' => $this->sequence
            ]);
        }
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
        return $lastId;
    }

    public function insertTitle($roles, $name){
        DB::table('menus')->insert([
            'slug' => 'title',
            'name' => $name,
            'menu_id' => $this->menuId,
            'sequence' => $this->sequence
        ]);
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
        return $lastId;
    }

    public function beginDropdown($roles, $name, $icon){
        if(count($this->dropdownId)){
            $parentId = $this->dropdownId[count($this->dropdownId) - 1];
        }else{
            $parentId = null;
        }
        DB::table('menus')->insert([
            'slug' => 'dropdown',
            'name' => $name,
            'icon' => $icon,
            'menu_id' => $this->menuId,
            'sequence' => $this->sequence,
            'parent_id' => $parentId
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        array_push($this->dropdownId, $lastId);
        $this->dropdown = true;
        $this->sequence++;
        $this->join($roles, $lastId);
        return $lastId;
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
        $this->insertLink('guest,user,admin', 'Dashboard', '/', 'cui-speedometer');
        $this->insertLink('guest', 'Login', '/login', 'cui-account-logout');
        $this->insertLink('guest', 'Register', '/register', 'cui-account-logout');
        $this->insertTitle('user,admin', 'Theme');
        $this->insertLink('user,admin', 'Colors', '/colors', 'cui-drop1');
        $this->insertLink('user,admin', 'Typography', '/typography', 'cui-pencil');
        $this->beginDropdown('user,admin', 'Base', 'cui-puzzle');
            $this->insertLink('user,admin', 'Breadcrumb',    '/base/breadcrumb');
            $this->insertLink('user,admin', 'Cards',         '/base/cards');
            $this->insertLink('user,admin', 'Carousel',      '/base/carousel');
            $this->insertLink('user,admin', 'Collapse',      '/base/collapse');
            $this->insertLink('user,admin', 'Forms',         '/base/forms');
            $this->insertLink('user,admin', 'Jumbotron',     '/base/jumbotron');
            $this->insertLink('user,admin', 'List group',    '/base/list-group');
            $this->insertLink('user,admin', 'Navs',          '/base/navs');
            $this->insertLink('user,admin', 'Pagination',    '/base/pagination');
            $this->insertLink('user,admin', 'Popovers',      '/base/popovers');
            $this->insertLink('user,admin', 'Progress',      '/base/progress');
            $this->insertLink('user,admin', 'Scrollspy',     '/base/scrollspy');
            $this->insertLink('user,admin', 'Switches',      '/base/switches');
            $this->insertLink('user,admin', 'Tables',        '/base/tables');
            $this->insertLink('user,admin', 'Tabs',          '/base/tabs');
            $this->insertLink('user,admin', 'Tooltips',      '/base/tooltips');
        $this->endDropdown();
            $this->beginDropdown('user,admin', 'Buttons', 'cui-cursor');
            $this->insertLink('user,admin', 'Buttons',           '/buttons/buttons');
            $this->insertLink('user,admin', 'Buttons Group',     '/buttons/button-group');
            $this->insertLink('user,admin', 'Dropdowns',         '/buttons/dropdowns');
            $this->insertLink('user,admin', 'Brand Buttons',     '/buttons/brand-buttons');
        $this->endDropdown();
        $this->insertLink('user,admin', 'Charts', '/charts', 'cui-chart-pie');
        $this->beginDropdown('user,admin', 'Icons', 'cui-star');
            $this->insertLink('user,admin', 'CoreUI Icons',      '/icon/coreui-icons');
            $this->insertLink('user,admin', 'Flags',             '/icon/flags');
            $this->insertLink('user,admin', 'Brands',            '/icon/brands');
        $this->endDropdown();
        $this->beginDropdown('user,admin', 'Notifications', 'cui-bell');
            $this->insertLink('user,admin', 'Alerts',     '/notifications/alerts');
            $this->insertLink('user,admin', 'Badge',      '/notifications/badge');
            $this->insertLink('user,admin', 'Modals',     '/notifications/modals');
        $this->endDropdown();
        $this->insertLink('user,admin', 'Widgets', '/widgets', 'cui-calculator');
        $this->insertTitle('user,admin', 'Extras');
        $this->beginDropdown('user,admin', 'Pages', 'cui-star');
            $this->insertLink('user,admin', 'Login',         '/login');
            $this->insertLink('user,admin', 'Register',      '/register');
            $this->insertLink('user,admin', 'Error 404',     '/404');
            $this->insertLink('user,admin', 'Error 500',     '/500');
        $this->endDropdown();
        $this->insertLink('guest,user,admin', 'Download CoreUI', 'https://coreui.io', 'cui-cloud-download');
        $this->insertLink('guest,user,admin', 'Try CoreUI PRO', 'https://coreui.io/pro/', 'cui-layers');

        $this->joinAllByTransaction(); ///   <===== Must by use on end of this seeder
    }
}
