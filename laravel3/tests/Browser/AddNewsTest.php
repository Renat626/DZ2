<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample1()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/addNew')
                    ->type('headline', 'test')
                    ->type('text', 'testText')
                    ->press('button')
                    ->assertPathIs('/admin/addNew');
        });
    }

    public function testExample2()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/addNew')
                    ->type('headline', '')
                    ->type('text', 'TestText')
                    ->press('button')
                    ->assertSee('Поле Название новости обязательно для заполнения.')
                    ->assertPathIs('/admin/addNew');
        });
    }

    public function testExample3()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/addNew')
                    ->type('headline', 'Test')
                    ->type('text', '')
                    ->press('button')
                    ->assertSee('Поле Текст обязательно для заполнения.')
                    ->assertPathIs('/admin/addNew');
        });
    }
}
