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
        $this->menu = Menus::where('menu_id', '=', $menuId)->where('menu_name', '=', $menuName)->orderBy('sequence', 'asc')->get();
    }

    private function getGuestMenu(){
        $this->getMenuFromDB(1, 'guest');
    }

    private function getUserMenu(){
        $this->getMenuFromDB(1, 'user');
    }

    public function get($roles){
        $roles = explode(',', $roles);
        if(empty($roles)){
            $this->getGuestMenu();
        }elseif(in_array('user', $roles)){
            $this->getUserMenu();
        }else{
            $this->getGuestMenu();
        }
        $rfd = new RenderFromDatabaseData;
        return $rfd->render($this->menu);
    }

}
