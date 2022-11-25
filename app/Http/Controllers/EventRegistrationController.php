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
        $eventRegistions = eventRegistration::orderBy('created_at', 'desc')->get();

        return view('dashboard.index',compact('eventRegistions'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        $validatedData = $request->validate([
//            'image_comp' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
//        ]);

//        $path = $request->file('image_comp')->store('public/comprovations');

        $imageName = time().'.'.$request->image_comp->extension();

        $request->image_comp->move(public_path('comprovations'), $imageName);

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
        $eRegistion->nuit = 12;
        $eRegistion->company_type = $request->company_type;
        $eRegistion->province = $request->province;
        $eRegistion->location = $request->location;
        $eRegistion->action_time_market = $request->action_time_market;
        $eRegistion->expectations = $request->expectations;
        $eRegistion->lot = $request->lot;
        $eRegistion->terms_conditions = true;
        $eRegistion->image_comprovation = $imageName;
        $eRegistion->save();

        $socialNetworks->social_instagram = $request->social_instagram;
        $socialNetworks->social_facebook = $request->social_facebook;
        $socialNetworks->social_linkedin = $request->social_linkedin;
        $socialNetworks->social_website = $request->social_website;
        $socialNetworks->social_tiktik = $request->social_tiktik;
        $socialNetworks->social_outra = $request->social_outra;
        $socialNetworks->event_registration_id = $eRegistion->id;
        $socialNetworks->save();

        $eRepresentative->full_name = $request->full_name;
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


        $details = [
            'title' => 'Cadastro onfirmação de cadastro',
            'body' => 'Confirmação do cadastro do evento Business Picth PMEs-B2B 2022'
        ];

        \Mail::to($request->r_email)->send(new \App\Mail\MyTestMail($details));

        return redirect('/successful');

    }

    public function show(eventRegistration $eventRegistration)
    {
//        return dd($eventRegistration->eventrepresentative);
        return view('dashboard.show',compact('eventRegistration'));
    }

    /**
     * Aprova uma determinada empresa.
     * @param eventRegistration $eventRegistration
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approveCompany(Request $reg,eventRegistration $eventRegistration)
    {

        if ($eventRegistration->payment_state == 1 && $reg->toSend == 1){

            return redirect()->back()->with(['message' => 'Falha ao aprovar Empresa.']);

        }else{

            $eventRegistration->update([
                 'payment_state' => 1,
             ]);

            return redirect()->back()->with(['message' => 'Empresa aprovada com sucesso.']);
        }

    }

    public function edit(eventRegistration $eventRegistration)
    {

    }

    public function update(Request $request, eventRegistration $eventRegistration)
    {
        dd($eventRegistration);
        if ($eventRegistration->payment_state == 1 && $reg->toSend == 1){

            return redirect()->back()->with(['message' => 'Falha ao aprovar Empresa.']);

        }else{

            $eventRegistration->update([
                'payment_state' => 1,
            ]);

            return redirect()->back()->with(['message' => 'Empresa aprovada com sucesso.']);
        }
    }


    public function destroy(eventRegistration $eventRegistration)
    {
        $eventRegistration->delete();

        return redirect()->route('dashboard.index')
            ->with('message','Registro apagado com sucesso.');
    }

    /***
     * Gera relatorios de todas as empresas
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = eventRegistration::all();

        view()->share('registration',$data);

        $pdf = PDF::loadView('registrationpdf')->setPaper('a4', 'landscape');

        return $pdf->download('registrationCompanys.pdf');
    }
    public function searchByNameOrCompany(Request $req)
    {
        $eventRegistions = '';

        if($req->companyName != ''){
            $eventRegistions = eventRegistration::
            where('company_name', 'like', '%' . $req->companyName . '%')
                ->get();
        }

        if($req->companyState != ''){
            $eventRegistions = eventRegistration::
                where('payment_state', 'like', '%' . $req->companyState . '%')
                ->get();
        }

        return view('dashboard.index',compact('eventRegistions'));

    }


}
