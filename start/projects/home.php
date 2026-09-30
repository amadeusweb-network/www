<?php
if (getPageParameterAt()) return;

h2('DAWN Projects', cssUX::CenterContainer);

contentBox(nodeValue(), cssUX::container);
echo returnLine('Welcome to DAWN, read about/view/search sites below or view projects in the blue menu bar above.

---');

runFeature(features::explore);
variables(['only-description' => true]);
network_menu(function($item) { showSite($item); });
contentBox('end');
