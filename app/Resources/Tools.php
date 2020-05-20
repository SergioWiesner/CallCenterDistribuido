<?php


namespace App\Resources;


class Tools
{
    public static function collectionToArray($data)
    {
        if (count($data) > 0) {
            return $data->toArray();
        }
        return [];
    }

}
