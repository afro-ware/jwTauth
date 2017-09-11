<?php

/*
 * This file is part of jwTauth.
 *
 * (c) Afroware <contact@afroware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Afroware\JwTauth\Support;

use Carbon\Carbon;

class Utils
{
    /**
     * Get the Carbon instance for the current time.
     *
     * @return \Carbon\Carbon
     */
    public static function now()
    {
        return Carbon::now('UTC');
    }

    /**
     * Get the Carbon instance for the timestamp.
     *
     * @param  int  $timestamp
     *
     * @return \Carbon\Carbon
     */
    public static function timestamp($timestamp)
    {
        return Carbon::createFromTimestampUTC($timestamp)->timezone('UTC');
    }

    /**
     * Checks if a timestamp is in the past.
     *
     * @param  int  $timestamp
     *
     * @return bool
     */
    public static function isPast($timestamp)
    {
        return static::timestamp($timestamp)->isPast();
    }

    /**
     * Checks if a timestamp is in the future.
     *
     * @param  int  $timestamp
     *
     * @return bool
     */
    public static function isFuture($timestamp)
    {
        return static::timestamp($timestamp)->isFuture();
    }
}
