<?php

class About {
    public function index($p1 = 'Default 1', $p2 = 'Default 2') {
        echo "param1 = $p1, param2 = $p2";
    }

    public function page() {
        echo 'about/index';
    }
}