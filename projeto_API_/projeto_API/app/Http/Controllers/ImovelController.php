<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Facades\ApiImovel;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imoveis = ApiImovel::get("/imovel");
        $imoveis = $imoveis['data'];

        return view('home')->with(['imoveis' => $imoveis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ApiImovel::asForm()->post("/imovel", [
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'conteudo' => $request->conteudo,
            'price' => $request->price,
            'banheiro' => $request->banheiro,
            'quarto' => $request->quarto,
            'area_propriedade' => $request->area_propriedade,
            'total_area_propriedade' => $request->total_area_propriedade,
            'slug' => $request->slug,
        ]);

        return redirect('/')->with('msg', 'Imóvel cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imoveis = ApiImovel::get("/imovel/{$id}");
        $imoveis = $imoveis['data'];

        #dd($imovel);
        return view('imoveis.show')->with(['imoveis' => $imoveis]);
    }


    public function dashboard()
    {
        #$user = auth()->user();

        $imoveis = ApiImovel::get("/imovel?page=1");
        $imoveis = $imoveis['data'];

        return view('imoveis.dashboard', ['imoveis' => $imoveis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imoveis = ApiImovel::get("/imovel/{$id}");
        $imoveis = $imoveis['data'];

        return view('imoveis.edit', ['imoveis' => $imoveis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ApiImovel::asForm()->put("/imovel/{$id}", [
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'conteudo' => $request->conteudo,
            'price' => $request->price,
            'banheiro' => $request->banheiro,
            'quarto' => $request->quarto,
            'area_propriedade' => $request->area_propriedade,
            'total_area_propriedade' => $request->total_area_propriedade,
            'slug' => $request->slug,
        ]);

        return redirect('/dashboard')->with('msg', 'Imóvel editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ApiImovel::delete("/imovel/{$id}");

        return redirect('/dashboard')->with('msg', 'Imóvel excluido com sucesso!');
    }
}
