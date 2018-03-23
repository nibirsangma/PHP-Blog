<?php

class PagesController{
    function index(){
        $posts = App::get('database')->getAll('posts');
        $title = 'Home page';

        view('index', compact('posts', 'title'));
    }

    public function about(){
        $title = 'About Page';
        view('about', compact('title'));
    }

    public function service(){
        $title = 'Service Page';
        view('service', compact('title'));
    }

    public function gallery() {
        $title = 'Gallery';
        view('gallery', compact('title'));
    }
}