<?php

use SilverStripe\Dev\SapphireTest;

class AceEditorFieldTest extends SapphireTest {


	public function testGettersAndSetters() {

		$field = AceEditorField::create('Example');

		$this->assertEquals('html', $field->getMode());
		$this->assertEquals('monokai', $field->getTheme());


		$field->setMode('php');
		$this->assertEquals('php', $field->getMode());


		$field->setTheme('dracula');
		$this->assertEquals('dracula', $field->getTheme());

	}


}
