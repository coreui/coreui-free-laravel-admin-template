<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Spatie\Permission\Models\Role;

class _aCoreUITest extends TestCase
{
    use DatabaseMigrations;

    public function setUp() :void {
        parent::setUp();
    }

    public function testHomepage(){
        $response = $this->get( '/' );
        $response->assertStatus(200);
    }

    public function testColors(){
        $response = $this->get( '/colors' );
        $response->assertStatus(403);
    }

    public function testColorsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/colors' );
        $response->assertStatus(200);
    }

    public function testTypography(){
        $response = $this->get( '/typography' );
        $response->assertStatus(403);
    }   

    public function testTypographyActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/typography' );
        $response->assertStatus(200);
    }

/* ################   BASE   ############### */
    public function testBaseBreadcrumb(){
        $response = $this->get( '/base/breadcrumb' );
        $response->assertStatus(403);
    }

    public function testBaseBreadcrumbActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/breadcrumb' );
        $response->assertStatus(200);
    }

    public function testBaseCards(){
        $response = $this->get( '/base/cards' );
        $response->assertStatus(403);
    }

    public function testBaseCardsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/cards' );
        $response->assertStatus(200);
    }

    public function testBaseCarousel(){
        $response = $this->get( '/base/carousel' );
        $response->assertStatus(403);
    }

    public function testBaseCarouselActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/carousel' );
        $response->assertStatus(200);
    }

    public function testBaseCollapse(){
        $response = $this->get( '/base/collapse' );
        $response->assertStatus(403);
    }

    public function testBaseCollapseActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/collapse' );
        $response->assertStatus(200);
    }

    public function testBaseForms(){
        $response = $this->get( '/base/forms' );
        $response->assertStatus(403);
    }

    public function testBaseFormsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/forms' );
        $response->assertStatus(200);
    }

    public function testBaseJumbotron(){
        $response = $this->get( '/base/jumbotron' );
        $response->assertStatus(403);
    }

    public function testBaseJumbotronActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/jumbotron' );
        $response->assertStatus(200);
    }

    public function testBaseListgroup(){
        $response = $this->get( '/base/list-group' );
        $response->assertStatus(403);
    }

    public function testBaseBaseListgroupActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/list-group' );
        $response->assertStatus(200);
    }

    public function testBaseNavs(){
        $response = $this->get( '/base/navs' );
        $response->assertStatus(403);
    }

    public function testBaseNavsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/navs' );
        $response->assertStatus(200);
    }    

    public function testBasePagination(){
        $response = $this->get( '/base/pagination' );
        $response->assertStatus(403);
    }

    public function testBasePaginationActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/pagination' );
        $response->assertStatus(200);
    }

    public function testBasePopovers(){
        $response = $this->get( '/base/popovers' );
        $response->assertStatus(403);
    }

    public function testBasePopoversActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/popovers' );
        $response->assertStatus(200);
    }

    public function testBaseProgress(){
        $response = $this->get( '/base/progress' );
        $response->assertStatus(403);
    }

    public function testBaseProgressActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/progress' );
        $response->assertStatus(200);
    }

    public function testBaseScrollSpy(){
        $response = $this->get( '/base/scrollspy' );
        $response->assertStatus(403);
    }

    public function testBaseScrollspyActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/scrollspy' );
        $response->assertStatus(200);
    }

    public function testBaseSwitches(){
        $response = $this->get( '/base/switches' );
        $response->assertStatus(403);
    }

    public function testBaseSwitchesActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/switches' );
        $response->assertStatus(200);
    }

    public function testBaseTables(){
        $response = $this->get( '/base/tables' );
        $response->assertStatus(403);
    }

    public function testBaseTablesActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/tables' );
        $response->assertStatus(200);
    }

    public function testBaseTabs(){
        $response = $this->get( '/base/tabs' );
        $response->assertStatus(403);
    }

    public function testBaseTabsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/tabs' );
        $response->assertStatus(200);
    }

    public function testBaseTooltips(){
        $response = $this->get( '/base/tooltips' );
        $response->assertStatus(403);
    }

    public function testBaseTooltipsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/base/tooltips' );
        $response->assertStatus(200);
    }

