<?php
/*
    13.11.2019
    EditMenuViewService.php
*/

namespace App\Services;

use App\Http\Menus\GetSidebarMenu;

class EditMenuViewService{

    private $getSidebarMenu;
    private $menu;
    private $roleMenu;

    public function __construct(){
        $this->getSidebarMenu = new GetSidebarMenu();
    }

    private function findOnAllDeepById( $arr, $id ){
        $result = false;
        foreach($arr as $ar){
            if($ar['id'] === $id){
                $result = true;
            }elseif($ar['slug'] === 'dropdown'){
                $result = $this->findOnAllDeepById( $ar['elements'] ,$id );
            }
            if($result === true){
                break;
            }
        }
        return $result;
    }

    private function markDoubleOnAllDeep( &$arr, $roleArr){
        for($k=0;$k<count($arr);$k++){
            if($this->findOnAllDeepById( $roleArr, $arr[$k]['id'] )){
                $arr[$k]['assigned'] = true;
            }else{
                $arr[$k]['assigned'] = false;
            }
            if($arr[$k]['slug'] === 'dropdown'){
                $this->markDoubleOnAllDeep( $arr[$k]['elements'], $roleArr );
            }
        }
    } 

    private function joinMenuDataArrays(){
        $this->markDoubleOnAllDeep( $this->menu, $this->roleMenu );
        return $this->menu;
    }


    public function getDataForView( $role ){
        $this->menu = $this->getSidebarMenu->getAll();
        $this->roleMenu = $this->getSidebarMenu->get( $role );
        return $this->joinMenuDataArrays();
    }

}