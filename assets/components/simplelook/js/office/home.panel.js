simpleLook.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'simplelook-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: false,
			hideMode: 'offsets',
			items: [{
				title: _('simplelook_items'),
				layout: 'anchor',
				items: [{
					html: _('simplelook_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'simplelook-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	simpleLook.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(simpleLook.panel.Home, MODx.Panel);
Ext.reg('simplelook-panel-home', simpleLook.panel.Home);
