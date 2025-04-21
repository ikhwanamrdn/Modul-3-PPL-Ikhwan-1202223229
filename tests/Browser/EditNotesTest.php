<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise Application Development')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'tesweb@gmail.com')
                    ->type('password', 'tes')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->press('Edit')
                    ->assertPathIs('edit-note-page/1')
                    ->type('Title', 'Test T')
                    ->type('Description', 'Tes D')
                    ->press('UPDATE')
                    ->assertPathIs('/notes');
        });
    }
}
