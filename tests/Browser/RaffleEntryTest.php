<?php

namespace Tests\Browser;

use App\Models\Promo;
use App\Models\Validation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RaffleEntryTest extends DuskTestCase
{

    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed specific data before each test
        $this->seed(SpecificSeeder::class);
    }

    public function testSubmitEntryWithCompleteDetails(): void
    {
        // Create records for use in tests
        $promo = Promo::create([
            'name' => 'A test promo',
            'description' => 'A test promo',
            'start_date' => now(),
            'end_date' => now(), // Set end_date to NULL as required
            'terms_and_conditions' => 'Should be 18  and above'
        ]);

        $sachet = Validation::create([
            'promo_id' => $promo->id,
            'serial_number' => 'Test Serial Number',
            'status' => 'unused',
        ]);

        $this->browse(function (Browser $browser) use ($sachet) {
            $browser->visit('/submit/entry')
                ->type('name', 'John Doe - Test')
                ->type('email', 'john.doe@example.com')
                ->type('phone', '09171234567')
                ->type('address', '123 Main St, Cityville')
                ->type('serial_number', $sachet->serial_number)
                ->press('Submit')
                ->assertPathIs('/submit/entry')
                ->assertSee('Entry submitted successfully!');
        });
    }

//    public function testSubmitEntryWithUsedSerialNumber(): void
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/submit/entry')
//                ->type('name', 'John Doe - Test')
//                ->type('email', 'john.doe@example.com')
//                ->type('phone', '09171234567')
//                ->type('address', '123 Main St, Cityville')
//                ->type('serial_number', $this->sachet->serial_number)
//                ->press('Submit')
//                ->assertPathIs('/submit/entry')
//                ->assertSee('The serial number has already been taken.');
//        });
//    }

    public function testSubmitEntryWithInvalidSerialNumber(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/submit/entry')
                ->type('name', 'John Doe - Test')
                ->type('email', 'john.doe@example.com')
                ->type('phone', '09171234567')
                ->type('address', '123 Main St, Cityville')
                ->type('serial_number', 'This is invalid serial number')
                ->press('Submit')
                ->assertPathIs('/submit/entry')
                ->assertSee('The selected serial number is invalid.');
        });
    }

    public function testSubmitEntryWithoutUsedSerialNumber(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/entries/create')
                ->type('name', 'John Doe')
                ->type('address', '123 Main St, Cityville')
                ->press('Submit')
                ->assertSee('The serial number field is required.')
                ->assertSee('The phone field is required when email is not present.');
        });
    }

    public function testSubmitEntryWithoutDetails(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/entries/create')
                ->press('Submit')
                ->assertSee('The name field is required.')
                ->assertSee('The serial number field is required.')
                ->assertSee('The phone field is required when email is not present.');
        });
    }

    public function testSubmitEntryWithoutEmailAndPhone(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/entries/create')
                ->type('name', 'John Doe')
                ->type('address', '123 Main St, Cityville')
                ->press('Submit')
                ->assertSee('The serial number field is required.')
                ->assertSee('The phone field is required when email is not present.');
        });
    }
}
