<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ShowNotesTest extends DuskTestCase
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
                    ->type('Email', 'tesweb@gmail.com')
                    ->type('Password', 'tes')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->press('Tes T')
                    ->assertPathIs('/note/1')
                    ->assertSee('Tes T');
        });
    }
}
