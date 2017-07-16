<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PreviewController extends Controller
{
    /**
     * Load a preview website
     *
     * @param  int  $previewID
     * @return Response
     */
    public function loadPreview($id, $page = "home")
    {
        $assetsPath = "/assets/previews/".$id;
        $urlPath = "/previews/".$id;
        $viewPath = "previews.".$id;
        $viewName = "previews.".$id.".".(isset($page) ? $page : "home");
        return view($viewName, 
            [
                "assetsPath" => $assetsPath,
                "urlPath" => $urlPath,
                "viewPath" => $viewPath
            ]);
    }
}