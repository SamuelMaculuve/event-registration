<?php

namespace App\Http\Controllers;

use App\Models\SingleEventRegistration;
use Illuminate\Http\Request;

class SingleEventRegistrationController extends Controller
{

    public function index()
    {
        $singleEventRegistration = SingleEventRegistration::all();

        return view('dashboard.singleEventRegistrations.index',compact('singleEventRegistration'));
    }

    public function store(Request $request)
    {
        $eventRegistration = new SingleEventRegistration();
        $imageName = time().'.'.$request->image_comp->extension();

        $request->image_comp->move(public_path('comprovations'), $imageName);

        $eventRegistration->full_name = $request->full_name;
        $eventRegistration->role = $request->role;
        $eventRegistration->email = $request->r_email;
        $eventRegistration->telefone = $request->r_cell;
        $eventRegistration->telefone_whatsapp = $request->r_whatsapp;

        $eventRegistration->expectations = $request->expectations;
        $eventRegistration->lot = $request->lot;
        $eventRegistration->terms_conditions = $request->terms_conditions;
        $eventRegistration->payment_state = $request->payment_state;
        $eventRegistration->image_comprovation = $imageName;
        $eventRegistration->save();


        $details = [
            'title' => 'Cadastro onfirmação de cadastro',
            'body' => 'Confirmação do cadastro do evento Business Picth PMEs-B2B 2022'
        ];

        \Mail::to($request->r_email)->send(new \App\Mail\MyTestMail($details));

        return redirect('/successful');

    }

    public function show(SingleEventRegistration $singleEventRegistration)
    {
        return view('dashboard.singleEventRegistrations.show',compact('singleEventRegistration'));
    }


    public function edit(SingleEventRegistration $singleEventRegistration)
    {
        //
    }

    public function update(Request $request, SingleEventRegistration $singleEventRegistration)
    {
        //
    }

    public function destroy(SingleEventRegistration $singleEventRegistration)
    {
        //
    }
    public function approveSingle(Request $reg,SingleEventRegistration $singleEventRegistration)
    {

        if ($singleEventRegistration->payment_state == 1 && $reg->toSend == 1){

            return redirect()->back()->with(['message' => 'Falha ao aprovar Empresa.']);

        }else{

            $singleEventRegistration->update([
                'payment_state' => 1,
            ]);

            return redirect()->back()->with(['message' => 'Singular aprovada com sucesso.']);
        }

    }
}
