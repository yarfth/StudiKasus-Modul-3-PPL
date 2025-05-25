<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ShowNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group show
     */
    public function testShow(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'user@gmail.com')
            ->type('password', 'password')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->click('@detail-7')
            ->assertPathIs('/note/7');

        });
    }
}