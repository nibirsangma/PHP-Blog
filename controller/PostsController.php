<?php

class PostsController
{
    //Display Single Posts
    public function SinglePost(){
        $post = App::get('database')->getByID('posts', Request::get('id'))[0];
        $title = 'Post';
        view('single-post', compact('post', 'title'));
    }

    // Posts Display in Admin Panel
    public function index(){
        $allPosts = App::get('database')->getAll('posts');

        view('admin/posts', compact('allPosts'));
    }

    // Display Post Insert Form
    public function postInsertForm() {
        view('admin/post-insert');
    }

    // Post Edit Page
    public function postEdit() {
        $editPost = App::get('database')->getByID('posts', Request::get('id'))[0];
        view('admin/post-edit', compact('editPost'));
    }

    // Posts Insert To Database
    public function postInsert() {
        App::get('database')->insert('posts', [
            'title' => Request::post('title'),
            'uri' => Request::post('author'),
            'data' => Request::post('data')
        ]);

        redirect('/admin/posts/');

    }

    //Edit & Update Single Post
    public function update() {
        App::get('database')->update('posts', [
            'id' => Request::post('id'),
            'title' => Request::post('title'),
            'data' => Request::post('data'),
            'uri' => Request::post('author')
        ],[
            'id' => Request::post('id'),
        ]);

        redirect('/admin/posts/');
    }

    // Delete Single Post
    public function deleteSinglePost(){
        App::get('database')->deleteByID('posts', Request::get('id'));

        redirect('/admin/posts/');
    }
}