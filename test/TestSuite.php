<?php
require_once dirname(__FILE__).'/../lib/external/lime.php';

$tests = new lime_harness(array('verbose'=>true));
$tests->register_glob(dirname(__FILE__).'/unit/*Test.php');
$tests->run();
if (in_array('--xml', $argv))
{
  file_put_contents(dirname(__FILE__).'/../test-report.xml', $tests->to_xml());
}
elseif ($tests->stats['failed_tests'])
{
  exit(1);
}
