<?php
/**
 * Created by PhpStorm.
 * User: Mquinn
 * Date: 28/12/2017
 * Time: 14:51
 */

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive data back from the model
        # compile or process model data again
        # pass this data to the correct view
        return view('pages.welcome');
    }

    public function getAbout()
    {

        $first = 'Matthew';
        $last = 'Quinn';
        $email = 'matt@mquinn.co.uk';

        $fullname = $first . " " . $last;

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages.about')->withData($data);

    }

    public function getContact() {
        return view('pages.contact');
    }

}