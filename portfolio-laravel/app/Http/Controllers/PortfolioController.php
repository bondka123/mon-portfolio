<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'icon' => '🛒',
                'title' => 'E-Commerce Platform',
                'description' => 'Plateforme e-commerce complète avec gestion des produits, panier, paiement en ligne et tableau de bord administrateur.',
                'tags' => ['Laravel 11', 'MySQL', 'Stripe', 'Vue.js']
            ],
            [
                'icon' => '📱',
                'title' => 'Application de Gestion',
                'description' => 'Système de gestion d\'entreprise avec CRM, facturation, suivi des projets et gestion des ressources humaines.',
                'tags' => ['Laravel 10', 'PostgreSQL', 'API REST', 'Livewire']
            ],
            [
                'icon' => '📚',
                'title' => 'Plateforme E-Learning',
                'description' => 'Plateforme d\'apprentissage en ligne avec cours vidéo, quiz interactifs, certification et suivi de progression.',
                'tags' => ['Laravel 11', 'Redis', 'WebSockets', 'Tailwind']
            ],
            [
                'icon' => '🏥',
                'title' => 'Système de Réservation',
                'description' => 'Application de prise de rendez-vous médicaux avec notifications SMS/Email, gestion des dossiers patients.',
                'tags' => ['Laravel 10', 'MongoDB', 'Queue Jobs', 'Bootstrap']
            ],
            [
                'icon' => '💬',
                'title' => 'Chat en Temps Réel',
                'description' => 'Application de messagerie instantanée avec chat en temps réel, partage de fichiers et notifications push.',
                'tags' => ['Laravel 11', 'Pusher', 'Broadcasting', 'Alpine.js']
            ],
            [
                'icon' => '📊',
                'title' => 'Dashboard Analytics',
                'description' => 'Tableau de bord analytique avec graphiques interactifs, rapports exportables et statistiques en temps réel.',
                'tags' => ['Laravel 11', 'Chart.js', 'API RESTful', 'Docker']
            ]
        ];

        $skills = [
            ['icon' => '🐘', 'name' => 'PHP & Laravel'],
            ['icon' => '🗄️', 'name' => 'MySQL / PostgreSQL'],
            ['icon' => '⚡', 'name' => 'Vue.js / React'],
            ['icon' => '🎨', 'name' => 'Tailwind CSS'],
            ['icon' => '🔧', 'name' => 'API REST / GraphQL'],
            ['icon' => '🐳', 'name' => 'Docker / CI/CD']
        ];

        return view('portfolio', compact('projects', 'skills'));
    }
}
