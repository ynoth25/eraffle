<?php

namespace Tests;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Illuminate\Support\Collection;
use Laravel\Dusk\TestCase as BaseTestCase;
use PHPUnit\Framework\Attributes\BeforeClass;
use Illuminate\Support\Facades\Log;

abstract class DuskTestCase extends BaseTestCase
{

    /**
     * Prepare for Dusk test execution.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        // Set up the database for Dusk
        $this->artisan('migrate');
    }

    /**
     * Prepare for Dusk test execution.
     */
    #[BeforeClass]
    public static function prepare(): void
    {
//        if (! static::runningInSail()) {
//            static::startChromeDriver();  // No need to pass options here
//        }
    }

    /**
     * Create the RemoteWebDriver instance.
     */
    protected function driver(): RemoteWebDriver
    {
        $options = (new ChromeOptions)->addArguments(collect([
            $this->shouldStartMaximized() ? '--start-maximized' : '--window-size=1920,1080',
            '--disable-search-engine-choice-screen',
        ])->unless($this->hasHeadlessDisabled(), function (Collection $items) {
            return $items->merge([
//                '--disable-gpu',
                '--headless=new',
                '--no-sandbox'
            ]);
        })->all());

        return RemoteWebDriver::create(
            'http://localhost:9515',  // ChromeDriver URL inside the container
            DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }
}
