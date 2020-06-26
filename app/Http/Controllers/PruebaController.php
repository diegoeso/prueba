<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{

    public function prueba1(Request $request)
    {
        $numero = $request->numero;
        $data   = [];
        for ($i = 1; $i <= $numero; $i++) {
            $div = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $div = $div + 1;
                }

            }
            if ($div == 2) {
                $data[] = $i;
            }
        }
        return view('prueba1_datos', compact('data'));
    }

    public function prueba2(Request $request)
    {

        $numero = $request->numero;
        $res    = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $res = $res * $i;
        }
        return view('prueba2_datos', compact('res', 'numero'));

    }

    public function prueba3()
    {
        $distancias = array(
            // 'Zocalo, Centro, Ciudad de Mexico, CDMX'              =>
            array(
                'lat' => 19.432174,
                'log' => -99.133382,
            ),
            // 'Portales de toluca, Centro, Toluca de lerdo, Mex'    =>
            array(
                'lat' => 19.290527,
                'log' => -99.656922,
            ),
            // 'Velo de novia, Avandaro, Valle de bravo, Mex'        =>
            array(
                'lat' => 19.166497,
                'log' => -100.139959,
            ),
            // 'Grutas de cacahuamilpa, Alpuyeca, Centro, Miacatlan' =>
            array(
                'lat' => 18.768364,
                'log' => -99.356209,
            ),
        );
        for ($i = 0; $i < count($distancias); $i++) {
            echo '<br>';
            print $distancias[$i]['log'];
            echo '<br>';
            print $distancias[$i]['lat'];
        }
    }

    public function login(Request $request)
    {
        $password = base64_encode('secret');
        $user     = 'diego.enrique76@gmail.com';

        $validator = \Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required',

        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator->errors());
        }

        if (base64_encode($request->password) == $password && $request->email == $user) {
            return true;
        }
        return redirect()->back()->with(['estatus' => 'Usuario no localizado']);
    }

    public function prueba5(Request $request)
    {
        $tipo     = $request->tipo;
        $cantidad = $request->cantidad;
        if ($tipo == 1) {
            $res     = $cantidad * 18;
            $mensaje = "Litros a comprar: $cantidad, total a pagar: $res pesos";
        } else if ($tipo == 2) {
            $res     = $cantidad / 18;
            $mensaje = "Monto a comprar: $cantidad, total de litros: $res litros";
        }

        return back()->with(['mensaje' => $mensaje]);
    }
}
