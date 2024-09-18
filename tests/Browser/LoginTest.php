<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
//        $user = User::factory()->create([
//            'email' => 'taylor@laravelssss.com',
//        ]);

        $this->browse(function (Browser $browser){
            $browser->visit('/login');
//                ->type('email', $user->email)
//                ->type('password', 'password')
//                ->press('Login')
//                ->assertPathIs('/home');
        });
    }
}
