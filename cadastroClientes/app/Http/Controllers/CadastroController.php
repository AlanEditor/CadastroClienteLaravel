<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    //
    function index()
    {
        return view('app.cadastro');
    }

    //Cadastra os usuarios
    function cadastrar(Request $request)
    {      

       $consultar = new Cadastro();

       $validarCpf = $consultar->where('cpf', $request->cpf)->first();

        if(!empty($validarCpf) && ($validarCpf->cpf == $request->cpf) && ($request->cpf != ''))
        {
            $rules = ['cpf' => 'unique:cadastros,cpf'];
            $custom = ['unique' => 'Este CPF já está cadastrado'];

            $request->validate($rules, $custom);
        }
        else
        {
            $rules = [
                'nome' => 'required | min: 3',
                'sobrenome' => 'required | min: 3',
                //'email' => 'email',
                //'email_secundario' => 'email',
                'cpf' => 'min:0 | max: 14',
                'telefone' => 'min: 15',
                'telefone_secundario' => 'min: 0 | max: 15'
            ];

            $request->validate($rules);

            Cadastro::create($request->all());
            return redirect(route('listagem'));
            
        }

    }

    //lista os resultados 
    function listar()
    {
        $list = Cadastro::all();
        return view('app.listagem', ['lista' => $list]);
    }

    
    function edit($id)
    {
       $edit = Cadastro::where('id', $id)->first();

        return view('app.edicao', ['registro' => $edit]); 
    }

    //Atualiza
    function update(Request $request)
    {
        $consultar = new Cadastro();

        $validarCpf = $consultar->where('cpf', $request->cpf)->first();
 
         if(!empty($validarCpf) && ($validarCpf->cpf == $request->cpf) && ($validarCpf->id != $request->id))
         {
             /*
             $rules = ['cpf' => 'min:20'];
             $custom = ['min' => 'Este CPF já está cadastrado'];
 
             $request->validate($rules, $custom);
             */

             $rules = ['cpf' => 'unique:cadastros,cpf'];
             $custom = ['unique' => 'Este CPF já está cadastrado'];
 
             $request->validate($rules, $custom);

         }
         else
         {
            Cadastro::findOrFail($request->id)->update($request->all());

            return redirect(route('listagem'));
             
         }

    }

    //Deleta
    function destroy($id)
    {
        Cadastro::findOrFail($id)->delete();

        return redirect(route('listagem'));
    }

    //Pesquisa
    function pesquisar(Request $request)
    {
        
        $nome = Cadastro::where('nome', 'like', "%{$request->nomePesquisa}%")
                ->orWhere('sobrenome', 'like', "%{$request->nomePesquisa}%")
                ->orWhere('cpf', 'like', "%{$request->nomePesquisa}%")
                ->orWhere('email', 'like', "%{$request->nomePesquisa}%")
                ->orWhere('email_secundario', 'like', "%{$request->nomePesquisa}%")
                ->orWhere('telefone', 'like', "%{$request->nomePesquisa}%")
                ->orWhere('telefone_secundario', 'like', "%{$request->nomePesquisa}%")
                ->get();

        return view('app.listagem', ['lista' => $nome]);

        
    }
}
