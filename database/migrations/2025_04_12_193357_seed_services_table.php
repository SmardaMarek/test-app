<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('service')->insert([
            ['name' => 'Webdesign', 'description' => 'Tvorba moderních a responzivních webových stránek.'],
            ['name' => 'SEO optimalizace', 'description' => 'Zlepšení pozic ve vyhledávačích a zvýšení organické návštěvnosti.'],
            ['name' => 'Marketing na sociálních sítích', 'description' => 'Správa Facebook, Instagram a dalších platforem.'],
            ['name' => 'Tvorba e-shopu', 'description' => 'Kompletní řešení pro online prodej.'],
            ['name' => 'Copywriting', 'description' => 'Profesionální texty pro váš web nebo reklamu.'],
            ['name' => 'Analýza návštěvnosti', 'description' => 'Sledování a vyhodnocování návštěvnosti webu.'],
            ['name' => 'Technická podpora', 'description' => 'Rychlá pomoc s provozem vašeho webu.'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('service')->truncate();
    }
};
