<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'icon' => '🛒',
                'title' => 'E-Commerce Platform',
                'description' => 'Plateforme e-commerce complète avec gestion des produits, panier, paiement en ligne et tableau de bord administrateur.',
                'tags' => ['Laravel 11', 'MySQL', 'Stripe', 'Vue.js']
            ],
            // ... Ajoutez tous les autres projets
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        $skills = [
            ['icon' => '🐘', 'name' => 'PHP & Laravel'],
            ['icon' => '🗄️', 'name' => 'MySQL / PostgreSQL'],
            // ... Ajoutez toutes les compétences
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}