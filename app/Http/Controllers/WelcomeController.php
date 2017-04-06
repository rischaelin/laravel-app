<?php
/**
 * Created by PhpStorm.
 * User: richardschalin
 * Date: 31.03.17
 * Time: 21:54
 */

namespace App\Http\Controllers;

class WelcomeController  extends Controller {
    public function index() {
        return view('hallo', [
            'names'=> ["Andreas", "Florian", "Richard"]
        ]);
    }
}