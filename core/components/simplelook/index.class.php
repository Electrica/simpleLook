<?php

/**
 * Class simpleLookMainController
 */
abstract class simpleLookMainController extends modExtraManagerController {
	/** @var simpleLook $simpleLook */
	public $simpleLook;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('simplelook_core_path', null, $this->modx->getOption('core_path') . 'components/simplelook/');
		require_once $corePath . 'model/simplelook/simplelook.class.php';

		$this->simpleLook = new simpleLook($this->modx);
		//$this->addCss($this->simpleLook->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->simpleLook->config['jsUrl'] . 'mgr/simplelook.js');
		$this->addHtml('
		<script type="text/javascript">
			simpleLook.config = ' . $this->modx->toJSON($this->simpleLook->config) . ';
			simpleLook.config.connector_url = "' . $this->simpleLook->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('simplelook:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends simpleLookMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}