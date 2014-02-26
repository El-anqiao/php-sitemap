<?php
/*
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Sonrisa\Component\Sitemap\Validators;

/**
 * Class ImageValidator
 * @package Sonrisa\Component\Sitemap\Validators
 */
class ImageValidator extends AbstractValidator
{

    /**
     * @param $title
     * @return mixed
     */
    public static function validateTitle($title)
    {
        $data = '';
        if (is_string($title)) {
            $data = $title;
        }

        return $data;
    }

    /**
     * @param $caption
     * @return mixed
     */
    public static function validateCaption($caption)
    {
        $data = '';
        if (is_string($caption)) {
            $data = $caption;
        }

        return $data;
    }

    /**
     * @param $geolocation
     * @return mixed
     */
    public static function validateGeolocation($geolocation)
    {
        $data = '';
        if (is_string($geolocation)) {
            $data = $geolocation;
        }

        return $data;
    }

    /**
     * @param $license
     * @return mixed
     */
    public static function validateLicense($license)
    {
        $data = '';
        if (is_string($license)) {
            $data = $license;
        }

        return $data;
    }
}
