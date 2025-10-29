<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Développeur Laravel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            padding: 80px 20px;
            color: white;
            position: relative;
        }

        h1 {
            font-size: 3.5em;
            margin-bottom: 10px;
            animation: fadeInDown 1s ease;
        }

        .subtitle {
            font-size: 1.5em;
            opacity: 0.9;
            animation: fadeInUp 1s ease;
        }

        .laravel-badge {
            display: inline-block;
            background: #FF2D20;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            margin-top: 20px;
            font-weight: bold;
            animation: pulse 2s infinite;
        }

        .projects-section {
            background: white;
            border-radius: 20px;
            padding: 60px 40px;
            margin: 40px 0;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .section-title {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 50px;
            color: #667eea;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            margin: 20px auto;
            border-radius: 2px;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .project-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            padding: 30px;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #FF2D20, #667eea);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
        }

        .project-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2em;
            margin-bottom: 20px;
            color: white;
        }

        .project-title {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: #2d3748;
        }

        .project-description {
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .tag {
            background: white;
            color: #667eea;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 0.85em;
            font-weight: 600;
        }

        .skills-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            padding: 60px 40px;
            margin: 40px 0;
            color: white;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .skill-item {
            text-align: center;
            padding: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .skill-item:hover {
            background: rgba(255,255,255,0.2);
            transform: scale(1.05);
        }

        .skill-icon {
            font-size: 3em;
            margin-bottom: 15px;
        }

        .skill-name {
            font-size: 1.2em;
            font-weight: bold;
        }

        .contact-section {
            background: white;
            border-radius: 20px;
            padding: 60px 40px;
            margin: 40px 0;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .contact-btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 15px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1.2em;
            margin: 10px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .contact-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        footer {
            text-align: center;
            padding: 30px;
            color: white;
            font-size: 0.9em;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
            }
            .subtitle {
                font-size: 1.2em;
            }
            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>👋 Votre Nom</h1>
            <p class="subtitle">Développeur Web Full-Stack</p>
            <div class="laravel-badge">🚀 Spécialisé Laravel</div>
        </div>
    </header>

    <div class="container">
        <section class="projects-section">
            <h2 class="section-title">Mes Projets Laravel</h2>
            
            <div class="projects-grid">
                @foreach($projects as $project)
                <div class="project-card">
                    <div class="project-icon">{{ $project['icon'] }}</div>
                    <h3 class="project-title">{{ $project['title'] }}</h3>
                    <p class="project-description">{{ $project['description'] }}</p>
                    <div class="tech-tags">
                        @foreach($project['tags'] as $tag)
                        <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="skills-section">
            <h2 class="section-title" style="color: white;">Compétences Techniques</h2>
            <div class="skills-grid">
                @foreach($skills as $skill)
                <div class="skill-item">
                    <div class="skill-icon">{{ $skill['icon'] }}</div>
                    <div class="skill-name">{{ $skill['name'] }}</div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="contact-section">
            <h2 class="section-title">Contactez-moi</h2>
            <p style="font-size: 1.2em; color: #4a5568; margin-bottom: 30px;">
                Vous avez un projet en tête ? Discutons-en !
            </p>
            <a href="mailto:votre.email@example.com" class="contact-btn">📧 Email</a>
            <a href="https://github.com/votre-username" class="contact-btn">💻 GitHub</a>
            <a href="https://linkedin.com/in/votre-profil" class="contact-btn">💼 LinkedIn</a>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 - Portfolio Développeur Laravel | Fait avec ❤️ et Laravel</p>
    </footer>
</body>
</html>
