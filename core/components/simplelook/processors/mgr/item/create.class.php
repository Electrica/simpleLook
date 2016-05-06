<?php

/**
 * Create an Item
 */
class simpleLookItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'simpleLookItem';
	public $classKey = 'simpleLookItem';
	public $languageTopics = array('simplelook');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$id_user = trim($this->getProperty('id_user'));

        $this->modx->log(1, $id_user);

		if (empty($name)) {
			$this->modx->error->addField('id_user', $this->modx->lexicon('simplelook_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('id_user' => $id_user))) {
			$this->modx->error->addField('id_user', $this->modx->lexicon('simplelook_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'simpleLookItemCreateProcessor';