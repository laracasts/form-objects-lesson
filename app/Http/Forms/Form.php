<?php

namespace App\Http\Forms;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Form
{
    use ValidatesRequests;

    /**
     * The request object.
     *
     * @var Request
     */
    protected $request;

    /**
     * Validation rules for the form.
     *
     * @var array
     */
    protected $rules = [];

    /**
     * Form constructor.
     *
     * @param Request|null $request
     */
    public function __construct(Request $request = null)
    {
        $this->request = $request ?: request();
    }

    /**
     * Save and persist the form.
     *
     * @return bool
     */
    public function save()
    {
        if ($this->isValid()) {
            $this->persist();

            return true;
        }

        return false;
    }

    /**
     * Fetch all fields from the form.
     *
     * @return array
     */
    public function fields()
    {
        return $this->request->all();
    }

    /**
     * Persist the form.
     *
     * @return mixed
     */
    abstract public function persist();

    /**
     * Determine if the form is valid.
     *
     * @return bool
     */
    protected function isValid()
    {
        $this->validate($this->request, $this->rules);

        return true;
    }

    /**
     * Fetch properties from the request.
     *
     * @param  string $property
     * @return array|string
     */
    public function __get($property)
    {
        // Consider doing a bit more checking here...

        return $this->request->input($property);
    }
}
