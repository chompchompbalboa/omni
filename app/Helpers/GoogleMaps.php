<?php

namespace App\Helpers;

class GoogleMaps
{
    /**
     * Styles
     *
     * Snazzy Maps has a great list of freely available styles - I'm going to
     * use those rather than generate my own. Here's where I store the 
     * available styles.
     *
     * @type array
     */
    public $styles = [
        "NightWork" => [
            "style=feature:all|saturation:0|hue:0xe7ecf0",
            "style=feature:road|saturation:-70",
            "style=feature:transit|visibility:off",
            "style=feature:poi|visibility:off",
            "style=feature:water|visibility:simplified|saturation:-60"
        ]
    ];

    /**
     * Static URL
     *
     * Build the URL to retreive a static map image from the Google Maps API
     *
     * @param  $parameters
     * @param  $style
     * @return string
     */
    public function staticURL($parameters, $style)
    {
        $center = $parameters['center'];
        $marker = "size:small|color:red|".$parameters['center'];
        $style = implode("&", $this->styles[$style]);
        //dd($style);
        return (
            "https://maps.googleapis.com/maps/api/staticmap?".
            "&center=".$center.
            "&size=640x640".
            "&zoom=14".
            "&scale=2".
            "&markers=".$marker.
            "&".$style.
            "&key=AIzaSyCy0TJ-oTgR8qIe5SxF4UIwB1m2KHvpViU"
        );
    }

    /**
     * Map Link
     *
     * Build the link that clicking on a static map leads to
     *
     * @param  $parameters
     * @return string
     */
    public function mapLink($parameters)
    {
    }
}