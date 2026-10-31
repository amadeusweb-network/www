<?php
variables([
	VARLinkToSectionHome => true,
]);

setup_cdn();

if (nodeIs(SITEHOME))
	setHtmlVariable(VARWelcomeMessage, getSnippet('welcome'));

function site_before_render() {
	$hasMenuItems = disk_file_exists(sectionBaseOrSitePath() . '/' . variable('section') . '/' . variable(VARNode) . '/_menu-items.tsv');
	autosetPageMenu([VARDontOverwriteLogo => true, VARLinkToNodeHome => true, VARLinkToSubnodeHome => !$hasMenuItems]);
}
