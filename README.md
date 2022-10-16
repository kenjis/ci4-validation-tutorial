# CodeIgniter 4 Validation Tutorial

Since v4.3.0, new Form helper functions `validation_errors()`, `validation_list_errors()`
and `validation_show_error()` to display Validation Errors are added.

You can use the same View form file for a simple form and a form with redirect.

## Requirement

- CodeIgniter 4.3

## Setup

```console
$ git clone https://github.com/kenjis/ci4-validation-tutorial.git
$ cd ci4-validation-tutorial/
$ composer install
```

```console
$ php spark serve
```

## Forms

### [Form1](https://github.com/kenjis/ci4-validation-tutorial/blob/777c4f9ebf93388a90a344617f1dce5c32458058/app/Controllers/Form.php#L14)

This is a simple form:

- Navigate to http://localhost:8080/form1 (`GET /form1`)
  - Display the [form1](https://github.com/kenjis/ci4-validation-tutorial/blob/main/app/Views/form1.php)
- Submit (`POST /form1`)
  - Validation passes → Display [success](https://github.com/kenjis/ci4-validation-tutorial/blob/main/app/Views/success.php)
  - Validation fails → Display [form1](https://github.com/kenjis/ci4-validation-tutorial/blob/main/app/Views/form1.php) with Errors

### [Form2](https://github.com/kenjis/ci4-validation-tutorial/blob/777c4f9ebf93388a90a344617f1dce5c32458058/app/Controllers/Form.php#L39)

This form is using redirect and withInput():

- Navigate to http://localhost:8080/form2 (`GET /form2`)
  - Display the [form2](https://github.com/kenjis/ci4-validation-tutorial/blob/main/app/Views/form2.php)
- Submit (`POST /form2`)
  - Validation passes → Display [success](https://github.com/kenjis/ci4-validation-tutorial/blob/main/app/Views/success.php)
  - Validation fails → Redirect back → (`GET /form2`) Display [form2](https://github.com/kenjis/ci4-validation-tutorial/blob/main/app/Views/form2.php) with Errors
