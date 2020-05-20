<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        echo 'index';
    }
    public function create() {
       echo 'create';
    }
    public function store(Request $request) {
       echo 'store';
    }
    public function show($id) {
       echo 'show';
    }
    public function edit($id) {
       echo 'edit';
    }
    public function update(Request $request, $id) {
       echo 'update';
    }
    public function destroy($id) {
       echo 'destroy';
    }
    //--------------------------------------------------------------------------------
    /**
      * Responds to requests to GET /test
   */
   public function getIndex() {
    echo 'index method';
    }
    
    /**
        * Responds to requests to GET /test/show/1
    */
    public function getShow($id) {
        echo 'show method';
    }
    
    /**
        * Responds to requests to GET /test/admin-profile
    */
    public function getAdminProfile() {
        echo 'admin profile method';
    }
    
    /**
        * Responds to requests to POST /test/profile
    */
    public function postProfile() {
        echo 'profile method';
    }
    //--------------------------------------------------------------------------------
}
