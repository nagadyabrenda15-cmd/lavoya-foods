<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\CustomerOrder;


class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

     
    public function index()
    {
        
        $customerOrders = CustomerOrder::all(); // Retrieve all orders from the database

        return view('admin/new-order', compact('customerOrders'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCart()
    {
        if (!$this->isUserLoggedIn()) {
            return redirect()->route('login');
        }
        if (!Session::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        // Get the product IDs from the cart items
        // Get the product IDs from the cart items
        foreach ($cart->items as $item) {
            $productIds[] = $item->id;
        }


        // Fetch the product details from the database using the product IDs
        $products = Product::whereIn('id', $productIds)->get();

        return view('checkout', ['products' => $products, 'cart' => $cart]);
    }

    
     public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $customer = new CustomerOrder();

    // Assign the validated form data to the model properties
    $customer->first_name = $request->input('first_name');
    $customer->last_name = $request->input('last_name');
    $customer->city = $request->input('city');
    $customer->street_address = $request->input('street_address');
    $customer->apartment = $request->input('appartment');
    $customer->phone = $request->input('phone');
    $customer->email = $request->input('email');
    

    // Save the Order details to the database
    if ($customer->save()) {
        

        return redirect()->back()->with('success', 'Order Placed successfully!');
    } else {
        return redirect()->back()->with('error', 'Failed to Submit Order!');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerOrder $customerOrder)
    {
        //
    }

    private function isUserLoggedIn() {
        return Auth::check();
    }
}
