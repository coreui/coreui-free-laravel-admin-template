<?php
/*
*   07.11.2019
*   MenusMenu.php
*/
namespace App\Http\Menus;

use App\MenuBuilder\MenuBuilder;

class Menus implements MenuInterface{

    private $mb; //menu builder

    public function __construct(){
        $this->mb = new MenuBuilder();
    }

    private function getGuestMenu(){
        $this->mb->addLink('Dashboard', '/', 'cui-speedometer');
        $this->mb->addLink('Login', '/login', 'cui-account-logout');
        $this->mb->addLink('Register', '/register', 'cui-account-logout');
        $this->mb->addLink('Download CoreUI', 'https://coreui.io', 'cui-cloud-download');
        $this->mb->addLink('Try CoreUI PRO', 'https://coreui.io/pro/', 'cui-layers');
    }

    private function getAdminMenu(){
        $this->mb->addLink('Dashboard', '/', 'cui-speedometer');
        $this->mb->addTitle('Theme');
        $this->mb->addLink('Colors', '/colors', 'cui-drop1');
        $this->mb->addLink('Typography', '/typography', 'cui-pencil');
        $this->mb->addTitle('Components');
        $this->mb->beginDropdown('Base', 'cui-puzzle');
            $this->mb->addLink('Breadcrumb',    '/base/breadcrumb');
            $this->mb->addLink('Cards',         '/base/cards');
            $this->mb->addLink('Carousel',      '/base/carousel');
            $this->mb->addLink('Collapse',      '/base/collapse');
            $this->mb->addLink('Forms',         '/base/forms');
            $this->mb->addLink('Jumbotron',     '/base/jumbotron');
            $this->mb->addLink('List group',    '/base/list-group');
            $this->mb->addLink('Navs',          '/base/navs');
            $this->mb->addLink('Pagination',    '/base/pagination');
            $this->mb->addLink('Popovers',      '/base/popovers');
            $this->mb->addLink('Progress',      '/base/progress');
            $this->mb->addLink('Scrollspy',     '/base/scrollspy');
            $this->mb->addLink('Switches',      '/base/switches');
            $this->mb->addLink('Tables',        '/base/tables');
            $this->mb->addLink('Tabs',          '/base/tabs');
            $this->mb->addLink('Tooltips',      '/base/tooltips');
        $this->mb->endDropdown();
        $this->mb->beginDropdown('Buttons', 'cui-cursor');
            $this->mb->addLink('Buttons',           '/buttons/buttons');
            $this->mb->addLink('Buttons Group',     '/buttons/button-group');
            $this->mb->addLink('Dropdowns',         '/buttons/dropdowns');
            $this->mb->addLink('Brand Buttons',     '/buttons/brand-buttons');
        $this->mb->endDropdown();
        $this->mb->addLink('Charts', '/charts', 'cui-chart-pie');
        $this->mb->beginDropdown('Icons', 'cui-star');
            $this->mb->addLink('CoreUI Icons',      '/icon/coreui-icons');
            $this->mb->addLink('Flags',             '/icon/flags');
            $this->mb->addLink('Brands',            '/icon/brands');
        $this->mb->endDropdown();
        $this->mb->beginDropdown('Notifications', 'cui-bell');
            $this->mb->addLink('Alerts',     '/notifications/alerts');
            $this->mb->addLink('Badge',      '/notifications/badge');
            $this->mb->addLink('Modals',     '/notifications/modals');
        $this->mb->endDropdown();
        $this->mb->addLink('Widgets', '/widgets', 'cui-calculator');
        $this->mb->addTitle('Extras');
        $this->mb->beginDropdown('Pages', 'cui-star');
            $this->mb->addLink('Login',         '/login');
            $this->mb->addLink('Register',      '/register');
            $this->mb->addLink('Error 404',     '/404');
            $this->mb->addLink('Error 500',     '/500');
        $this->mb->endDropdown();
        $this->mb->addLink('Download CoreUI', 'https://coreui.io', 'cui-cloud-download');
        $this->mb->addLink('Try CoreUI PRO', 'https://coreui.io/pro/', 'cui-layers');
    }

    public function get($roles){
        $roles = explode(',', $roles);
        if(empty($roles)){
            $this->getGuestMenu();
        }elseif(in_array('user', $roles)){
            $this->getAdminMenu();
        }else{
            $this->getGuestMenu();
        }
        return $this->mb->getResult();
    }

}
