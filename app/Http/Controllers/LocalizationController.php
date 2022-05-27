<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Switch Language.
     *
     * @param string $language Language code.
     * 
     * @return Response
     */
    public function switch($language = '')
    {
        // Save into locale sessions.
        request()->session()->put('locale', $language);
 
        // Redirect back.
        return redirect()->back();
    }
}
