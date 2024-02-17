<?php

function getCategoryData(){
    return App\Models\Category::all();
}

function getTotalItems(){
    $UserId = Auth::id();
    return App\Models\Cart::where('user_id',$UserId)->where('cart_type','user')->count();
}