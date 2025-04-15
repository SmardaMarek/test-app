<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function showServices()
    {
        $services = Service::all();

        return view('task2.index', compact('services'));
    }

    // Zobrazení detailu produktu
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('task2.service.show', compact('service'));
    }
}

