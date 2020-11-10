<?php


class Speedometer
{
    const KMILES = 1.609;

    public static function convertKmToMiles(int $km)
    {
        $miles = $km / self::KMILES;
        $result = number_format($miles, 2);
        return $result . ' miles.';
    }
    public static function convertMilesToKm(int $miles)
    {
        $km = $miles * self::KMILES;
        $result = number_format($km, 2);
        return $result . ' km.';
    }
}