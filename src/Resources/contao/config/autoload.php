<?php

/**
 * Minigrid for Contao Open Source CMS
 *
 * Copyright (C) 2019 metzograf / Florian Metzner <metzner@metzograf.de>
 *
 * @package    metzograf/minigrid
 * @link       https://github.com/
 * @license    not 
 * @author     Florian Metzner <metzner@metzograf.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 
ClassLoader::addNamespaces(array
(
	'Minigrid',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
		'Minigrid\ContentBlockStart'    => 'system/modules/minigrid/elements/wrapper/ContentBlockStart.php',
		'Minigrid\ContentBlockStop'     => 'system/modules/minigrid/elements/wrapper/ContentBlockStop.php',
));
