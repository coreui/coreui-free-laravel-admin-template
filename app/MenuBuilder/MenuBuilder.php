<?php
/*
*   07.11.2019
*   MenuBuilder
*/

namespace App\MenuBuilder;

class MenuBuilder{

    private $menu;
    private $dropdown;

    public function __construct(){
       $this->menu = array();
       $this->dropdown = false; 
    }

    private function addRegularLink($name, $href, $icon, $iconType){
        $hasIcon = $icon === false ? false : true;
        if($hasIcon){
            array_push($this->menu, array(
                'slug' => 'link',
                'name' => $name,
                'href' => $href,
                'hasIcon' => $hasIcon,
                'icon' => $icon,
                'iconType' => $iconType
            ));
        }else{
            array_push($this->menu, array(
                'slug' => 'link',
                'name' => $name,
                'href' => $href,
                'hasIcon' => $hasIcon
            ));
        }
    }

    private function addDropdownLink($name, $href, $icon, $iconType){
        $num = count($this->menu);
        $hasIcon = $icon === false ? false : true;
        if($hasIcon){
            array_push($this->menu[$num-1]['elements'], array(
                'slug' => 'link',
                'name' => $name,
                'href' => $href,
                'hasIcon' => $hasIcon,
                'icon' => $icon,
                'iconType' => $iconType
            ));
        }else{
            array_push($this->menu[$num-1]['elements'], array(
                'slug' => 'link',
                'name' => $name,
                'href' => $href,
                'hasIcon' => $hasIcon
            ));
        }
    }

    public function addLink($name, $href, $icon = false, $iconType = 'coreui'){
        if($this->dropdown === true){
            $this->addDropdownLink($name, $href, $icon, $iconType);
        }else{
            $this->addRegularLink($name, $href, $icon, $iconType);
        }
    }

    public function addTitle($name, $icon = false, $iconType = 'coreui'){
        $hasIcon = $icon === false ? false : true;
        if($hasIcon){
            array_push($this->menu, array(
                'slug' => 'title',
                'name' => $name,
                'hasIcon' => $hasIcon,
                'icon' => $icon,
                'iconType' => $iconType
            ));
        }else{
            array_push($this->menu, array(
                'slug' => 'title',
                'name' => $name,
                'hasIcon' => $hasIcon
            ));
        }
    }

    public function beginDropdown($name, $icon = false, $iconType = 'coreui'){
        if($this->dropdown === true){
            throw new Exception('Starting dropdown inside dropdown');
        }
        $this->dropdown = true;
        $hasIcon = $icon === false ? false : true;
        if($hasIcon){
            array_push($this->menu, array(
                'slug' => 'dropdown',
                'name' => $name,
                'hasIcon' => $hasIcon,
                'icon' => $icon,
                'iconType' => $iconType,
                'elements' => array()
            ));
        }else{
            array_push($this->menu, array(
                'slug' => 'dropdown',
                'name' => $name,
                'hasIcon' => $hasIcon,
                'elements' => array()
            ));
        }
    }

    public function endDropdown(){
        $this->dropdown = false;
    }

    public function getResult(){
        return $this->menu;
    }



    
}