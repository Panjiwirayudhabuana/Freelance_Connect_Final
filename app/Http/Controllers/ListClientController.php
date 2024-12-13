<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ListClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('Admin.tableclient', compact('clients'));
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('listclient')->with('success', 'Client deleted successfully.');
    }
}
