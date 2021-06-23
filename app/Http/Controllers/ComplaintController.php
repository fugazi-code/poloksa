<?php

namespace App\Http\Controllers;

use App\Models\Complains;
use App\Mail\NewComplain;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreComplaintRequest;

class ComplaintController extends Controller
{
    public function index()
    {
        $agencies  = DB::table('agencies')->select(['id', 'name'])->whereNull('deleted_at')->orderBy('name')->get();
        $heinouses = DB::table('heinouses')->select(['id', 'name'])->get();

        return view('complaint', compact('agencies', 'heinouses'));
    }

    public function store(StoreComplaintRequest $request)
    {
        $this->validate($request, [
            'passport' => function ($attribute, $value, $fail) {
                $cnt = DB::table('complains')->where('passport', $value)->count();
                if($cnt != 0) {
                    $fail('You already have submitted a Complaint. Please wait for our response. Thank you!');
                }
            },
        ]);
        $person_to_notify = DB::table('complain_emails')->get()->pluck('email')->toArray();
        $agency_emails    = DB::table('users')
                              ->where('agency_id', $request->agency_id)
                              ->get()
                              ->pluck('email')
                              ->toArray();

        $images = [];
        if ($request->file('image1')) {
            $images[] = $request->file('image1')->store('complains');
        }
        if ($request->file('image2')) {
            $images[] = $request->file('image2')->store('complains');
        }
        if ($request->file('image3')) {
            $images[] = $request->file('image3')->store('complains');
        }

        DB::table('complains')->insert([
            "first_name"           => $request->first_name,
            "middle_name"          => $request->middle_name,
            "last_name"            => $request->last_name,
            "gender"               => $request->gender,
            "passport"             => $request->passport,
            "location_ksa"         => $request->location_ksa,
            "email_address"        => $request->email_address,
            "contact_number"       => $request->contact_number,
            "contact_number2"      => $request->contact_number2,
            "occupation"           => $request->occupation,
            "employer_name"        => $request->employer_name,
            "employer_contact"     => $request->employer_contact,
            "agency"               => $request->agency,
            "agency_id"            => $request->agency_id,
            "complain"             => $request->complain,
            "actual_langitude"     => $request->actual_langitude,
            "actual_longitude"     => $request->actual_longitude,
            "national_id"          => $request->national_id,
            "heinous"              => $request->heinous,
            "contact_person"       => $request->contact_person,
            "employer_national_id" => $request->employer_national_id,
            "host_agency"          => $request->host_agency,
            "image1"               => ! isset($images[0]) ?: $images[0],
            "image2"               => ! isset($images[1]) ?: $images[1],
            "image3"               => ! isset($images[2]) ?: $images[2],
        ]);

        Mail::to($agency_emails ?: 'yaramayservices@gmail.com')
            ->bcc($person_to_notify)
            ->send(new NewComplain($request));

        return redirect()->back();
    }
}
