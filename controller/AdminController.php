<?php

class AdminController
{
    // Admin Index Page
    public function index() {
        $allPosts = App::get('database')->getAll('posts');
        $title = 'Admin Panel';
        view('admin/index', compact('allPosts', 'title'));
    }

    //Delete Tasks
    public function deleteTask() {
        App::get('database')->deleteByID('tasks', Request::get('id'));

        redirect('/admin/all-tasks/');
    }
}