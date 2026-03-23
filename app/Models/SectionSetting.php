<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionSetting extends Model
{
    // Permet d'insérer des données dans ces colonnes via l'admin
    protected $fillable = [
        'section_name', 
        'title_fr', 
        'subtitle_fr', 
        'desc_fr'
    ];
}