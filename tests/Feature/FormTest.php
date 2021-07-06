<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testBasicExample()
    {
        $response = $this->get('/')
            ->see('history')
            ->dontSee('Rails');
    }
}
