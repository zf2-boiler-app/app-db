<?php
namespace BoilerAppDbTest;
class ModuleTest extends \PHPUnit_Framework_TestCase{
	/**
	 * @var \BoilerAppDisplay\Module
	 */
	protected $module;

	/**
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	protected function setUp(){
		$this->module = new \BoilerAppDb\Module();
	}

    public function testGetConfig(){
        $this->assertTrue(is_array($this->module->getConfig()));
    }
}