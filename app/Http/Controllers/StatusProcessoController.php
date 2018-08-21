<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatusProcessoRequest;
use App\Http\Requests;
use App\StatusProcesso;

class StatusProcessoController extends Controller
{
    public function index(){
        $status = StatusProcesso::all();
        return view('dados.list',['dados'=>$status]);
    }

    public function create(){
        return view('dados.create');
    }

    public function store(StatusProcessoRequest $request){
        $input = $request->all();
        StatusProcesso::create($input);
        return redirect('dados/todos-status');
    }

    public function destroy($id){
        StatusProcesso::find($id)->delete();
        return redirect('dados/todos-status');
    }
}
