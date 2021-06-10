<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwibbonController extends Controller
{
    public function index ()
    {
        $user = Auth::user();
        return view('user.twibbon', ['user' => $user]);
    }

    public function combine(Request $request) {
        // $oldImg = $request->file('gambar');
        $img = $request->image;

        $exploded = explode(',', $img, 2); // limit to 2 parts, i.e: find the first comma
        $encoded = $exploded[1]; // pick up the 2nd part
        $decoded = base64_decode($encoded);
        $oldImg = imagecreatefromstring($decoded);

        // list($width,$height) = getimagesize($img);

        $twibbon = imagecreatefrompng(public_path().'/Image/twibbon.png');

        list($twwidth,$twheight) = getimagesize(public_path().'/Image/twibbon.png');

        $dst = imagecreatetruecolor(700, 700);
        imagealphablending( $dst, false );
        imagesavealpha( $dst, true );

        imagecopyresampled($dst, $twibbon, 0, 0, 0, 0, 700, 700, $twwidth, $twheight);

        imagecopy($oldImg, $dst, 0, 0, 0, 0, 700, 700);

        header('Content-Type: image/png');
        imagepng($oldImg);
        imagedestroy($oldImg);
    }
    
}
