<?php

// Examples


use App\Http\Requests\PublishPostForm;

Route::get('/', function () {
    return view('welcome');
});

Route::post('posts', function (PublishPostForm $form) {
    $form->persist();

    return 'Success!'; 
});
