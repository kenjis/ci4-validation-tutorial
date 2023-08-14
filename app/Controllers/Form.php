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
            'username' => 'required',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email'    => 'required|valid_email',
            'fruit.*'  => 'in_list[apple,grape]',
        ];

        if (! $this->validate($rules)) {
            return view('form1');
        }

        $data = $this->request->getPost($this->getDataKeys($rules));

        return view('success', $data);
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
            'username' => 'required',
            'password' => 'required|min_length[10]',
            'passconf' => 'required|matches[password]',
            'email'    => 'required|valid_email',
            'fruit.*'  => 'in_list[apple,grape]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = $this->request->getPost($this->getDataKeys($rules));

        return view('success', $data);
    }
}
