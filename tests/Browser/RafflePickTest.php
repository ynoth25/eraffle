<?php

namespace Tests\Browser;

use App\Models\RafflePick;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RafflePickTest extends DuskTestCase
{
    /**
     * Pick Raffle
     */
    public function testPickRaffle(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/raffle_picks/create')
                ->press('Draw')
                ->assertPathIs('/raffle_picks/create') // Ensure we're on the correct path
                ->assertSee('Entry and prize have been picked successfully!'); // Check for the success message
        });
    }

    /**
     * Pick Raffle
     */
    public function testPickRaffleIsWinner(): void
    {
        $rafflePick = RafflePick::first();
        $this->browse(function (Browser $browser) use($rafflePick) {
            $browser->visit("/raffle_picks/{$rafflePick->id}/edit")
                ->uncheck('input[name="is_winner"]')
                ->press('Save')
                ->assertPathIs("/raffle_picks/{$rafflePick->id}/edit")
                ->assertSee('Raffle updated successfully.');

        });
    }

    /**
     * List raffle picks
     */
    public function testBrowseRafflePicks(): void
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/raffle_picks')
                ->assertSee('Raffle Picks');
        });
    }
}
