<?php

$settings = array();

$tmp = array(
    'assets_path' => array(
        'xtype' => 'textfield',
        'value' => '{base_path}simpleLook/assets/components/simplelook/'
    ),
    'assets_url' => array(
        'xtype' => 'textfield',
        'value' => '/simpleLook/assets/components/simplemodal/'
    ),
    'core_path' => array(
        'xtype' => 'textfield',
        'value' => '{base_path}simpleLook/core/components/simplelook/'
    )

);

foreach ($tmp as $k => $v) {
	/* @var modSystemSetting $setting */
	$setting = $modx->newObject('modSystemSetting');
	$setting->fromArray(array_merge(
		array(
			'key' => 'simplelook_' . $k,
			'namespace' => PKG_NAME_LOWER,
		), $v
	), '', true, true);

	$settings[] = $setting;
}

unset($tmp);
return $settings;
