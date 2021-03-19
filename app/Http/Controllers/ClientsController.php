<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Entreprise;
use Symfony\Component\CssSelector\Node\PseudoNode;

class ClientsController extends Controller
{
    //
    public function list()
    {

        //$clients = Client::all();
        //$clients = Client::where("status", '=', 1)->get(); sans utilisation du scope
        $clients = Client::Status();
        $entreprises = Entreprise::all();
        /*return view(
            'clients/index',
            [
                'data' => $clients
            ]
        );*/
        return view('clients/index', compact('clients', 'entreprises'));
    }

    public function store()
    {
        //validation
        $data = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'status' => 'required',
            'entreprise_id' => 'required|integer'
        ]);
        //récupe de ce qui a était post
        //$name = request('name');
        //$email = request('email');
        //$status = request('status');

        //sauvegarde dans la base de donner
        //$client = new Client();
        //$client->name = $name;
        //$client->email = $email;
        //$client->status = $status;
        //$client->save();
        Client::create($data);
        //retoure a la page précédente
        return back();
    }
}