<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Backend\Attribute;

/**
 * Service tag to autoconfigure Backend controllers
 *
 * Note: Use the AsController attribute, since the Controller attribute will be deprecated with TYPO3 v13.
 *
 * @see AsController
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Controller
{
    public const TAG_NAME = 'backend.controller';

    public function __construct() {}
}
