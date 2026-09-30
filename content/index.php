<?php
$skip = getQueryParameter('explore-only');

if ($skip) echo tagUX::h2Plain('EXPLORING SITE ' . returnLine('[SEE ENTIRE HOME PAGE](%url%BTNPRIMARY)'), 'text-center my-2');
if (!$skip) echo tagUX::h2Plain('DAWN ' .  returnLine('[EXPLORE ONLY](%url%?explore-only=1BTNSUCCESS)'), 'text-center my-2');
if (!$skip) echo tagUX::contentBox(nodeValue(), cssUX::container);

$home = [
	['know-these', 'welcome'],
];

if (!$skip) foreach ($home as $item) {
	$link = replaceHtml('%url%' . $item[0]) . '/';
	renderExcerpt(SITEPATH . '/' . $item[1] . '/' . $item[0] . '/home.md', $link, '');
	echo cbCloseAndOpen('container');
}

if (!$skip) foreach (['what', 'who', 'usage', 'alignment'] as $item) {
	$link = replaceHtml('%url%' . $item) . '/';
	renderExcerpt(__DIR__ . '/' . $item . '.md', $link, '');
	echo cbCloseAndOpen('container');
}
if (!$skip) echo getCodeSnippet('features');
contentBox('end', '');

echo getCodeSnippet('www-bottom', CORESNIPPET);
