<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact as Contact;
use Mail;

class ContactController extends Controller
{

    public function __constract(Contact $contact){
        $this->contact=$contact;
    }
    
    public function ajouterContact(Contact $contact,Request $request){
        if($request->isMethod('post')){

            $sujet=$request->input('sujet');
            $email=$request->input('email');
            $description=$request->input('description');

            $contact=new Contact([
                'sujet'=>$sujet,
                'email'=>$email,
                'description'=>$description
                
            ]);

            $contact->save();

     


            $to_name = 'Jihane';
            $to_email = 'jihane@gmail.com';
            $data = array('username' => $to_name, 'mesg'=> "Votre message est enregistrer avec succes");
            Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('confirmation de formulaire');
            $message->from('mail@mail.com','Jihane Arfi');
            });

            return redirect('/')->with('message','Votre message est enregistré avec succès');
        }


    }

    public function listContacts(Contact $contact){

        $data['contacts']=$contact->all();

        return view('list-contact',$data);

    }
}
