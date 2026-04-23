<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderToPartnersTable extends Migration
{
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            // Ajouter la colonne 'order' manquante
            if (!Schema::hasColumn('partners', 'order')) {
                $table->integer('order')->default(0);
            }
            
            // Ajoutons aussi les timestamps si jamais ils manquaient (optionnel mais sécurisé)
            if (!Schema::hasColumn('partners', 'created_at')) {
                $table->timestamp('created_at')->useCurrent();
            }
            if (!Schema::hasColumn('partners', 'updated_at')) {
                $table->timestamp('updated_at')->useCurrent();
            }
        });
    }

    public function down()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
}