/* #################   BUTTONS   ###################  */
    public function testButtonsButtons(){
        $response = $this->get( '/buttons/buttons' );
        $response->assertStatus(403);
    }

    public function testButtonsButtonsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/buttons/buttons' );
        $response->assertStatus(200);
    }

    public function testButtonsButtongroup(){
        $response = $this->get( '/buttons/button-group' );
        $response->assertStatus(403);
    }

    public function testButtonsButtonsgroupActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/buttons/button-group' );
        $response->assertStatus(200);
    }

    public function testButtonsDropdowns(){
        $response = $this->get( '/buttons/dropdowns' );
        $response->assertStatus(403);
    }

    public function testButtonsDropdownsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/buttons/dropdowns' );
        $response->assertStatus(200);
    }

    public function testBrandButtons(){
        $response = $this->get( '/buttons/brand-buttons' );
        $response->assertStatus(403);
    }

    public function testBrandButtonsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/buttons/brand-buttons' );
        $response->assertStatus(200);
    }

/*  ##################    CHARTS    ################ */

    public function testCharts(){
        $response = $this->get( '/charts' );
        $response->assertStatus(403);
    }

    public function testChartsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/charts' );
        $response->assertStatus(200);
    }

/*  #################    ICONS    ################# */
    public function testIconsCoreuiIcons(){
        $response = $this->get( '/icon/coreui-icons' );
        $response->assertStatus(403);
    }

    public function testIconsCoreuiIconsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/icon/coreui-icons' );
        $response->assertStatus(200);
    }

    public function testIconsFlags(){
        $response = $this->get( '/icon/flags' );
        $response->assertStatus(403);
    }

    public function testIconsFlagsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/icon/flags' );
        $response->assertStatus(200);
    }

    public function testIconsBrands(){
        $response = $this->get( '/icon/brands' );
        $response->assertStatus(403);
    }

    public function testIconsBrandsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/icon/brands' );
        $response->assertStatus(200);
    }
    
/*  ###############    NOTIFICATIONS    ################# */
    public function testNotificationsAlerts(){
        $response = $this->get( '/notifications/alerts' );
        $response->assertStatus(403);
    }

    public function testNotificationsAlertsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/notifications/alerts' );
        $response->assertStatus(200);
    }

    public function testNotificationsBadge(){
        $response = $this->get( '/notifications/badge' );
        $response->assertStatus(403);
    }

    public function testNotificationsBadgeActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/notifications/badge' );
        $response->assertStatus(200);
    }

    public function testNotificationsModals(){
        $response = $this->get( '/notifications/modals' );
        $response->assertStatus(403);
    }

    public function testNotificationsModalsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/notifications/modals' );
        $response->assertStatus(200);
    }

/*  ##############   WIDGETS   ###############  */
    public function testWidgets(){
        $response = $this->get( '/widgets' );
        $response->assertStatus(403);
    }

    public function testWidgetsActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/widgets' );
        $response->assertStatus(200);
    }

/*  ##############    PAGES    ############### */
    public function testLogin(){
        $response = $this->get( '/login' );
        $response->assertStatus(200);
    }

    public function testRegister(){
        $response = $this->get( '/register' );
        $response->assertStatus(200);
    }

    public function test404(){
        $response = $this->get( '/404' );
        $response->assertStatus(403);
    }

    public function test404ActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/404' );
        $response->assertStatus(200);
    }

    public function test500(){
        $response = $this->get( '/500' );
        $response->assertStatus(403);
    }

    public function test500ActingAsUser(){
        $user = factory('App\User')->create();
        Role::create(['name' => 'user']);
        $user->assignRole('user');
        $response = $this->actingAs($user)->get( '/500' );
        $response->assertStatus(200);
    }
}
