<?php

namespace App\Http\Forms;

// Also refer to the App\Http\Requests\PublishPostForm
// which leverages Laravel's form request functionality.

class PublishPostForm extends Form
{
    /**
     * Validation rules for the form.
     *
     * @var array
     */
    protected $rules = [
        'body' => 'required'
    ];

    /**
     * Persist the form.
     */
    public function persist()
    {
        // $post = Post::create($this->fields());
        // $post->doSomethingElse();
    }
}
