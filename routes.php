<?php

$router->get('', 'PagesController@index');
$router->get('about', 'PagesController@about');
$router->get('service', 'PagesController@service');
$router->get('gallery', 'PagesController@gallery');


//Display Single Post
$router->get('post', 'PostsController@SinglePost');

//**** ADMIN ROUTES ****//
$router->get('admin', 'AdminController@index');

// Admin All Posts Route
$router->get('admin/posts', 'PostsController@index');

// Posts Insert Form Route
$router->get('admin/post-insert', 'PostsController@postInsertForm');

// Posts Insert To Datebase Route
$router->post('posts', 'PostsController@postInsert');

// Posts Edit Page
$router->get('admin/post-edit', 'PostsController@postEdit');
$router->post('admin/post/update', 'PostsController@update');

// Delete Single Post
$router->get('delete/post', 'PostsController@deleteSinglePost');

// Task Display Page
$router->get('display/task', 'TasksController@displayAllTasks');

// Tasks View Page
$router->get('admin/tasks', 'TasksController@AdminAllTasks');

// Task Insert Form
$router->get('admin/task-insert', 'TasksController@taskInsertForm');

// Tasks Insert To database
$router->post('tasks', 'TasksController@taskInsert');

// Task Edit Page
$router->get('admin/task-edit', 'TasksController@taskEdit');
$router->post('admin/task/update', 'TasksController@update');


//Delete Task
$router->get('delete/task', 'TasksController@deleteTask');

