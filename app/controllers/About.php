<?php

class About extends Controller {
    public function index($param1 = 'Default 1', $param2 = 'Default 2') {

        $data['judul'] = 'About';
        $data['param1'] = $param1;
        $data['param2'] = $param2;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }

    public function page() {

        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');

    }
}