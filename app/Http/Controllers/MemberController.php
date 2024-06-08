<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{

    /**
     * Create new member in system
     * @param Request $request
    */
    public function createMember(Request $request){
        try {
         $validator = Validator::make($request->all(), [
            "photo"=> "nullable|file",
            "nom"=>"required|string",
            "postnom"=> "nullable|string",
            "prenom"=> "required|string",
            "etatcivil"=> "required|string",
            "genre"=> "required|string",
            "telephone"=> "required|string",
            "email"=> "nullable|string",
            "adresse"=> "required|string",
            "ville"=> "required|string",
            "nationalite"=> "required|string",
            "description"=> "nullable|string",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $validator->validated();
        // Gère le téléchargement de la photo
        if ($request->hasFile('photo')) {
            $domain = $request->getHttpHost();
            $image = $request->file('photo');
            $imageName = time().'_'.$data['nom'].'_'.$data['prenom'].'.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/members'), $imageName);
            $data['photo'] = 'http://' . $domain . '/uploads/members/' . $imageName;
        }

        $data['identifiant'] = 'FBC_'.$this->generateId();
        //Create new member
        $member = Membre::create($data);
        return redirect()->back()->with('success', 'Votre compte membre est créé avec succès !, Votre numéro d\'identification de membre est :'.$member->identifiant);
        } catch (\Illuminate\Database\QueryException | \ErrorException | \Exception $e) {
            $errorMessage = $e->getMessage();
            return redirect()->back()->with(['errors' => $errorMessage])->withInput();
        }
    }

    /**
     * @generate alpha numeric id
     * @return string
    */
    private function generateId()
    {
        return substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
    }
}
