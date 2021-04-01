<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Entreprise;
use Symfony\Component\CssSelector\Node\PseudoNode;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
        //$this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
    }
    //
    public function index()
    {


        //$clients = Client::where("status", '=', 1)->get(); sans utilisation du scope
        //$clients = Client::Status(); avec le scope
        //pour le eager loading
        //$clients = Client::with('entreprise')->get();//version amélioré
        $clients = Client::with('entreprise')->paginate(10);
        //$entreprises = Entreprise::all();
        /*return view(
            'clients/index',
            [
                'data' => $clients
            ]
        );*/
        return view('clients/index', compact('clients'));
    }

    public function create()
    {
        $this->authorize('create', Client::class);
        $entreprises = Entreprise::all(); // utiliser dans le dropdown
        $client = new Client();

        return view('clients.create', compact('client', 'entreprises'));
    }

    public function store()
    {
        //validation
        $data = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'status' => 'required',
            'entreprise_id' => 'required|integer',
            'img' => 'sometimes|image' //sometimes = si oui ok sinon ok aussi
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
        return redirect("clients");
        //return redirect()->view('clients/' . Client->id);
        //return view('clients/index');
    }
    public function show($client)
    {
        //$client = Client::find($client);     1er solution
        $client = Client::where('id', $client)->firstOrFail(); // ca léve une exception en cas on a une fausse id en lien

        return view("clients.show", compact('client'));
    }
    public function edit(Client $client)
    {
        $entreprises = Entreprise::all();
        return view("clients.edit", compact("client", "entreprises"));
    }
    public function update(Client $client)
    {
        $data = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'status' => 'required',
            'entreprise_id' => 'required|integer',
            'img' => 'sometimes|image'
        ]);

        $client->update($data);
        return redirect("clients/" . $client->id);
    }
    public function destroy(Client $client)
    {
        $this->authorize('delete', $client); //$client= c'est seulement le client qu'on veut delete
        $client->delete();
        return redirect("clients");
    }
}