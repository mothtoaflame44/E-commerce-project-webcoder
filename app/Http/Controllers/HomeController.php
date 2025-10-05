<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
    return view('frontend.index');
   }

   public function shop()
   {
    return view('frontend.shop');
   }

   public function returnProcess()
   {
    return view('frontend.return-process');
   }
  public function viewCart()
   {
    return view('frontend.view-cart');
   }

  public function checkOut()
   {
    return view('frontend.checkout');
   }

  public function categoryProduct()
   {
    return view('frontend.category-product');
   }

  public function subCategoryProduct()
  {
   return view('frontend.sub-category-product');
  }
  public function details()
   {
    return view('frontend.details');

   }
  public function typeProducts()
  {
    return view('frontend.type-products');
   }


  public function privacyPolicy()
 {
  return view('frontend.privacy-policy');
 }

 public function termsCondition()
 {
  return view('frontend.terms-condition');
 }

 public function refundPolicy()
 {
  return view('frontend.refund-policy');
 }
public function paymentPolicy()
 {
  return view('frontend.payment-policy');
 }
public function aboutUs()
{
 return view('frontend.aboutus');
}

public function contactUs()
{
 return view('frontend.contact-us');
}



}
