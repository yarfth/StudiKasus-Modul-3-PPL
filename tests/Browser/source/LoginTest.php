<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink(link: "Log in")
            ->assertPathIs(path: "/login")
            ->type(field: "email", value:"user@gmail.com")
            ->type(field: "password", value:"password")
            ->press(button: "LOG IN")
            ->assertPathIs(path: "/dashboard");
        });
    }
}