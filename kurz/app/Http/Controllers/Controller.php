<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(Request $request){

                    $login = $request->session()->has("user");
                    $name = $request->session()->get("user" , "Matěj");


        return view('index' , ['logged_in' => $login, 'name' => $name, 'products'  => $this->products() ]);

    }
    public function login(Request $request){
        $request->session()->put("user" , "Matěj");
        return redirect('/');
    }

    public function logout(Request $request){
        $request->session()->forget("user");
        return redirect('/');
    }

    public function cart(Request $request){
        if ($request->session()->has('user') != true) {
            return redirect('/');
        }

        $login = $request->session()->has("user");
        $name = $request->session()->get("user" , "Matěj");
        $cart = $request->session()->get("cart",[]);
        return view('index' , ['logged_in' => $login, 'name' => $name, 'products'  => $cart]);
    }

    public function add(Request $request, $id){
        if ($request->session()->has('user') != true){
            return redirect('/');
        }
        $Products = $this -> products();
        $product = $Products[$id];
        $cart = $request->session()->get("cart",[]);
        $cart[$id] = $product;
        $request->session()->put("cart" , $cart);
        return redirect('/cart');

    }

    public function products(){
        $p1 = new Product();
        $p1 -> id = 1;
        $p1 -> price = "96 312,00€";
        $p1 -> title = "Mercedes S 350d 4MATIC";
        $p1 -> description = "Flexxxx auto";
        $p1 -> image = "https://media.caradvice.com.au/image/private/c_fill,q_auto,f_auto,w_800,ar_16:9/328a7befd10c85a23a44392704f7f392.jpg";

        $p2 = new Product();
        $p2 -> id = 2;
        $p2 -> price = "149 628,00€";
        $p2 -> title = "Mercedes-AMG G 63";
        $p2-> description = "Viac flex Jeep";
        $p2 -> image = "https://s3-eu-west-1.amazonaws.com/i-sale-auto.com/vehicle/5ab2/7a/thumb_5ab27a3e7585cd0b272dfe42_vehicle_medium.jpeg";

        $p3 = new Product();
        $p3 -> id = 3;
        $p3 -> price = "165 894,00";
        $p3 -> title = "Mercedes-AMG GT C Roadster";
        $p3-> description = "Auto pre slobodných fotrov";
        $p3 -> image = "https://car-images.bauersecure.com/pagefiles/33196/1040x585/bmercamg-001.jpg";
        return[
            $p1 -> id => $p1,
            $p2 -> id => $p2,
            $p3 -> id => $p3,
        ];
    }


}

class Product
{
        var $price;
        var $title;
        var $description;
        var $image;
        var $id;
}



