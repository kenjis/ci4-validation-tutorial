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

Navigate to http://localhost:8080/form1

This is a simple form:

- (`GET /form1`) Display the form1
- Submit (`POST /form1`)
- Validation passes → Display success
- Validation fails → Display form1 with Errors

### Form2

Navigate to http://localhost:8080/form2

This form is using redirect and withInput():

- (`GET /form2`) Display the form2
- Submit (`POST /form2`)
- Validation passes → Display success
- Validation fails → Redirect back → (`GET /form2`) Display form2 with Errors
