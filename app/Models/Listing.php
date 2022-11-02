<?php

    namespace App\Models;

    class Listing
    {
        public static function all()
        {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing one',
                    "description" => "this is the first listing"
                ],
                [
                    'id' => 2,
                    'title' => 'Listing two',
                    "description" => "this is the second listing"
                ]
            ];
        }
        public static function find($id)
        {
            $listings = self::all();

            foreach ($listings as $listing) {
                if ($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }
