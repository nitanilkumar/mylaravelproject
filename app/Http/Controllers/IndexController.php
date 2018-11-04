<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class IndexController extends Controller
{
    public function index()
    {
        return View('index');
    }
    public function authors()
    {
        return View('authors');
    }
    public function getcontact()
    {
        return View('contact');
    }
    public function submitcontact(Request $request)
    {
        $request->validate(
        [
            'name' => 'bail|required|max:255',
        ]);
        Contact::create([ 'uname'=> $request['name'],'email'=> $request['email'],'msg'=> $request['msg'],]);
        return Redirect()->route('contact')->with(['success' =>'Data Submitted Sucessfully. We will contacct you soon.',] );
    }
    
}
