<?php

namespace Database\Seeders;

use App\Models\menu;
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        menu::truncate();
        $menus=[
            [

                'ordem'        =>'01.000'
                , 'descricao'   =>'Cadastros'
                , 'tipo'        =>'Título'
                , 'rota'        =>''
                , 'icone'       =>''
                , 'nivel'       =>''
            ],
            [

                'ordem'         =>'01.001'
                , 'descricao'   =>'Menu'
                , 'tipo'        =>'Link'
                , 'rota'        =>'menu.listAll'
                , 'icone'       =>'fa fa-list'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'01.002'
                , 'descricao'   =>'Menu Usuário'
                , 'tipo'        =>'Link'
                , 'rota'        =>'menu.menuUsuario'
                , 'icone'       =>'fas fa-user-cog'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'02.000'
                , 'descricao'   =>'Comercial'
                , 'tipo'        =>'Título'
                , 'rota'        =>''
                , 'icone'       =>''
                , 'nivel'       =>'restrito'
            ],
            [
                'ordem'         =>'02.001'
                , 'descricao'   =>'Vendas'
                , 'tipo'        =>'Link'
                , 'rota'        =>'vendas.listAll'
                , 'icone'       =>'fas fa-dollar-sign'
                , 'nivel'       =>'restrito'
            ],
            [
                'ordem'         =>'02.002'
                , 'descricao'   =>'Comissões Emissao'
                , 'tipo'        =>'Link'
                , 'rota'        =>'comissao.listAll'
                , 'icone'       =>'far fa-handshake'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'02.003'
                , 'descricao'   =>'Comissões Pgto'
                , 'tipo'        =>'Link'
                , 'rota'        =>'comissao.comissaoPagar'
                , 'icone'       =>'far fa-handshake'
                , 'nivel'       =>'restrito'
            ],
            [
                'ordem'         =>'03.000'
                , 'descricao'   =>'Financeiro'
                , 'tipo'        =>'Título'
                , 'rota'        =>''
                , 'icone'       =>''
                , 'nivel'       =>'restrito'
            ],
            [
                'ordem'         =>'03.001'
                , 'descricao'   =>'Receber'
                , 'tipo'        =>'Link'
                , 'rota'        =>'receber.listAll'
                , 'icone'       =>'fas fa-dollar-sign'
                , 'nivel'       =>'restrito'
            ],
            [
                'ordem'         =>'03.002'
                , 'descricao'   =>'Pagar'
                , 'tipo'        =>'Link'
                , 'rota'        =>'pagar.listAll'
                , 'icone'       =>'fas fa-dollar-sign'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'04.000'
                , 'descricao'   =>'Contabil'
                , 'tipo'        =>'Título'
                , 'rota'        =>''
                , 'icone'       =>''
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'04.001'
                , 'descricao'   =>'Exporta Baixas'
                , 'tipo'        =>'Link'
                , 'rota'        =>'contabilidade.exportaBaixas'
                , 'icone'       =>'fas fa-dollar-sign'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'04.002'
                , 'descricao'   =>'Estoque'
                , 'tipo'        =>'Link'
                , 'rota'        =>'contabilidade.estoque'
                , 'icone'       =>'fas fa-boxes'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'04.003'
                , 'descricao'   =>'Acerto Estoque'
                , 'tipo'        =>'Link'
                , 'rota'        =>'contabilidade.importaAcertoEstoque'
                , 'icone'       =>'fas fa-hat-wizard'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'04.004'
                , 'descricao'   =>'Sped'
                , 'tipo'        =>'Link'
                , 'rota'        =>'contabilidade.sped'
                , 'icone'       =>'fas fa-award'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'05.000'
                , 'descricao'   =>'Produção'
                , 'tipo'        =>'Título'
                , 'rota'        =>''
                , 'icone'       =>''
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'05.001'
                , 'descricao'   =>'Atualiza Ficha'
                , 'tipo'        =>'Link'
                , 'rota'        =>'fechamento.listAll'
                , 'icone'       =>'fas fa-cogs'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'05.002'
                , 'descricao'   =>'Busca similar'
                , 'tipo'        =>'Link'
                , 'rota'        =>'fechamento.produtoComFicha'
                , 'icone'       =>'fas fa-cogs'
                , 'nivel'       =>''
            ],
            [
                'ordem'         =>'05.003'
                , 'descricao'   =>'Importa Hrs Mlc'
                , 'tipo'        =>'Link'
                , 'rota'        =>'fechamento.importaHorasMlc'
                , 'icone'       =>'far fa-clock'
                , 'nivel'       =>''
            ],

        ];
        menu::insert($menus);
    }
}
