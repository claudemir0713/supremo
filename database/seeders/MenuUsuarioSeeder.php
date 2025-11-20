<?php

namespace Database\Seeders;

use App\Models\menu;
use App\Models\menuUsuario;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class MenuUsuarioSeeder extends Seeder
{
    public function run()
    {
        menuUsuario::truncate();
        $id_useres = User::where('nivel','admin')->get(['id']);
        foreach($id_useres as $id_user){
            $menu = "INSERT menu_usuario(usuarioId, menuId) (SELECT $id_user->id, id FROM menu)";
            DB::insert($menu);
        }

        $id_useres1 = User::where('nivel','restrito')->get(['id']);
        foreach($id_useres1 as $id_user){
            $menu1 = "INSERT menu_usuario(usuarioId, menuId) (SELECT $id_user->id, id FROM menu WHERE nivel = 'restrito')";
            DB::insert($menu1);
        }

    }
}
