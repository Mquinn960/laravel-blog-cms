<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive data back from the model
        # compile or process model data again
        # pass this data to the correct view
        return view('pages.home');
    }

    public function getArchive() {
        # process variable data or params
        # talk to the model
        # receive data back from the model
        # compile or process model data again
        # pass this data to the correct view
        return view('posts.archive');
    }

    public function getAbout()
    {

        $name = 'Matt';
        $email = 'matt@mquinn.co.uk';
        $github = 'https://github.com/Mquinn960';
        $cv_link = '/mquinn_cv.pdf';

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $name;
        $data['github'] = $github;
        $data['cv_link'] = $cv_link;

        return view('pages.about')->withData($data);

    }

    public function getContact() {
        return view('pages.contact');
    }

}
