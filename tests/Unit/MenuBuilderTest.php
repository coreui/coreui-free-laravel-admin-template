<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\MenuBuilder\MenuBuilder;


class MenuBuilderTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function testAddSingleLinkWitchIcon()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'link',
            'name' => 'name',
            'href' => '/href',
            'hasIcon' => true,
            'icon' => 'icon',
            'iconType' => 'not_core_ui',
            'sequence' => 4
        ));
        $mb = new MenuBuilder();
        $mb->addLink(1, 'name', '/href', 'icon', 'not_core_ui', 4);
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /**
     *
     * @return void
     */
    public function testAddSingleLinkWitchDefaultTypeOfIcon()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'link',
            'name' => 'name',
            'href' => '/href',
            'hasIcon' => true,
            'icon' => 'icon',
            'iconType' => 'coreui',
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->addLink(1, 'name', '/href', 'icon');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /**
     *
     * @return void
     */
    public function testAddSingleLinkNoIcon()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'link',
            'name' => 'name',
            'href' => '/href',
            'hasIcon' => false,
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->addLink(1, 'name', '/href');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /**
     *
     * @return void
     */
    public function testAddThreeLinks()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'link',
            'name' => 'nameOne',
            'href' => '/hrefOne',
            'hasIcon' => false,
            'sequence' => 0
        ),array(
            'id' => 2,
            'slug' => 'link',
            'name' => 'nameTwo',
            'href' => '/hrefTwo',
            'hasIcon' => false,
            'sequence' => 0
        ),array(
            'id' => 3,
            'slug' => 'link',
            'name' => 'nameThree',
            'href' => '/hrefThree',
            'hasIcon' => false,
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->addLink(1, 'nameOne', '/hrefOne');
        $mb->addLink(2, 'nameTwo', '/hrefTwo');
        $mb->addLink(3, 'nameThree', '/hrefThree');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testAddSingleTitleWitchIcon()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'title',
            'name' => 'name',
            'hasIcon' => true,
            'icon' => 'icon',
            'iconType' => 'not_core_ui',
            'sequence' => 4
        ));
        $mb = new MenuBuilder();
        $mb->addTitle(1, 'name', 'icon', 'not_core_ui', 4);
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testAddSingleTitleWitchDefaultIconType()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'title',
            'name' => 'name',
            'hasIcon' => true,
            'icon' => 'icon',
            'iconType' => 'coreui',
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->addTitle(1, 'name', 'icon');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testAddSingleTitleNoIcon()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'title',
            'name' => 'name',
            'hasIcon' => false,
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->addTitle(1, 'name');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testAddThreeTitle()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'title',
            'name' => 'nameOne',
            'hasIcon' => false,
            'sequence' => 0
        ),array(
            'id' => 2,
            'slug' => 'title',
            'name' => 'nameTwo',
            'hasIcon' => false,
            'sequence' => 0
        ),array(
            'id' => 3,
            'slug' => 'title',
            'name' => 'nameThree',
            'hasIcon' => false,
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->addTitle(1, 'nameOne');
        $mb->addTitle(2, 'nameTwo');
        $mb->addTitle(3, 'nameThree');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testBeginDropdownWitchIcon()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'dropdown',
            'name' => 'name',
            'hasIcon' => true,
            'icon' => 'icon',
            'iconType' => 'not_core_ui',
            'elements' => array(),
            'sequence' => 4
        ));
        $mb = new MenuBuilder();
        $mb->beginDropdown(1, 'name', 'icon', 'not_core_ui', 4);
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testBeginDropdownWitchDefaultIconType()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'dropdown',
            'name' => 'name',
            'hasIcon' => true,
            'icon' => 'icon',
            'iconType' => 'coreui',
            'elements' => array(),
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->beginDropdown(1, 'name', 'icon');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testBeginDropdownWitchNoIcon()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'dropdown',
            'name' => 'name',
            'hasIcon' => false,
            'elements' => array(),
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->beginDropdown(1, 'name');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testThreeBeginDropdown()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'dropdown',
            'name' => 'nameOne',
            'hasIcon' => false,
            'elements' => array(),
            'sequence' => 0
        ),array(
            'id' => 2,
            'slug' => 'dropdown',
            'name' => 'nameTwo',
            'hasIcon' => false,
            'elements' => array(),
            'sequence' => 0
        ),array(
            'id' => 3,
            'slug' => 'dropdown',
            'name' => 'nameThree',
            'hasIcon' => false,
            'elements' => array(),
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->beginDropdown(1, 'nameOne');
        $mb->endDropdown();
        $mb->beginDropdown(2, 'nameTwo');
        $mb->endDropdown();
        $mb->beginDropdown(3, 'nameThree');
        $mb->endDropdown();
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    /** 
     * @return void
     */
    public function testBeginDropdownWitchTwoElements()
    {
        $provided = array(array(
            'id' => 1,
            'slug' => 'dropdown',
            'name' => 'name',
            'hasIcon' => false,
            'elements' => array(
                array(
                    'id' => 2,
                    'slug' => 'link',
                    'name' => 'nameOne',
                    'href' => '/href',
                    'hasIcon' => false,
                    'sequence' => 0
                ),
                array(
                    'id' => 3,
                    'slug' => 'link',
                    'name' => 'nameTwo',
                    'href' => '/href',
                    'hasIcon' => false,
                    'sequence' => 0
                )
            ),
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->beginDropdown(1, 'name');
        $mb->addLink(2, 'nameOne', '/href');
        $mb->addLink(3, 'nameTwo', '/href');
        $mb->endDropdown();
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    public function testLinkInDropdownInDropdown(){
        $provided = array(array(
            'id' => 1,
            'slug' => 'dropdown',
            'name' => 'name',
            'hasIcon' => false,
            'elements' => array(array(
                'id' => 2,
                'slug' => 'dropdown',
                'name' => 'nameOne',
                'hasIcon' => false,
                'elements' => array(array(
                    'id' => 3,
                    'slug' => 'link',
                    'name' => 'nameTwo',
                    'href' => '/href',
                    'hasIcon' => false,
                    'sequence' => 0
                )),
                'sequence' => 0
            )),
            'sequence' => 0
        ));
        $mb = new MenuBuilder();
        $mb->beginDropdown(1, 'name');
        $mb->beginDropdown(2, 'nameOne');
        $mb->addLink(3, 'nameTwo', '/href');
        $mb->endDropdown();
        $mb->endDropdown();
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }

    public function testComplex(){
        $provided = array(
            array(
                'id' => 1,
                'slug' => 'title',
                'name' => 'name',
                'hasIcon' => false,
                'sequence' => 0
            ),
            array(
            'id' => 2,
            'slug' => 'dropdown',
            'name' => 'nameOne',
            'hasIcon' => false,
            'elements' => array(
                array(
                    'id' => 3,
                    'slug' => 'link',
                    'name' => 'nameTwo',
                    'href' => '/href',
                    'hasIcon' => false,
                    'sequence' => 0
                ),
                array(
                    'id' => 4,
                    'slug' => 'link',
                    'name' => 'nameTwo',
                    'href' => '/href',
                    'hasIcon' => false,
                    'sequence' => 0
                ),
                array(
                'id' => 5,
                'slug' => 'dropdown',
                'name' => 'nameOne',
                'hasIcon' => false,
                'elements' => array(array(
                    'id' => 6,
                    'slug' => 'link',
                    'name' => 'nameTwo',
                    'href' => '/href',
                    'hasIcon' => false,
                    'sequence' => 0
                )),
                'sequence' => 0
                ),
                array(
                    'id' => 7,
                    'slug' => 'link',
                    'name' => 'nameTwo',
                    'href' => '/href',
                    'hasIcon' => false,
                    'sequence' => 0
                )
            ),
            'sequence' => 0
            ),
            array(
                'id' => 8,
                'slug' => 'link',
                'name' => 'nameTwo',
                'href' => '/href',
                'hasIcon' => false,
                'sequence' => 0
            ) 
        );
        $mb = new MenuBuilder();
        $mb->addTitle(1, 'name');
        $mb->beginDropdown(2, 'nameOne');
        $mb->addLink(3, 'nameTwo', '/href');
        $mb->addLink(4, 'nameTwo', '/href');
        $mb->beginDropdown(5, 'nameOne');
        $mb->addLink(6, 'nameTwo', '/href');

        $mb->endDropdown();
        $mb->addLink(7, 'nameTwo', '/href');

        $mb->endDropdown();
        $mb->addLink(8, 'nameTwo', '/href');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }
}
