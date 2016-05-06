simpleLook.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'simplelook-panel-home', renderTo: 'simplelook-panel-home-div'
		}]
	});
	simpleLook.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(simpleLook.page.Home, MODx.Component);
Ext.reg('simplelook-page-home', simpleLook.page.Home);