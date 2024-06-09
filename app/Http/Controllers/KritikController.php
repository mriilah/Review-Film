<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritik;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Auth;

class KritikController extends Controller
{
    public function store(Request $request, $id) 
    {
        $request->validate([
            'content' => 'required',
            'point' => 'required'
        ]);

        Kritik::create(
                [
                    'content' => $request->input('content'),
                ]
               
            );

        return redirect('/film/' . $id);
    }
}
