<?php

namespace App\Helpers;

use App\Helpers\GoogleMaps;

class SiteLoader
{

    /**
     * Constructor
     *
     * @param  GoogleMaps $googleMaps
     */
    public function __construct(GoogleMaps $googleMaps)
    {
        $this->googleMaps = $googleMaps;
    }

    /**
     * Lily
     *
     * @param  $site
     * @return string
     */
    public function lily($site)
    {
        // Defaults
        $default = [
            "address" => "5503 Airport Way South, Seattle, WA 98108",
            "email" => "info@cuttingboardseattle.com",
            "header" => "Cutting Board",
            "header_sub" => "Seattle",
            "hours" => [
                ["days" => "monday - friday", "time" => "10:30 AM - 8:30 PM"],
                ["days" => "saturday", "time" => "11:30 AM - 8:30 PM"],
                ["days" => "sunday", "time" => "closed"],
            ],
            "image_1" => "/assets/lily/images/restaurants/sushi/1.jpg",
            "image_2" => "/assets/lily/images/restaurants/sushi/2.jpg",
            "image_3" => "/assets/lily/images/restaurants/sushi/3.jpg",
            "image_4" => "/assets/lily/images/restaurants/sushi/15.jpg",
            "image_5" => "/assets/lily/images/restaurants/sushi/16.jpg",
            "image_6" => "/assets/lily/images/restaurants/sushi/21.jpg",
            "image_7" => "/assets/lily/images/restaurants/sushi/4.jpg",
            "image_8" => "/assets/lily/images/restaurants/sushi/19.jpg",
            "image_9" => "/assets/lily/images/restaurants/sushi/20.jpg",
            "image_10" => "/assets/lily/images/restaurants/sushi/22.jpg",
            "image_11" => "/assets/lily/images/restaurants/sushi/7.jpg",
            "image_12" => "/assets/lily/images/restaurants/sushi/8.jpg",
            "image_13" => "/assets/lily/images/restaurants/sushi/9.jpg",
            "introMessage_1" => "We're glad you're here!",
            "introMessage_2" => "Delicious sushi in a setting perfect for any occasion",
            "name" => "Cutting Board",
            "phone" => "(206) 767-8075",
            "tile1_title" => "About Us",
            "tile1_text" => "Located in the heart of Georgetown in Seattle, we serve more than 60 creative and delicious rolls, sushi and sashimi, and bento including teriyaki, tonkatsu, gyoza, yakisoba, curry, and more. Everything on our menu is proudly prepared right here in our kitchen.",
            "tile2_title" => "Our Mission",
            "tile2_text" => "Our mission is simple: offer excellent yet affordable Japanese cuisine. Please browse our extensive menu, order and pay for your meal at the counter, and then sit back and relax.",
            "title" => "Cutting Board Seattle",
        ];

        // Data
        $data = [];
        foreach($default as $property => $value) {
            $data[$property] = (isset($site->$property) ? $site->$property : $default[$property]);
        }

        // Additional data
        $data['mapStaticURL'] = $this->googleMaps->staticURL(
                                                            [
                                                                "center" => str_replace(" ", "+", $data['address']),
                                                            ], 
                                                            "NightWork");
        $data['mapLink'] = $this->googleMaps->mapLink($data['name'], $data['address']);

        // Return
        return view('lily.home', ["data" => $data]);
    }

    /**
     * Wedesign
     *
     * @param  $site
     * @return string
     */
    public function wedesign($site)
    {
        // Defaults
        $default = [
        ];

        // Data
        $data = [];
        foreach($default as $property => $value) {
            $data[$property] = (isset($site->$property) ? $site->$property : $default[$property]);
        }

        // Return
        return view('wedesign.home', ["data" => $data]);
    }
}