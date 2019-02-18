(function (root, factory) {
	if (typeof define === 'function' && define.amd) {
		define(factory);
	} else if (typeof exports === 'object') {
		module.exports = factory();
	} else {
		root.mainApp = factory();
	}
}(this, function () {
	'use strict';

    return {
		login: function (uri) {
			window.location.href = '/login/do-login?returnUrl=' + uri;	
		},
        msg: function (message) {
            alert(message);
        }
    }

}));