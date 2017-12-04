<?php

namespace Tests\Unit;

use App\Observation;
use App\Result;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ObservationTest
 * @group Models
 * @package Tests\Unit
 */
final class ObservationTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_has_the_right_table_associated()
    {
        $this->assertEquals('observations', Observation::TABLE);
    }
    
    /** @test */
    public function it_is_related_to_a_result()
    {
        $observation = factory(Observation::class)->make();
        
        $this->assertNotNull($observation->result);
        $this->assertInstanceOf(Result::class, $observation->result);
    }
}
