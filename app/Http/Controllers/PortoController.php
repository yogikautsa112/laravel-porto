<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PortoController extends Controller{
    public function index() {
        return view('header');
    }
    public function indexAbout() {
        return view('about');
    }
    public function indexContact() {
        return view('contact');
    }
    public function indexPortofolio() {
        return view('portofolio');
    }
}