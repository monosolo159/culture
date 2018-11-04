/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.extraPlugins = 'image';
	var loweb =  window.location.protocol+"//"+window.location.hostname + "/culture/Antiques/ckupload";
	console.log(loweb);
	config.filebrowserUploadUrl = loweb;
};
