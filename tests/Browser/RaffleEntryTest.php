<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RaffleEntryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testSubmitEntry(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/entries/create')
                ->type('name', 'John Doe - Test')
                ->type('email', 'john.doe@example.com')
                ->type('phone', '09171234567')
                ->type('address', '123 Main St, Cityville')
                ->attach('sachet_front_image', __DIR__ . '/files/sachet_front_image.jpg')
                ->attach('sachet_back_image', __DIR__ . '/files/sachet_back_image.jpg')
                ->attach('id_front_image', __DIR__ . '/files/id_front_image.jpg')
                ->attach('id_back_image', __DIR__ . '/files/id_back_image.jpg')
                ->press('Submit')
                ->assertPathIs('/entries/create') // Ensure we're on the correct path
                ->assertSee('Entry submitted successfully!'); // Check for the success message
        });
    }


    /**
     * Test validation errors when required fields are missing.
     */
    public function testValidationErrors(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/entries/create')
                ->press('Submit')
                ->assertSee('The name field is required.')
                ->assertSee('The phone field is required when email is not present.')
                ->assertSee('The sachet front image field is required.')
                ->assertSee('The sachet back image field is required.')
                ->assertSee('The id front image field is required.')
                ->assertSee('The id back image field is required.');
        });
    }

    /**
     * Test validation when email is missing.
     */
    public function testValidationEmailOrPhone(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/entries/create')
                ->type('name', 'John Doe')
                ->type('address', '123 Main St, Cityville')
                ->attach('sachet_front_image', __DIR__ . '/files/sachet_front_image.jpg')
                ->attach('sachet_back_image', __DIR__ . '/files/sachet_back_image.jpg')
                ->attach('id_front_image', __DIR__ . '/files/id_front_image.jpg')
                ->attach('id_back_image', __DIR__ . '/files/id_back_image.jpg')
                ->press('Submit')
                ->assertSee('The phone field is required when email is not present.');
        });
    }
}
