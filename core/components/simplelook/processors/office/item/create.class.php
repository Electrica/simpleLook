<?php

/**
 * Create an Item
 */
class simpleLookOfficeItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'simpleLookItem';
	public $classKey = 'simpleLookItem';
	public $languageTopics = array('simplelook');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('simplelook_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('simplelook_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'simpleLookOfficeItemCreateProcessor';