// @codekit-prepend vendors/jquery-2.1.0.min.js
// @codekit-prepend vendors/jquery.colorbox-min.js
// @codekit-prepend vendors/prism.min.js

$(function(){
	$("a.gallery").colorbox();
	$("a.external").attr('target', '_blank');
});