<?php

class GalleryController
{
    //Display All Gallery
    public function displayAllImages(){
        $allImages = App::get('database')->getAll('galleries');
        view('gallery', compact('allImages'));
    }

    //Insert Images
    public function InsertImages(){
        App::get('database')->insert('galleries', [
           'title' => Request::post('img_title'),
           'image' => Request::post('image')
        ]);

        redirect('/admin/');
    }
}