<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogOutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Enterprise')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('Email', 'testweb@gmail.com')
            ->type('Password', 'tes')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->press('tes web')
            ->press('Log Out')
            ->assertPathIs('/');
        });
    }
}
