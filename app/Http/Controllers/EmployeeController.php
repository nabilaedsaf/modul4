<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {
    $pageTitle = 'Employee List';
    return view('employee.index', ['pageTitle' => $pageTitle]);
    }
        /**
     * Display a listing of the resource.
     */
    public function create()
    {
    $pageTitle = 'Create Employee';
    return view('employee.create', compact('pageTitle'));
    }
    public function showResults(){
        $field = Request::input('age');

        /* Note: "performQuery" is a private function
         * that always returns a new view in the
         * form: "view('some-view', compact('results'))" */
        return $this->performQuery($field);
    }
public function store(Request $request)
{
$messages = [
'required' => ':Attribute harus diisi.',
'email' => 'Isi :attribute dengan format yang benar',
'numeric' => 'Isi :attribute dengan angka'
];
$validator = Validator::make($request->all(), [
'firstName' => 'required',
'lastName' => 'required',
'email' => 'required|email',
'age' => 'required|numeric',
], $messages);
if ($validator->fails()) {
return redirect()->back()->withErrors($validator)->withInput();
}
return $request->all();
}
}

