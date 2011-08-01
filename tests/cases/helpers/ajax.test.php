<?php
/* Ajax Test cases generated on: 2011-07-21 12:16:58 : 1311261418*/
App::import('Helper', 'Ajax');

class AjaxHelperTestCase extends CakeTestCase {
	function startTest() {
		$this->Ajax =& new AjaxHelper();
	}

	function endTest() {
		unset($this->Ajax);
		ClassRegistry::flush();
	}

}
