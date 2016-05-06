var simpleLook = function (config) {
	config = config || {};
	simpleLook.superclass.constructor.call(this, config);
};
Ext.extend(simpleLook, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('simplelook', simpleLook);

simpleLook = new simpleLook();