<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// Models
use App\User;
use App\Previews;

// Helpers
use App\Helpers\SiteLoader;

class PreviewController extends Controller
{
    /**
     * Constructor
     * 
     * @param  Previews  $previews
     * @param  SiteLoader  $siteLoader
     */
    public function __construct(Previews $previews, SiteLoader $siteLoader)
    {
        $this->previews = $previews;
        $this->siteLoader = $siteLoader;
    }


    /**
     * Load a preview website
     *
     * @param  int  $previewID
     * @return Response
     */
    public function loadPreview($previewID)
    {
        $preview = $this->previews->where('previewID', '=', $previewID)->firstOrFail();
        $site = $this->siteLoader->{$preview->theme}($preview);
        return $site;
    }
}