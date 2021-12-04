<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait Generics
{
    // a function that generates a random unique ID
    function generateId()
    {
        $unique_id = (string) Str::uuid();
        $exploded = explode('-', $unique_id);
        $n_unique_id = $exploded[4];
        return $n_unique_id;
    }

    function createUniqueID($table, $column)
    {
        $id = $this->generateId();
        return DB::table($table)->where($column, $id)->first() ? $this->createUniqueID($table, $column) :  $id;
    }

    //a function that generates random numbers
    function generateRand()
    {
        $random = rand(100000, 999999);
        return $random;
    }

    function createUniqueRand($table, $column)
    {
        $random = $this->generateRand();
        return DB::table($table)->where($column, $random)->first() ? $this->createUniqueRand($table, $column) : $random;
    }

    // a function to make the profile update dynamic
    function update($req, $data)
    {
        $data->project = $req->project;
        $data->description = $req->description;
        $data->url = $req->url;
        $data->save();

        return back()->with('updated', "Portfolio Update was Successfull!");
    }

    function updateTeam($req, $data)
    {
        $data->name = $req->name;
        $data->position = $req->position;
        $data->save();

        return back()->with('updated', "Team memmber Update was Successfull!");
    }
}
