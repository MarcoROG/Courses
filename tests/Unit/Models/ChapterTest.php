<?php

namespace Tests\Unit;

use App\Chapter;
use App\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ChapterTest
 * @group Models
 * @package Tests\Unit
 */
final class ChapterTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_has_the_right_table_associated()
    {
        $this->assertEquals('chapters', Chapter::TABLE);
    }
    
    /** @test */
    public function it_may_be_related_to_a_course()
    {
        $chapter = factory(Chapter::class)->make();
        
        $this->assertInstanceOf(Course::class, $chapter->course);
    }
}
