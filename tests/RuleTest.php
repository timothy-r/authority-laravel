<?php
require_once(__DIR__.'/../rule.php');

use Authority\Rule;

class RuleTest extends \PHPUnit_Framework_TestCase
{
   
   public function testAlowedRule()
   {
        $allowed = true;
        $action = 'edit';
        $resource = 'thing';
        $rule = new Rule($allowed, $action, $resource);

   }
}
