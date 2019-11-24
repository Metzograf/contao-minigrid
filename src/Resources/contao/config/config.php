<?php

$GLOBALS['TL_WRAPPERS']['start'][] = 'blockStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'blockStop';

$GLOBALS['TL_CTE']['blocks'] = array(
	'blockStart' => 'ContentBlockStart',
	'blockStop'	=> 'ContentBlockStop'
);

if(VERSION <= 4.5) {
    if (TL_MODE === 'FE') { // Früher TL_MODE == 'FE'
        // Pfad ggf. anpassen
        // Alle Dateien in /src/Ressources/public werden unter /web/bundles/bundle-name
        // als Symlink veröffentlicht nach composer install/update
        $GLOBALS['TL_CSS'][] = 'bundles/contao-minigrid-bundle/mingrid.css';
    }
 
}

