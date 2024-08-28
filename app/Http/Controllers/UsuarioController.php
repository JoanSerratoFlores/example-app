<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {
        echo "index";
        die();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
        echo "create";
        die();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
        echo "store";
        die();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
        echo "show";
        die();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
        echo "edit";
        die();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
        echo "update";
        die();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
        echo "destroy";
        die();
    }
}
