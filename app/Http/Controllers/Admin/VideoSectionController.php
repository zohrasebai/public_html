<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoSection;
use Illuminate\Support\Facades\File;

class VideoSectionController extends Controller
{
    // دالة عرض الصفحة (هذه كانت مفقودة)
    public function index()
    {
        $video = VideoSection::first() ?? new VideoSection();
        return view('admin.video.index', compact('video'));
    }

public function update(Request $request)
{
    // 1. Récupérer la section vidéo existante
    $video = VideoSection::first();

    // 2. Gérer UNiquement l'upload de fichier
    if ($request->hasFile('video_file')) {
        $file = $request->file('video_file');
        
        // Vérifier l'extension
        if ($file->getClientOriginalExtension() == 'mp4') {
            $filename = time() . '_video.' . $file->getClientOriginalExtension();
            
            // Créer le dossier s'il n'existe pas
            if (!file_exists(public_path('videos'))) {
                mkdir(public_path('videos'), 0777, true);
            }

            // Déplacer et sauvegarder
            $file->move(public_path('videos'), $filename);
            $video->video_file = 'videos/' . $filename;
        } else {
            return back()->with('error', 'Le fichier doit être au format MP4.');
        }
    }

    // 3. Sauvegarder (On ne touche PAS aux titres/descriptions)
    $video->save();

    return redirect()->back()->with('success', 'Vidéo mise à jour avec succès.');
}
}