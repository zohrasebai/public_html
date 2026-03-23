<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Achievement;
use App\Models\NavLink;
use App\Models\VideoSection;
use App\Models\Slider;
use App\Models\About;
use App\Models\Service;
use App\Models\CoreValue;
use App\Models\CoreValueItem;
use App\Models\Testimonial;
use App\Models\TestimonialItem;
use App\Models\OfferSection;
use App\Models\Partner;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        try {
            // 1. Récupération des données principales
            $settings = Setting::pluck('value', 'key');
            $nav_links = NavLink::where('is_active', true)->orderBy('position')->get();
            $achievements = Achievement::orderBy('order')->get();

            // 2. Éléments visuels
            $sliders = Slider::orderBy('order', 'asc')->get();
            $about = About::first() ?: new About();
            $video = VideoSection::first() ?: new VideoSection();

            // 3. Services et Valeurs
            $services = Service::orderBy('order')->get();
            $coreSettings = CoreValue::first() ?: new CoreValue();
            $coreItems = CoreValueItem::all();

            // 4. Témoignages et Offres
            $testimonialSettings = Testimonial::first() ?: new Testimonial();
            $testimonialItems = TestimonialItem::all();
            $offer = OfferSection::first() ?: new OfferSection();
            $partners = Partner::all();

            return view('home', compact(
                'settings', 
                'achievements', 
                'nav_links',
                'sliders', 
                'about', 
                'video', 
                'services', 
                'coreSettings', 
                'coreItems', 
                'testimonialSettings', 
                'testimonialItems', 
                'offer', 
                'partners'
            ));
        } catch (\Exception $e) {
            // Sécurité : évite l'erreur 500 si la base de données est vide
            return view('home')->with('error', 'Certaines données sont en cours de configuration.');
        }
    }

    /**
     * Affiche la page des Causes / Engagements
     */
    public function causes()
    {
        try {
            $settings = Setting::pluck('value', 'key');
            $coreSettings = CoreValue::first() ?: new CoreValue();
            $coreItems = CoreValueItem::all();
            
            return view('causes', compact('settings', 'coreSettings', 'coreItems'));
        } catch (\Exception $e) {
            return view('causes');
        }
    }
}