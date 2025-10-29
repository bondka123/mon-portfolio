<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Contact;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // par exemple, pour protéger toutes les routes admin
    }

    // Dashboard
    public function dashboard()
    {
        $projectsCount = Project::count();
        $skillsCount = Skill::count();
        $contactsCount = Contact::count();

        return view('admin.dashboard', compact('projectsCount','skillsCount','contactsCount'));
    }

    // Liste des contacts
    public function contacts()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts', compact('contacts'));
    }
}
