<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NotesTest extends DuskTestCase
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
                    ->press('Create Note')
                    ->assertPathIs('/create-note')
                    ->type('Title', 'Test Note')
                    ->type('Description', 'ini adalah deskripsi')
                    ->press('CREATE')
                    ->assertPathIs('/notes')
                    ->assertSee('Test Note')
                    ->assertSee('ini adalah deskripsi');
        });
    }
}
