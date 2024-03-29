<?php

/*
 * @file
 *   PHPUnit Tests for devel. This uses Drush's own test framework, based on PHPUnit.
 *   To run the tests, use phpunit --bootstrap=/path/to/drush/tests/drush_testcase.inc.
 *   Note that we are pointing to the drush_testcase.inc file under /tests subdir in drush.
 */
class develCase extends Drush_CommandTestCase
{
    public function testFnView()
    {
        $sites = $this->setUpDrupal(1, true);
        $options = [
      'root' => $this->webroot(),
      'uri'  => key($sites),
    ];
        $this->drush('pm-download', ['devel'], $options + ['cache' => null]);
        $this->drush('pm-enable', ['devel'], $options + ['skip' => null, 'yes' => null]);

        $this->drush('fn-view', ['drush_main'], $options);
        $output = $this->getOutput();
        $this->assertContains('@return', $output, 'Output contain @return Doxygen.');
        $this->assertContains('function drush_main() {', $output, 'Output contains function drush_main() declaration');
    }
}
