# CodeIgniter 4 Validation Tutorial

Since v4.3.0, new Form helper functions `validation_errors()`, `validation_list_errors()`
and `validation_show_error()` to display Validation Errors are added.

You can use the same View file for a simple form and a form with redirect.

## Requirement

- CodeIgniter 4.3

## Setup

```console
$ git clone https://github.com/kenjis/ci4-validation-tutorial.git
$ cd ci4-validation-tutorial/
$ composer update
```

```console
$ php spark serve
```

## Forms

### Form1

This is a simple form.

Navigate to http://localhost:8080/form1

### Form2

This form is using redirect and withInput().

Navigate to http://localhost:8080/form2
