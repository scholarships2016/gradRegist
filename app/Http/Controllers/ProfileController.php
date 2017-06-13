<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function getYear(){
      $bYear = 2017;
      return $bYear + 543;
    }

    function getName($id){
      $customers =
      [
        ['Name' => 'Chokchai', 'Surname'=> 'Dawruang'],
        ['Name' => 'Thanathip', 'Surname'=> 'Boonmanan']
      ];
      return $customers[$id-1]['Name'];
    }
    function getFirtname(){
      return "Chokchai";
    }
    function getSurname(){
      return "Dawruang";
    }
    function getAge(){
      $currentYear = date("Y");
      return $currentYear-1983;
    }

    function getProfile(){
      $customer1 =

        ['name' => 'Chokchai', 'surname'=> 'Dawruang'];
        $customer2 =
        ['name' => 'Thanathip', 'surname'=> 'Boonmanan'];

      return view('profile', ['customers'=>[$customer1,$customer2]]);
    }

}
