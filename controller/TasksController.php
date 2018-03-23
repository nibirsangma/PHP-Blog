<?php


class TasksController
{

    //Display All Tasks
    public function displayAllTasks(){
        $allTasks = App::get('database')->getAll('tasks');
        $title = 'Tasks Page';
        view('display-all-tasks', compact('allTasks', 'title'));
    }

    public function AdminAllTasks(){
        $allTasks = App::get('database')->getAll('tasks');

        view('admin/tasks', compact('allTasks'));
    }

    // Task Insert Form
    public function taskInsertForm() {
        view('admin/task-insert');
    }


    //Tasks Insert Into Database
    public function taskInsert(){
        App::get('database')->insert('tasks', [
            'description' => Request::post('description'),
            'status' => Request::post('status')
        ]);

        redirect('/admin/tasks/');
    }

    // Task Edit Page
    public function taskEdit() {
        $editTask = App::get('database')->getByID('tasks', Request::get('id'))[0];
        view('admin/task-edit', compact('editTask'));
    }

    public function update() {
        App::get('database')->update('tasks', [
            'id' => Request::post('id'),
            'description' => Request::post('description'),
            'status' => Request::post('status')
        ],[
            'id' => Request::post('id'),
        ]);

        redirect('/admin/tasks/');
    }

    // Delete Task
    public function deleteTask() {
        App::get('database')->deleteByID('tasks', Request::get('id'));

        redirect('/admin/tasks/');
    }

}