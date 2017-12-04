<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    
    protected $baseUrl = 'http://localhost/';
    
    /** {@inheritdoc} */
    protected function setUp()
    {
        parent::setUp();
        
        $this->withoutExceptionHandling();
    }
}
