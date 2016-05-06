Ext.onReady(function() {
	simpleLook.config.connector_url = OfficeConfig.actionUrl;

	var grid = new simpleLook.panel.Home();
	grid.render('office-simplelook-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});