<?php

namespace Modules\Theme\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Theme\Repositories\Interface\ThemeProductInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Modules\Auth\Entities\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ThemeController extends Controller
{
    private $themeProductEloquent;
    public function __construct(ThemeProductInterface $themeProductEloquent)
    {
        $this->middleware('locale');
        $this->themeProductEloquent = $themeProductEloquent;
    }
    public function index(Request $request){
        $products = $this->themeProductEloquent->getSort();
        if($request->has('desc_price')){
            $products = $products->orderBy('price','DESC')->paginate(20);
        }
        if($request->has('asc_price')){
            $products = $products->orderBy('sale_price','ASC')->paginate(20);
        }
        if($request->has('newest')){
            $products = $products->orderBy('created_at','DESC')->paginate(20);
        }
        if($request->has('hot')){
            $products = $products->where('label','=','hot')->paginate(20);
        }
        if($request->all() == []){
            $products = $products->paginate(20);
        }
        return view('theme::home.index',compact('products'));
    }
    public function showDetail($id){
        $product = $this->themeProductEloquent->findById($id);
        return view('theme::home.detail',compact('product'));
    }
    public function addCart(Request $request){
        $product = $this->themeProductEloquent->findById($request->id);
        $thumbnail = $product->thumbnail;
        $id = $product->id;
        $quantity = $request->quantity;
        $name = $product->translations[0]->name;
        $price = $product->price * (100 - $product->off) / 100;
        Cart::add($id, $name, $quantity, $price, 0, ['options' => ['image' => $thumbnail]]);
        return response()->json(['success' => 'Add sản phẩm vào giỏ hàng thành công']);
    }
        public function removeCart(Request $request){
            $rowId = $request->rowId;
            $old_qty = Cart::get($rowId)->qty;
            Cart::update($rowId, $old_qty - 1);
            return response()->json(['success' => 'Xoá sản phẩm khỏi giỏ hàng thành công']);
        }
    public function showRegister(){
        return view('theme::home.register');
    }
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email'=>'required|email|unique:users',
            'password' =>'required|min:6',
        ]);
        $token = Str::random(64);

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->role = 'peasant';
        $user->save();

        Mail::send('theme::email.verification', ['token' => $token,'id'=>$user->id], function($message) use($request){
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });

        return redirect(route('theme.home'))->withSuccess('Great! You have Successfully loggedin');
    }
    public function userVerify($id){
        $user = User::find($id);
        $user->is_verified = true;
        $user->save();

        return response()->json('Successful verified');
    }
}
