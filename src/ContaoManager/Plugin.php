<?php

/*
 * This file is part of the Minigrid Bundle.
 *
 * (c) Florian Metzner <https://github.com/metzograf>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MinigridBundle\ContaoManager;

use MinigridBundle\MinigridBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;


/**
 * Plugin for the Contao Manager.
 *
 * @author Florian Metzner <metzner@metzograf.de>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(MinigridBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
