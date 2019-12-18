<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\MenuBuilder\RenderFromDatabaseData;

class RenderFromDatabaseDataTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function testRenderSimpleInput()
    {
        $input = array(
            array(
                'id' => '1',
                'name' => 'Dashboard',
                'href' => '/',
                'icon' => 'cui-speedometer',
                'slug' => 'link',
                'parent_id' => NULL,
                'menu_id' => '1',
                'sequence' => '1'
            ),
        );
        $provided = array(array(
            'id' => '1',
            'slug' => 'link',
            'name' => 'Dashboard',
            'href' => '/',
            'hasIcon' => true,
            'icon' => 'cui-speedometer',
            'iconType' => 'coreui',
            'sequence' => '1'
        ));        
        $rfd = new RenderFromDatabaseData();
        $result = $rfd->render($input);
        $this->assertSame($result, $provided);
    }

    /**
     *
     * @return void
     */
    public function testRender()
    {
        $input = array(
            array(
                'id' => '1',
                'name' => 'Dashboard',
                'href' => '/',
                'icon' => 'cui-speedometer',
                'slug' => 'link',
                'parent_id' => NULL,
                'menu_id' => '1',
                'sequence' => '1'
            ),
            array(
                'id' => '7',
                'name' => 'Base',
                'href' => NULL,
                'icon' => 'cui-puzzle',
                'slug' => 'dropdown',
                'parent_id' => NULL,
                'menu_id' => '1',
                'sequence' => '7',
            ),
            array(
                'id' => '8',
                'name' => 'Breadcrumb',
                'href' => '/base/breadcrumb',
                'icon' => NULL,
                'slug' => 'link',
                'parent_id' => '7',
                'menu_id' => '1',
                'sequence' => '8'
            )
        );
        $provided = array(array(
            'id' => '1',
            'slug' => 'link',
            'name' => 'Dashboard',
            'href' => '/',
            'hasIcon' => true,
            'icon' => 'cui-speedometer',
            'iconType' => 'coreui',
            'sequence' => '1'
        ),
        array(
            'id' => '7',
            'slug' => 'dropdown',
            'name' => 'Base',
            'hasIcon' => true,
            'icon' => 'cui-puzzle',
            'iconType' => 'coreui',
            'elements' => array(
                array(
                    'id' => '8',
                    'slug' => 'link',
                    'name' => 'Breadcrumb',
                    'href' => '/base/breadcrumb',
                    'hasIcon' => false,
                    'sequence' => '8'
                )
            ),
            'sequence' => '7'
        ));        
        $rfd = new RenderFromDatabaseData();
        $result = $rfd->render($input);
        $this->assertSame($result, $provided);
    }
}
