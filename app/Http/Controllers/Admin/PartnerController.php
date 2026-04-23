<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('order')->get();
        return view('admin.partners.index', compact('partners'));
    }

    public function store(Request $request)
    {
        // 1. Validation simple
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // 2. Récupération directe du fichier (Sans hasFile pour éviter les bugs)
        $file = $request->file('image');

        // Vérification de sécurité : Si null, on arrête
        if (!$file) {
            return back()->with('error', 'Erreur : Aucun fichier détecté.');
        }

        // 3. Préparation du dossier
        $uploadDir = public_path('assets/images/partners');
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // 4. Gestion du nom et du chemin
        $filename = 'partner_' . time() . '.' . $file->getClientOriginalExtension();
        $dbPath = 'assets/images/partners/' . $filename;

        // 5. Déplacement du fichier
        $file->move($uploadDir, $filename);

        // 6. Sauvegarde en BDD
        Partner::create([
            'name' => 'Partenaire-' . time(), 
            'image' => $dbPath,
            'order' => 0
        ]);

        return back()->with('success', 'Image ajoutée avec succès.');
    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        if ($partner) {
            if ($partner->image && file_exists(public_path($partner->image))) {
                unlink(public_path($partner->image));
            }
            $partner->delete();
        }
        return back()->with('success', 'Partenaire supprimé.');
    }
}