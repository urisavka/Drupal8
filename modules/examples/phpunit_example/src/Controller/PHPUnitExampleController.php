<?php

/**
 * @file
 * Contains \Drupal\phpunit_example\Controller\PHPUnitExampleController.
 */

namespace Drupal\phpunit_example\Controller;

/**
 * Controller for PHPUnit description page.
 */
class PHPUnitExampleController {

  /**
   * Displays a page with a descriptive page.
   *
   * Our router maps this method to the path 'examples/phpunit_example'.
   */
  public function description() {
    $build = array(
      '#markup' => t('<h2>PHPUnit for Drupal: A very basic how-to.</h2>
<h3>How to use this example module</h3>
<p>You really should be reading the various docblocks in the test files.</p>
<h3>How To:</h3>
<ul>
<li><p>PHPUnit tests belong in their own directory, so they won&#39;t be loaded by the autoloader during normal bootstrap. This means you should have a <code>/tests/src</code> directory in the root of your module directory.</p></li>
<li><p>Your tests should be in the <code>Drupal\Tests\[your_module]\Unit</code> namespace. Under Drupal&#39;s PSR-4 system, this means your PHPUnit-based tests should go in a <code>[your_module]/tests/src/Unit</code> directory.</p></li>
<li><p>Your test case should subclass <code>Drupal\Tests\UnitTestCase</code>.</p></li>
<li><p>You can run PHPUnit-based tests from within Drupal 8 by enabling the Testing module and then selecting the PHPUnit group from the testing page. As of this writing, this method doesn&#39;t provide any useful output.</p></li>
</ul>
<h3>Standard PHPUnit Practices</h3>
<p>You can (and really, should) run PHPUnit from the command line.</p>
<p>On unix-based systems this means you need to <code>cd core</code> and then <code>./vendor/bin/phpunit</code>.</p>
<p>On Windows-based systems, assuming you have php in your path, <code>php ./vendor/phpunit/phpunit/composer/bin/phpunit --group phpunit_example</code>.</p>
<p>Also, you should mark your tests as belonging to a group, so they can be run independently. You do this by annotating your test classes with <code>@group group_name</code>. You should have a <code>@group</code> for your module name, and you should also have a <code>@group</code> for integrations, such as <code>views</code>.</p>
<p>So, for instance, to run all of the PHPUnit example tests, you would type <code>./vendor/bin/phpunit --group phpunit_example</code>.</p>
<p>As you can see, including a <code>@group</code> annotation is a good idea.</p>'),
    );

    return $build;
  }

}
