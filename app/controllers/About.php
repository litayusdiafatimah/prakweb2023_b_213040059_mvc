<?php

class About {
    public function index($nama = 'Lita', $pekerjaan = 'Mahasiswi') 
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}