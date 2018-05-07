<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Helpers\Helper;

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
        $data = Helper::fetchJSON("/assets/previews/".$id."/data/seed.json");
        return view($viewName,
            [
                "assetsPath" => $assetsPath,
                "urlPath" => $urlPath,
                "viewPath" => $viewPath,
                "data" => $data
            ]);
    }
}
