<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BookTest extends DuskTestCase
{
    /**
     * Open book page, create a new book
     *
     * @return void
     */
    public function testCompanyCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('companies/create')
                ->type('name', 'Liguana')
                ->type('country', 'America')
                ->type('founded_at', '2012-01-21 17:26:02')
                ->type('history', 'Liguana is de bom')
                ->type('email', 'liguana@mail.com')
                ->click('Submit')
                ->assertPathIs('/companies')
                ->clickLink('Boeken')
                /*->assertPathIs('/book')
                ->press('.btn-success')
                ->type('isbn', '9780141036144')
                ->type('title', 'Nineteen Eighty-Four')
                ->type('author_id', 'George Orwell')
                ->select('category_id', 'Voorleesboeken')
                ->press('Opslaan')
                ->assertSee('is toegevoegd.')*/;
        });
    }

    /**
     * Open book page, edit an existing book
     *
     * @return void
     */
    /*public function testBookEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/book')
                ->press('.table-text')
                ->clickLink('Bewerken')
                ->type('isbn', '9780141036144')
                ->type('title', 'Nineteen Eighty-Four')
                ->type('author_id', 'George Orwell')
                ->select('category_id', 'Voorleesboeken')
                ->press('Opslaan')
                ->assertSee('is bijgewerkt.');
        });
    }*/
}
