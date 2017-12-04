<?php

namespace Tests\Unit;

use App\Chapter;
use App\Course;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class CourseTest
 * @group Models
 * @package Tests\Unit
 */
final class CourseTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_has_the_right_table_associated()
    {
        $this->assertEquals('courses', Course::TABLE);
    }
    
    /** @test */
    public function it_may_have_multiple_chapters()
    {
        $course = factory(Course::class)->make();
        
        $this->assertInstanceOf(Collection::class, $course->chapters);
        $this->assertContainsOnlyInstancesOf(Chapter::class, $course->chapters);
    }
}
