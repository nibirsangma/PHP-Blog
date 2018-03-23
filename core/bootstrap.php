<?php
App::bind('config',require 'config.php');
App::get('config');


require 'core/essentials.php';

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['db'])
));