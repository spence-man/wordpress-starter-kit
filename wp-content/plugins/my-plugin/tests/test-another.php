<?php
/**
 * Class SampleTest
 *
 * @package My_Plugin
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase
{

    /**
     * A single example test.
     */
    public function test_sample()
    {
        // Replace this with some actual testing code.
        $dir = get_site_url();
        $this->assertEquals( $dir, 'http:localhost:8222' );
    }
}
