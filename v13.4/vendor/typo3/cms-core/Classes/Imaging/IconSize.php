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

namespace TYPO3\CMS\Core\Imaging;

enum IconSize: string
{
    case DEFAULT = 'default';
    case SMALL = 'small';
    case MEDIUM = 'medium';
    case LARGE = 'large';
    case MEGA = 'mega';
    /**
     * @internal
     */
    case OVERLAY = 'overlay';

    /**
     * @return array{0: positive-int, 1: positive-int}
     */
    public function getDimensions(): array
    {
        return match ($this) {
            self::DEFAULT, self::SMALL, self::OVERLAY => [16, 16],
            self::MEDIUM => [32, 32],
            self::LARGE => [48, 48],
            self::MEGA => [64, 64],
        };
    }

    /**
     * @internal
     * @deprecated Will be removed with TYPO3 14.0
     */
    public function triggerDeprecation(): void
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $caller = end($backtrace);
        $callerLocation = sprintf('file %s, line %d', $caller['file'], $caller['line']);

        trigger_error(sprintf(
            'The size argument was passed as string in %s, which is deprecated since TYPO3 v13. Consider passing %s::%s instead.',
            $callerLocation,
            __CLASS__,
            $this->name
        ), E_USER_DEPRECATED);
    }
}
