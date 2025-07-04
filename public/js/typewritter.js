   const app = document.getElementById('typewriter');

    const typewriter = new Typewriter(app, {
        loop: true,
        pauseFor: 2500,
        autoStart: true,
        cursor: '▌',
        deleteSpeed: 100,
        typingSpeed: 75,
        cursorClassName: 'typewriter-cursor',
        strings: [
            'Bienvenue dans le système de gestion des frais universitaires',
            'Gérez facilement les frais des étudiants',
            'Suivez les paiements par tranche',
            'Générez des rapports en quelques clics',
            'Simplifiez la gestion des frais universitaires',
            'Optimisez la gestion des paiements étudiants',
            'Facilitez la gestion des frais universitaires',
            'Gérez les paiements étudiants efficacement',
            'Suivez les paiements étudiants en temps réel',
            'Générez des rapports détaillés sur les frais universitaires',
        ],
        autoInsertCss: true,
   
        delay: 100,
    });

    typewriter
        .typeString('Bienvenue dans le système de gestion des frais universitaires')
        .start();