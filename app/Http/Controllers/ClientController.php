<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // This method shows the list of clients
    public function index()
    {
        $clients = Client::all()->load('user');
    
        return view('admin.client.index', compact('clients'));
    }
    


    public function show($id)
    {
      
        $client = Client::findOrFail($id);
        
        return view('admin.client.show', ['clients' => $client]);
    }
  
    public function destroy($id)
    {
       
        $client = Client::findOrFail($id);

        $client->delete();

        return redirect()->route('admin.client.index')->with('success', 'Client deleted successfully.');
    }
}
