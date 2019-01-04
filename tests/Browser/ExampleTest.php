<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testCaseFailureFrontEnd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->type('fullname', 'john doe')
                    ->type('phone', '12321321')
                    ->type('email', 'shanti.gola@djtcorp.in')
                    ->type('message', 'Demo message')
                    ->press('singlebutton')
                    ->assertSee('The phone must be 10 digits.',10);
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->type('fullname', 'john doe')
                    ->type('phone', '12321321')
                    ->type('email', 'shanti.gola@s')
                    ->type('message', 'Demo message')
                    ->click('button')
                    ->assertSee('The email must be a valid email address.');
        });


    }

    public function testCaseSuccessFrontEnd(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //Go to the homepage
                    ->clickLink('contact') //Click the Register link
                    ->assertSee('contact')
                    ->type('fullname', 'john doe')
                    ->type('phone', '1234567890')
                    ->type('email', 'shanti.gola@djtcorp.in')
                    ->type('message', 'Demo message')
                    ->click('button')
                    ->waitForText('Thanks for reaching us. We will contact you shortly.');
        });
    }
    public function testCaseUrlsFrontEnd(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //Go to the homepage
                    ->assertSee('Insurance products')
                    ->assertDontSee('info@djtinsurance.in')
                    ->visit('/contact')
                    ->assertSee('contact')
                    ->assertDontSee('info@djtinsurance.in')
                    ->visit('/team')
                    ->assertSee('Team')
                    ->assertDontSee('info@djtinsurance.in')
                    ->visit('/services')
                    ->assertSee('Services')
                    ->assertDontSee('info@djtinsurance.in')
                    ->visit('/careers')
                    ->assertSee('Career')
                    ->assertDontSee('info@djtinsurance.in');
        });
    }




}
