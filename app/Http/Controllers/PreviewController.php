<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// Models
use App\User;
use App\Previews;

use App\Services\SiteLoader;

class PreviewController extends Controller
{
    /**
     * Load a preview website
     *
     * @param  int  $previewID
     * @return Response
     */
    public function loadPreview($previewID)
    {
        $viewName = $previewID.".preview";
        return view($viewName)->with('path', $previewID);
    }
}