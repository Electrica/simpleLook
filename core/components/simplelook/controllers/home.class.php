<?php

/**
 * The home manager controller for simpleLook.
 *
 */
class simpleLookHomeManagerController extends simpleLookMainController {
	/* @var simpleLook $simpleLook */
	public $simpleLook;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('simplelook');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->simpleLook->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->simpleLook->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->simpleLook->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->simpleLook->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->simpleLook->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->simpleLook->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->simpleLook->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "simplelook-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->simpleLook->config['templatesPath'] . 'home.tpl';
	}
}