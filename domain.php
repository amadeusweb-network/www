<?php
domain::add('amadeusweb', __DIR__, false, new domain([
		'folder' => 'amadeusweb/',
		'heading' => 'AmadeusWeb.in',
		'local' => 'http://localhost/amadeusweb/%subfol%/%site%/',
		'live' => 'https://%site%.amadeusweb.in/',
		'local-base' => 'http://localhost/amadeusweb/%subfol%/',
		'live-base' => 'https://%subfol%.amadeusweb.in/',
	],
	['%folder%www', 'spring', '%folder%by-imran/imran'],
	[
		'businesses',
		'shasa',
		'people',
		'initiatives',
	],
));
