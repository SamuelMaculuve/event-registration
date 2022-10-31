<?php

namespace App\Http\Controllers;

use App\Models\eventCompany;
use App\Models\eventRegistration;
use App\Models\eventRepresentative;
use App\Models\socialNetworks;
use Illuminate\Http\Request;
use PDF;

class EventRegistrationController extends Controller
{

    public function index()
    {
        return view('dashboard.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $eRegistion = new eventRegistration();
        $eCompany = new eventCompany();
        $eRepresentative = new eventRepresentative();
        $socialNetworks = new socialNetworks();

//        $request->validate([
//
//            'company_name' => 'required',
//            'area_operation' => 'required',
//            'nuit' => 'required',
//            'company_type' => 'required',
//            'province' => 'required',
//            'location' => 'required',
//            'action_time_market' => 'required',
//            'expectations' => 'required',
//            'lot' => 'required|number',
//            'terms_conditions' => 'required',
//
//            'social_instagram' => '',
//            'social_facebook' => '',
//            'social_linkedin' => '',
//            'social_website' => '',
//            'social_tiktik' => '',
//            'social_outra' => '',
//
//            'full_name' => 'required',
//            'r_role' => 'required',
//            'r_email' => 'required',
//            'r_cell' => 'required',
//
//            'c_email' => 'required',
//            'c_cell' => 'required',
//            'c_telefone' => 'required',
//            'c_whatsapp' => 'required',
//            'contact_nuit' => 'required',
//            'c_logo' => 'required',
//        ]);

        $eRegistion->company_name = $request->company_name;
        $eRegistion->area_operation = $request->area_operation;
        $eRegistion->nuit = $request->nuit;
        $eRegistion->company_type = $request->company_type;
        $eRegistion->province = $request->province;
        $eRegistion->location = $request->location;
        $eRegistion->action_time_market = $request->action_time_market;
        $eRegistion->expectations = $request->expectations;
        $eRegistion->lot = 100;
        $eRegistion->terms_conditions = true;
        $eRegistion->save();

        $socialNetworks->social_instagram = $request->social_instagram;
        $socialNetworks->social_facebook = $request->social_facebook;
        $socialNetworks->social_linkedin = $request->social_linkedin;
        $socialNetworks->social_website = $request->social_website;
        $socialNetworks->social_tiktik = $request->social_tiktik;
        $socialNetworks->social_outra = $request->social_outra;
        $socialNetworks->event_registration_id = $eRegistion->id;
        $socialNetworks->save();

        $eRepresentative->full_name = $request->social_instagram;
        $eRepresentative->role = $request->role;
        $eRepresentative->r_email = $request->r_email;
        $eRepresentative->r_cell = $request->r_cell;
        $eRepresentative->r_whatsapp = $request->r_whatsapp;
        $eRepresentative->event_registration_id = $eRegistion->id;
        $eRepresentative->save();

        $eCompany->c_email = $request->c_email;
        $eCompany->c_cell = $request->c_cell;
        $eCompany->c_telefone = $request->c_telefone;
        $eCompany->c_whatsapp = $request->c_whatsapp;
        $eCompany->c_contact_nuit = $request->c_contact_nuit;
        $eCompany->c_logo = 10;
        $eCompany->event_registration_id = $eRegistion->id;
        $eCompany->save();

        return redirect('/successful');
    }

    public function show(eventRegistration $eventRegistration)
    {
//        return dd($eventRegistration->eventrepresentative);
        return view('dashboard.show',compact('eventRegistration'));
    }

    public function approveCompany(eventRegistration $eventRegistration)
    {
        $eventRegistration->payment_state = true;

        $eventRegistration->update($eventRegistration->all());

        return redirect()->back()->with(['message' => 'Empresa aprovada com sucesso.']);
    }

    public function edit(eventRegistration $eventRegistration)
    {
        //
    }

    public function update(Request $request, eventRegistration $eventRegistration)
    {
        //
    }


    public function destroy(eventRegistration $eventRegistration)
    {
        $eventRegistration->delete();

        return redirect()->route('dashboard.index')
            ->with('message','Registro apagado com sucesso.');
    }
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('registrationpdf.pdf');
    }
}
