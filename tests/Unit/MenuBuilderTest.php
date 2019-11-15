<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\MenuBuilder\MenuBuilder;


class MenuBuilderTest extends TestCase
{
    /**
     * A basic unit test example.
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
        ));
        $mb = new MenuBuilder();
        $mb->addLink(1, 'name', '/href', 'icon', 'not_core_ui');
        $result = $mb->getResult();
        $this->assertSame($provided, $result);
    }
}
