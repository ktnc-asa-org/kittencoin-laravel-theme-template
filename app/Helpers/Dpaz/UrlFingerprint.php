<?php
/**
 * Created by PhpStorm.
 * User: Daniel-Paz-Horta
 *
 * Based off of: https://medium.com/rabbit-mobile-business-blog/writing-c-s-rfc2898derivebytes-in-php-88fa8c096dcb
 */

namespace App\Helpers\Dpaz;

/**
 * Class SymmetricEncryption
 * @package utilities
 */
class UrlFingerprint {

    public static function fingerprint($path)
    {

        $fullPath = public_path($path);

        return $path . '?v=' . filemtime($fullPath);

    }
}
