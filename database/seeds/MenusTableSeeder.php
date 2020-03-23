<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class MenusTableSeeder extends Seeder
{
    private $menuId = null;
    private $dropdownId = array();
    private $dropdown = false;
    private $sequence = 1;
    private $joinData = array();
    private $adminRole = null;
    private $userRole = null;
    private $subFolder = '';

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
        $href = $this->subFolder . $href;
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
        $permission = Permission::where('name', '=', $name)->get();
        if(empty($permission)){
            $permission = Permission::create(['name' => 'visit ' . $name]);
        }
        $roles = explode(',', $roles);
        if(in_array('user', $roles)){
            $this->userRole->givePermissionTo($permission);
        }
        if(in_array('admin', $roles)){
            $this->adminRole->givePermissionTo($permission);
        }
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

    public function beginDropdown($roles, $name, $icon = ''){
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
        /* Get roles */
        $this->adminRole = Role::where('name' , '=' , 'admin' )->first();
        $this->userRole = Role::where('name', '=', 'user' )->first();
        /* Create Sidebar menu */
        DB::table('menulist')->insert([
            'name' => 'sidebar menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId
        $this->insertLink('guest,user,admin', 'Dashboard', '/', 'cil-speedometer');
        $this->beginDropdown('admin', 'Settings', 'cil-calculator');
            $this->insertLink('admin', 'Notes',                   '/notes');
            $this->insertLink('admin', 'Users',                   '/users');
            $this->insertLink('admin', 'Edit menu',               '/menu/menu');
            $this->insertLink('admin', 'Edit menu elements',      '/menu/element');
            $this->insertLink('admin', 'Edit roles',              '/roles');
            $this->insertLink('admin', 'Media',                   '/media');
            $this->insertLink('admin', 'BREAD',                   '/bread');
            $this->insertLink('admin', 'Email',                   '/mail');
        $this->endDropdown();
        $this->insertLink('guest', 'Login', '/login', 'cil-account-logout');
        $this->insertLink('guest', 'Register', '/register', 'cil-account-logout');
        $this->insertTitle('user,admin', 'Theme');
        $this->insertLink('user,admin', 'Colors', '/colors', 'cil-drop1');
        $this->insertLink('user,admin', 'Typography', '/typography', 'cil-pencil');
        $this->beginDropdown('user,admin', 'Base', 'cil-puzzle');
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
            $this->beginDropdown('user,admin', 'Buttons', 'cil-cursor');
            $this->insertLink('user,admin', 'Buttons',           '/buttons/buttons');
            $this->insertLink('user,admin', 'Buttons Group',     '/buttons/button-group');
            $this->insertLink('user,admin', 'Dropdowns',         '/buttons/dropdowns');
            $this->insertLink('user,admin', 'Brand Buttons',     '/buttons/brand-buttons');
        $this->endDropdown();
        $this->insertLink('user,admin', 'Charts', '/charts', 'cil-chart-pie');
        $this->beginDropdown('user,admin', 'Icons', 'cil-star');
            $this->insertLink('user,admin', 'CoreUI Icons',      '/icon/coreui-icons');
            $this->insertLink('user,admin', 'Flags',             '/icon/flags');
            $this->insertLink('user,admin', 'Brands',            '/icon/brands');
        $this->endDropdown();
        $this->beginDropdown('user,admin', 'Notifications', 'cil-bell');
            $this->insertLink('user,admin', 'Alerts',     '/notifications/alerts');
            $this->insertLink('user,admin', 'Badge',      '/notifications/badge');
            $this->insertLink('user,admin', 'Modals',     '/notifications/modals');
        $this->endDropdown();
        $this->insertLink('user,admin', 'Widgets', '/widgets', 'cil-calculator');
        $this->insertTitle('user,admin', 'Extras');
        $this->beginDropdown('user,admin', 'Pages', 'cil-star');
            $this->insertLink('user,admin', 'Login',         '/login');
            $this->insertLink('user,admin', 'Register',      '/register');
            $this->insertLink('user,admin', 'Error 404',     '/404');
            $this->insertLink('user,admin', 'Error 500',     '/500');
        $this->endDropdown();
        $this->insertLink('guest,user,admin', 'Download CoreUI', 'https://coreui.io', 'cil-cloud-download');
        $this->insertLink('guest,user,admin', 'Try CoreUI PRO', 'https://coreui.io/pro/', 'cil-layers');


        /* Create top menu */
        DB::table('menulist')->insert([
            'name' => 'top menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId
        $this->beginDropdown('guest,user,admin', 'Pages');
        $id = $this->insertLink('guest,user,admin', 'Dashboard',    '/');
        $id = $this->insertLink('user,admin', 'Notes',              '/notes');
        $id = $this->insertLink('admin', 'Users',                   '/users');
        $this->endDropdown();
        $id = $this->beginDropdown('admin', 'Settings');

        $id = $this->insertLink('admin', 'Edit menu',               '/menu/menu');
        $id = $this->insertLink('admin', 'Edit menu elements',      '/menu/element');
        $id = $this->insertLink('admin', 'Edit roles',              '/roles');
        $id = $this->insertLink('admin', 'Media',                   '/media');
        $id = $this->insertLink('admin', 'BREAD',                   '/bread');
        $this->endDropdown();

        $this->joinAllByTransaction(); ///   <===== Must by use on end of this seeder
    }
}
