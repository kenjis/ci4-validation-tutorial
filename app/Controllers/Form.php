<?php

namespace App\Controllers;

class Form extends BaseController
{
    protected $helpers = ['form'];

    /**
     * The form
     *
     * @return string
     */
    public function form1()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('form2');
        }

        $rules = [
            'username' => 'required',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email'    => 'required|valid_email',
        ];

        if (! $this->validate($rules)) {
            return view('form2');
        }

        return view('success');
    }

    /**
     * The form using redirect and withInput()
     *
     * Warning: This way is not documented, so it is not officially supported,
     *          and it is buggy. Do not use.
     *
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     */
    public function form2()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('form2');
        }

        $rules = [
            'username' => 'required',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email'    => 'required|valid_email',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        return view('success');
    }
}
