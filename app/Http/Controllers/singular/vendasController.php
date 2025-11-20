<?php

namespace App\Http\Controllers\singular;

use App\Helpers\Vendas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vendasController extends Controller
{
    public function listAll(Request $request){
        $dateForm = $request->except('_token');

        $dataI      = $request->dtI;
        $dataF      = $request->dtF;
        if(!$dataI){$dataI = date('Y-m-d');};
        if(!$dataF){$dataF = date('Y-m-d');};
        $vendedor   = strtoupper($request->vendedor);
        $cliente    = strtoupper($request->cliente);
        $nf         = $request->nf;

        $nivel = Auth::user()->nivel;
        $rep_cod = Auth::user()->part_codigo;

        $vendas = Vendas::vendas($dataI,$dataF,$cliente,$vendedor,$nf,$nivel,$rep_cod);
        return view('vendas.listAll',compact('vendas','dateForm'));
    }
}
