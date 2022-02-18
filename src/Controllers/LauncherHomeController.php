<?php

namespace Azuriom\Plugin\Launcher\Controllers;

use Azuriom\Http\Controllers\Controller;

class LauncherHomeController extends Controller
{
    /**
     * Show the home plugin page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('launcher::index', [
            'linux' => setting('launcher.linux'),
            'windows' => setting('launcher.windows'),
            'mac' => setting('launcher.mac'),
        ]);
    }
}
