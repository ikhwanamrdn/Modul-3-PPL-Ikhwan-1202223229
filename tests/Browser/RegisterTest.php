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
                    ->assertSee('Enterprise Application Development')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'Ikhwan Amiruddin')
                    ->type('email', 'ikhwanamrdn@gmail.com')
                    ->type('password', 'ikhwan')
                    ->type('password_confirmation', 'ikhwan')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
