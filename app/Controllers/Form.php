<?php

namespace App\Controllers;

use Config\Services;

class Form extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('signup', [
                'validation' => Services::validation(),
            ]);
        }

        $rules = [
            'username' => 'required',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email'    => 'required|valid_email',
        ];

        if (! $this->validate($rules)) {
            return view('signup', [
                'validation' => $this->validator,
            ]);
        }

        return view('success');
    }

    /**
     * The form using redirect and withInput()
     *
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     */
    public function form2()
    {
        session();

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
