<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'user@gmail.com')
            ->type('password', 'password')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->click('#click-dropdown')
            ->clickLink('Log Out')
            ->assertPathIs('/');


        });
    }
}