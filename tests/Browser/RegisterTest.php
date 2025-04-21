<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('Name', 'Ikhwan Amiruddin')
                    ->type('Email', 'ikhwanamrdn@gmail.com')
                    ->type('Password', 'ikhwan')
                    ->type('Confirm Password', 'ikhwan')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
