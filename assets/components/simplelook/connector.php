<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var simpleLook $simpleLook */
$simpleLook = $modx->getService('simplelook', 'simpleLook', $modx->getOption('simplelook_core_path', null, $modx->getOption('core_path') . 'components/simplelook/') . 'model/simplelook/');
$modx->lexicon->load('simplelook:default');

// handle request
$corePath = $modx->getOption('simplelook_core_path', null, $modx->getOption('core_path') . 'components/simplelook/');
$path = $modx->getOption('processorsPath', $simpleLook->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));
