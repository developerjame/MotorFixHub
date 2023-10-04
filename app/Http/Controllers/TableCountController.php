<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscription;

class TableCountController extends Controller
{
    public function countRows(){
        $count1 = Contact::count();
        $count2 = Subscription::count();

        return view('admin', compact('count1', 'count2'));
    }
}
