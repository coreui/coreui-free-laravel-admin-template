<?php
/*
*   07.11.2019
*   MenuBuilder
*/

namespace App\MenuBuilder;

class MenuBuilder{

    private $menu;
    private $dropdown;
    private $dropdownDeep;

    public function __construct(){
       $this->menu = array();
       $this->dropdown = false; 
       $this->dropdownDeep = 0;
    }

    private function innerAddElementToMenuLastPosition(&$menu, $element, $offset){
        $z = 1;
        $result = false;
        $menu = &$menu[count($menu)-1];
        while(is_array($menu)){
            if($z == $this->dropdownDeep - $offset){
                array_push($menu['elements'], $element);
                $result = true;
                break;
            }
            $menu = &$menu['elements'][count($menu['elements'])-1];
            $z++;
        }
        return $result;
    }

    private function addElementToMenuLastPosition($element, $offset = 0){
        return $this->innerAddElementToMenuLastPosition($this->menu, $element, $offset);
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
            $this->addElementToMenuLastPosition(array(
                'slug' => 'link',
                'name' => $name,
                'href' => $href,
                'hasIcon' => $hasIcon,
                'icon' => $icon,
                'iconType' => $iconType
            ));
         }else{
            $this->addElementToMenuLastPosition(array(
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
        //if($this->dropdown === true){
        //    throw new Exception('Starting dropdown inside dropdown');
        //}
        $this->dropdown = true;
        $this->dropdownDeep++;
        $hasIcon = $icon === false ? false : true;
        if($this->dropdownDeep === 1){
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
        }else{
            if($hasIcon){
                $this->addElementToMenuLastPosition(array(
                    'slug' => 'dropdown',
                    'name' => $name,
                    'hasIcon' => $hasIcon,
                    'icon' => $icon,
                    'iconType' => $iconType,
                    'elements' => array()
                ), 1);
            }else{
                $this->addElementToMenuLastPosition(array(
                    'slug' => 'dropdown',
                    'name' => $name,
                    'hasIcon' => $hasIcon,
                    'elements' => array()
                ), 1);
            }
        }

    }

    public function endDropdown(){
        $this->dropdown = false;
        $this->dropdownDeep--;
        if($this->dropdownDeep < 0){
            $this->dropdownDeep = 0;
        }
    }

    public function getResult(){
        return $this->menu;
    }



    
}