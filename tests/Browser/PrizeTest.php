<?php

namespace Tests\Browser;

use App\Models\Prize;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PrizeTest extends DuskTestCase
{
    /**
     * Create prize
     */
    public function testCreatePrize(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/prizes/create')
                ->type('code', 'AAAAAAAAAAAAAAAAXYYYZZZ11')
                ->type('description', 'Eletric Fan')
                ->press('Submit')
                ->assertPathIs('/prizes/create') // Ensure we're on the correct path
                ->assertSee('Prize created successfully.'); // Check for the success message
        });
    }

    /**
     * Test updating a prize.
     *
     * @return void
     */
    public function testUpdatePrize(): void
    {
        $prize = Prize::first(); // Make sure there's a prize to update

        $this->browse(function (Browser $browser) use ($prize) {
            $browser->visit("/prizes/{$prize->id}/edit") // Adjust the path if needed
                ->type('code', 'updated') // Fill in the form fields
                ->type('description', 'updated')
                ->type('status', 'Active') // Include all required fields
                ->press('Submit') // Click the submit button
                ->assertPathIs("/prizes/{$prize->id}/edit") // Adjust the path according to your app's redirect
                ->assertSee('Prize updated successfully.'); // Check for the success message
        });
    }

    /**
     * Create prize
     */
    public function testBrowsePrizes(): void
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/prizes')
                ->assertSee('Prizes');
        });
    }


    /**
     * Test validation errors when required fields are missing.
     */
    public function testValidationWithoutFilesErrors(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/prizes/create')
                ->press('Submit')
                ->assertSee('The code field is required when file is not present.')
                ->assertSee('The description field is required when file is not present.');
        });
    }

    /**
     * Test validation when email is missing.
     */
    public function testImportPrizeFromExcelFile(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/prizes/create')
                ->attach('file', __DIR__ . '/files/Prizes.xlsx')
                ->press('Submit')
                ->assertPathIs('/prizes/create') // Ensure we're on the correct path
                ->assertSee('Data imported successfully'); // Check for the success message
        });
    }
}
