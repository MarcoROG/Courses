<?php

namespace Tests\Unit;

use App\Observation;
use App\Result;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ResultTest
 * @group Models
 * @package Tests\Unit
 */
final class ResultTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_has_the_right_table_associated()
    {
        $this->assertEquals('results', Result::TABLE);
    }
    
    /** @test */
    public function it_may_have_multiple_observations()
    {
        $result = factory(Result::class)->make();
        
        $this->assertInstanceOf(Collection::class, $result->observations);
        $this->assertContainsOnlyInstancesOf(Observation::class, $result->observations);
    }
}
