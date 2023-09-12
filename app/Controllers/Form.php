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
        if (! $this->request->is('post')) {
            return view('form1');
        }

        $rules = [
            'username' => 'required|max_length[64]',
            'password' => 'required|max_length[255]|min_length[10]',
            'passconf' => 'required|max_length[255]|matches[password]',
            'email'    => 'required|max_length[254]|valid_email',
            'fruit.*'  => 'max_length[5]|in_list[apple,grape]',
        ];

        if (! $this->validate($rules)) {
            return view('form1');
        }

        $validData = $this->validator->getValidated();

        return view('success', $validData);
    }

    private function getDataKeys(array $rules): array
    {
        unset($rules['fruit.*']);
        $rules['fruit'] = '';

        return array_keys($rules);
    }

    /**
     * The form using redirect and withInput()
     *
     * @return \CodeIgniter\HTTP\RedirectResponse|string
     */
    public function form2()
    {
        if (! $this->request->is('post')) {
            return view('form2');
        }

        $rules = [
            'username' => 'required|max_length[64]',
            'password' => 'required|max_length[255]|min_length[10]',
            'passconf' => 'required|max_length[255]|matches[password]',
            'email'    => 'required|max_length[254]|valid_email',
            'fruit.*'  => 'max_length[5]|in_list[apple,grape]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $validData = $this->validator->getValidated();

        return view('success', $validData);
    }
}
