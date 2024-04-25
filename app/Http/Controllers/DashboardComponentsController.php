<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardComponentsController extends Controller
{
    public function buttons(){
        return Inertia::render('Components/ButtonUI');
    }
    public function dropdowns(){
        return Inertia::render('Components/DropDownUI');
    }
    public function typography(){
        return Inertia::render('Components/TypographyUI');
    }
}
