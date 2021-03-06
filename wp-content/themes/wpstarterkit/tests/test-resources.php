<?php
/**
 * Class SampleTest
 *
 * @package Newtheme
 */

 /**
 * OUTPUT VARS WHEN RUNNING PHPUNIT
 *
 * phpunit --debug
 * var_dump(self::$post_object->post_title);
 *
 * fwrite( STDERR, print_r( $post_example, true ) );
 */

require get_template_directory() . '/phpunit-model.php';

class SampleTest extends WP_UnitTestCase
{

    protected static $post_object;

    public static function wpSetUpBeforeClass($factory)
    {
        $args = FF_PHPUnit_Model::$course_args;
        self::$post_object = $factory->post->create_and_get($args);
    }

    public function test_user_with_editor_role_can_edit_others_posts()
    {
        $user_id = self::factory()->user->create(array(
            'role' => 'editor',
        ));
        $this->assertTrue(user_can($user_id, 'edit_others_posts'));
    }

    public function test_user_exists()
    {
        $user = self::factory()->user->create_and_get();
        $this->assertTrue($user->exists());
    }

    public function test_post_exists()
    {
        $post = self::factory()->post->create_and_get();
        $expected = $post->ID;
        $result = post_exists($post->post_title);
        $this->assertEquals($expected, $result);
    }

    public function test_book_post_type_exists()
    {
        $post = self::factory()->post->create_many(4, ['post_type' => 'book']);
        $this->assertEquals(count($post), 4);
    }

    public function test_draft_post()
    {
        $post = $this->factory()->post->create_many(5, ['post_status' => 'draft']);
        /** @var \wpdb $wpdb */
        global $wpdb;
        $query = "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE post_status = 'draft'";
        $this->assertEquals(5, $wpdb->get_var($query));
    }

    public function test_factory_posts()
    {
        $post = $this->factory->post->create_and_get();
        $this->assertTrue(true);
    }

    public function test_custom_create()
    {
        $args = [
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'post_author' => 6,
            'post_title' => 'DO MORE GOOD INVESTING TODAY',
            'post_status' => 'publish',
            'post_type' => 'courses',
            'location' => '404',
            'course_type' => '253',
            'course_advisor' => '2',
            'number_of_seats_available' => '50',
            'premium_course' => '1',
            'start_date_time' => '2019-02-27 17:30:00',
            'end_date_time' => '2019-02-27 18:30:00',
            'start_date_time_day_2' => '',
            'end_date_time_day_2' => '',
            'custom_date_text' => '',
            'custom_time_text' => '',
            'show_additional_dates_times' => '1',
            'enrollment_status' => 'open',
            'cost' => '99',
        ];
        $post = $this->factory()->post->create_and_get($args);
        $this->assertTrue(true);
    }

    public function test_custom_create_many_posts()
    {

        $courses = [];
        for ($i = 0; $i < 5; $i++) {
            ${'post' . $i} = $this->factory()->post->create_and_get();
            $courses[] = ${'post' . $i};
        }
        $this->assertTrue(true);
    }
}
