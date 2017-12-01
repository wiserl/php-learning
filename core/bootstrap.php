<?php

App::bind('config', require 'config.php');

// $config = App::get('config');

// die (var_dump(App::get('config')));

App::bind('database', new QueryBuilder(

    connection::make(App::get('config')['database'])
));