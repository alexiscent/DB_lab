<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Item;
use App\Models\Material;
use Illuminate\Http\Request;

class myController extends Controller
{
    public function index() {
        return view('index')
            ->with('title', 'Головна');
    }

    public function search($type, $id) {
        if ($type == 'group') {
            $obj = Group::find($id);
            if (empty($obj)) {abort(404);}
            $cont = $obj->students;
            $from = 'Склад групи '.$obj->name;
            $type = '';
        } elseif ($type == 'item') {
            $obj = Item::find($id);
            if (empty($obj)) {abort(404);}
            $cont = $obj->materials;
            $from = $obj->name.' складається з:';
            $type = 'material';
        } elseif ($type == 'material') {
            $obj = Material::find($id);
            if (empty($obj)) {abort(404);}
            $cont = $obj->items;
            $from = $obj->name.' міститься в:';
            $type = 'item';
        } else {abort(404);}

        return view('search')
            ->with('title', 'Пошук')
            ->with('content', $cont)
            ->with('from', $from)
            ->with('type', $type);
    }
}
