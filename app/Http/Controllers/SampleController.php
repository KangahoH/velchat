<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use DB;


class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user= new User;
        $user->name="Harrison";
        $user->email="ha@gmail.com";
        $user->password= Hash::make("secret");
        $user->save();

        ///dd($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function retrieve()
    {
        // $user = DB::table('users')->where('email', '@gmail')->first();
        $user = User::where('name', 'Harrison')->first();

            return $user->email;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
    
        if($user) {
            $user->delete();
        
            return 'User Has been deleted';
    
        } else {
            return "User not found";
        }

    }

    public function another_destroy($id)
    {
        $user = User::find($id);
    
        if($user) {
            $user->delete();
        
            return 'User Has been deleted';
    
        } else {
            return "User not found";
        }
    }
    


    public function testingQueries()
    {
        
        

        // $user=update User;
        // $user->name="KHarrison";

         //return 'data has been saved';


    }

    public function testingUpdateQueries()
    {
        // //find mtd searches by the id field
        // $user = User::find(1);
        // $user->password = Hash::make('helloworld');
        // $user->update();
        // //dd($user);
        // return 'User Has been updated';

    }


}
