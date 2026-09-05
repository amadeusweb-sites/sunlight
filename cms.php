<?php
variables([
	VARLinkToSectionHome => true,
]);

if (nodeIs(SITEHOME))
	setHtmlVariable(VARWelcomeMessage, getSnippet('welcome'));

function site_before_render() {
	autosetPageMenu([VARDontOverwriteLogo => true, VARLinkToSubnodeHome => true]);
}
