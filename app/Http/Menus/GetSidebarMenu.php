<?php
/*
*   07.11.2019
*   MenusMenu.php
*/
namespace App\Http\Menus;

use App\MenuBuilder\MenuBuilder;
use Illuminate\Support\Facades\DB;
use App\Menus;
use App\MenuBuilder\RenderFromDatabaseData;

class GetSidebarMenu implements MenuInterface{

    private $mb; //menu builder
    private $menu;

    public function __construct(){
        $this->mb = new MenuBuilder();
    }

    private function getMenuFromDB($menuId, $menuName){
        $this->menu = Menus::join('menu_role', 'menus.id', '=', 'menu_role.menus_id')
            ->select('menus.*')
            ->where('menus.menu_id', '=', $menuId)
            ->where('menu_role.role_name', '=', $menuName)
            ->orderBy('menus.sequence', 'asc')->get();       
    }

    private function getGuestMenu(){
        $this->getMenuFromDB(1, 'guest');
    }

    private function getUserMenu(){
        $this->getMenuFromDB(1, 'user');
    }

    private function getAdminMenu(){
        $this->getMenuFromDB(1, 'admin');
    }

    public function get($roles){
        $roles = explode(',', $roles);
        if(empty($roles)){
            $this->getGuestMenu();
        }elseif(in_array('admin', $roles)){
            $this->getAdminMenu();
        }elseif(in_array('user', $roles)){
            $this->getUserMenu();
        }else{
            $this->getGuestMenu();
        }
        $rfd = new RenderFromDatabaseData;
        return $rfd->render($this->menu);
    }

    public function getAll(){
        $this->menu = Menus::select('menus.*')
            ->where('menus.menu_id', '=', 1)
            ->orderBy('menus.sequence', 'asc')->get();  
        $rfd = new RenderFromDatabaseData;
        return $rfd->render($this->menu);
    }
}
