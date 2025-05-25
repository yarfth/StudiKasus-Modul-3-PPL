<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group Regis
     */
    public function testRegis(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink(link: "Register")
                    ->assertPathIs(path: "/register")
                    ->type(field: "name", value:"neisya")
                    ->type(field: "email", value:"user@gmail.com")
                    ->type(field: "password", value:"password")
                    ->type(field: "password_confirmation", value:"password")
                    ->press(button: "REGISTER")
                    ->assertPathIs(path: '/dashboard');




        });
    }
}