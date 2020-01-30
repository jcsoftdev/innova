<?php

use Illuminate\Database\Seeder;
use App\Models\Concentracion;
class ConcentracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Concentracion::create([
            'nombre'	=>  strtoupper("SinCon"),
            'descripcion' => strtoupper('descripcion de concentracion'),
            'condicion' => 1
        ]);
        //Concentracion::create([
        //    'nombre'	=>  strtoupper("600 mg"),
        //    'descripcion' => strtoupper('descripcion de concentracion '),
        //    'condicion' => 1
        //]);
        //Concentracion::create([
        //    'nombre'  =>  strtoupper("1200 mg"),
        //    'descripcion' => strtoupper('descripcion de concentracion '),
        //    'condicion' => 1
        //]);
        //Concentracion::create([
        //    'nombre'	=>  strtoupper("1.5 mg"),
        //    'descripcion' => strtoupper('descripcion de concentracion '),
        //    'condicion' => 1
        //]);
        //Concentracion::create([
        //    'nombre'	=>  strtoupper("10 mg"),
        //    'descripcion' => strtoupper('descripcion de concentracion '),
        //    'condicion' => 1
        //]);
    }
}
