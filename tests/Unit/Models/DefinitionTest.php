<?php

namespace Tests\Unit;

use App\Definition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class DefinitionTest
 * @group Models
 * @package Tests\Unit
 */
final class DefinitionTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_has_the_right_table_associated()
    {
        $this->assertEquals('definitions', Definition::TABLE);
    }
}
