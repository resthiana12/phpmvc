<?php

class About{
    public function index($nama='Resthiana', $pekerjaan='Programmer')
    {
        echo"Hallo nama saya $nama. Saya adalah seorang $pekerjaan.";
    }

    public function page()
    {
        echo"About/page";
    }
}