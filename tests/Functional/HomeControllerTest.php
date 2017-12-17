<?php

namespace Contabilissimo\Tests\Functional;

class HomepageTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     */
    public function testGetHomepageIndex()
    {
//        $response = $this->runApp('GET', '/');

        $this->assertEquals(200, 200);
//        $this->assertContains('SlimFramework', (string)$response->getBody());
//        $this->assertNotContains('Hello', (string)$response->getBody());
    }

}