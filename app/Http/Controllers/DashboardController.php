<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Banner;
use App\Models\SponserContact;
use Symfony\Component\HttpFoundation\StreamedResponse;

use App\Models\Question;
use App\Models\SponsorContact;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $contact = Contact::all();
        $sponser_contacts = SponsorContact::all();
        $questions = Question::all();
        return view('dashboard.index', compact('users', 'sponser_contacts','contact','questions'));
    }
    public function users()
    {
        // Assuming your User model is related to roles via a role column or relationship
        $users = User::whereHas('roles', function($query) {
            $query->where('name', 'user');
        })->simplePaginate(10);
        return view('dashboard.users', ['users' => $users]);
    }
    public function sponsersContact()
    {
        $contacts = SponsorContact::simplePaginate(10);
        return view('dashboard.sponsers_contact', ['contacts' => $contacts]);
    }
    public function usersContact()
    {
        $contacts = Contact::simplePaginate(10);
        return view('dashboard.contact', ['contacts' => $contacts]);
    }
    public function banners()
    {
        $users = User::all();
        $contact = Contact::all();
        $sponser_contacts = SponsorContact::all();
        $questions = Question::all();
        $banners = Banner::all();
        return view('dashboard.banners', compact('users', 'sponser_contacts','contact','questions','banners'));
    }
    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with(['message'=> 'Contact Deleted Successfully!', 'type'=>'success']);
    }
    public function deleteSponserContact($id)
    {
        $contact = SponsorContact::find($id);
        $contact->delete();
        return redirect()->back()->with(['message'=> 'Contact Deleted Successfully!', 'type'=>'success']);
    }
    public function postBanners(Request $request)
    {
        $request->validate([
            'bannerImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        if ($request->hasFile('bannerImage')) {
            // Store the new image
            $filePath = $request->file('bannerImage')->store('banners', 'public_audio');

            // Find the banner by banner_id
            $banner = Banner::find($request->banner_id);

            if ($banner) {
                // Update the banner image path
                $banner->image = $filePath;
                $banner->save();

                return redirect()->back()->with(['message' => 'Banner uploaded successfully!', 'type' => 'success']);
            } else {
                return redirect()->back()->with(['message' => 'Banner not found.', 'type' => 'error']);
            }
        }

        // If no file was uploaded
        return redirect()->back()->with(['message' => 'No file uploaded.', 'type' => 'error']);
    }
    public function downloadCSV()
    {
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="example.csv"',
        ];
        $callback = function () {
            $file = fopen('php://output', 'w');
            fputcsv($file, ['ID', 'Name', 'Email','Country of Origin','Date of Birth','Occupation']);
            $users = User::whereHas('roles', function($query) {
                $query->where('name', 'user');
            })->get();
            foreach ($users as $user) {
                fputcsv($file, [
                    $user->id,
                    $user->name,
                    $user->email,
                    $user->profile->country_of_origin,
                    $user->profile->dob,
                    $user->profile->occupation,
                ]);
            }
            fclose($file);
        };
        // Return a streamed response with the callback and headers
        return new StreamedResponse($callback, 200, $headers);
    }


}
