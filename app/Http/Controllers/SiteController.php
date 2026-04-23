<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\NavLink;
use App\Models\VideoSection;
use App\Models\Slider;
use App\Models\About;
use App\Models\Setting;
use App\Models\Service;
use App\Models\CoreValue;
use App\Models\CoreValueItem;
use App\Models\Testimonial;
use App\Models\TestimonialItem;
use App\Models\OfferSection;
use App\Models\Partner;
use App\Models\SectionSetting;

class SiteController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('order', 'asc')->get();
        $nav_links = NavLink::where('is_active', true)->orderBy('position')->get();
        $global_settings = Setting::pluck('value', 'key');

        $activeSliders = Slider::orderBy('order', 'asc')->get();
        $about = About::first();
        $services = Service::orderBy('order', 'asc')->get();
        $video = VideoSection::first();

        $coreSettings = CoreValue::first();
        $coreItems = CoreValueItem::all();

        $testimonialSettings = Testimonial::first();
        $testimonialItems = TestimonialItem::all();

        $offer = OfferSection::first();
        $partners = Partner::all();

        // =========================
        // ABOUT SAFE VARIABLES
        // =========================
        $aboutData = $about;

        $aboutImg = ($aboutData && $aboutData->image)
            ? asset($aboutData->image)
            : asset('assets/images/background/consulting.jpg');

        $aboutTitle = $aboutData->title_fr ?? 'Qui Sommes-Nous';
        $aboutText1 = $aboutData->text_1_fr ?? '';
        $aboutText2 = $aboutData->text_2_fr ?? '';

        // =========================
        // CAUSES SECTION SAFE
        // =========================
        $causesSection = SectionSetting::where('section_name', 'causes_section')->first();

        $causes = [
            'subtitle' => $causesSection->subtitle_fr ?? 'Expertise en Certification',
            'title'    => $causesSection->title_fr ?? 'Nos Domaines d’Action',
            'desc'     => $causesSection->desc_fr ?? 'Nous accompagnons les entreprises vers l’excellence...',
        ];

       return view('home', [
    'settings' => $global_settings,
    'achievements' => $achievements,
    'nav_links' => $nav_links,
    'activeSliders' => $activeSliders,
    'video' => $video,
    'about' => $about,
    'services' => $services,
    'coreSettings' => $coreSettings,
    'coreItems' => $coreItems,
    'testimonialSettings' => $testimonialSettings,
    'testimonialItems' => $testimonialItems,
    'offer' => $offer,
    'partners' => $partners,

    // 🔥 IMPORTANT
    'aboutImg' => $aboutImg,
    'aboutTitle' => $aboutTitle,
    'aboutText1' => $aboutText1,
    'aboutText2' => $aboutText2,
]);
    }
}