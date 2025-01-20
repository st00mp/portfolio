<!-- Section présentation -->
<div id="about" class="section-about">
    <div class="about-container">
        <!-- Conteneur pour le texte de présentation -->
        <div class="about-content">
            <!-- Titre principal de la section présentation -->
            <h2 class="section-title">Vincent Corvers, développeur web backend</h2>
            <!-- Texte descriptif de la présentation -->
            <p class="section-text">Je conçois des solutions backend robustes et scalables adaptées à vos besoins.</p>
        </div>
        <!-- Image de présentation associée -->
        <img class="about-image" src="assets/images/about-image.png" alt="Photo de Vincent Corvers en Pixel Art">
    </div>
</div>

<!-- Section expertise -->
<section id="expertise" class="section-expertise">
    <!-- Titre principal de la section -->
    <h2 class="section-title">Mes expertises</h2>
    <!-- Texte introductif expliquant les expertises -->
    <p class="section-text">Mon expertise technique me permet de créer des solutions qui connectent les besoins des
        utilisateurs et les objectifs des entreprises, tout en garantissant robustesse et évolutivité.</p>

    <!-- Conteneur pour les éléments d'expertise -->
    <div class="expertise-container">

        <!-- Premier élément : Expertise Backend -->
        <article class="expertise-item">
            <!-- Icône représentant le backend -->
            <div class="icon-mobile">
                <img src="assets/images/server.rack@2x.png" alt="Icône Backend">
            </div>
            <!-- Titre de l'expertise -->
            <h3 class="expertise-title">Développement Backend</h3>
            <!-- Description de l'expertise -->
            <p class="expertise-text">Conception et déploiement d’API performantes, sécurisées et prêtes à évoluer avec vos
                besoins.</p>
        </article>

        <!-- Deuxième élément : Expertise gestion de bases de données -->
        <article class="expertise-item">
            <!-- Icône représentant la gestion de bases de données -->
            <div class="icon-mobile">
                <img src="assets/images/cylinder.split.1x2@2x.png" alt="Icône Gestion Base de Données">
            </div>
            <!-- Titre de l'expertise -->
            <h3 class="expertise-title">Gestion de Base de Données</h3>
            <!-- Description de l'expertise -->
            <p class="expertise-text">Gestion de bases de données avec des solutions adaptées comme MySQL, PostgreSQL et
                MongoDB.</p>
        </article>

        <!-- Troisième élément : Expertise DevOps -->
        <article class="expertise-item">
            <!-- Icône représentant le DevOps -->
            <div class="icon-mobile">
                <img src="assets/images/gearshape.arrow.trianglehead.2.clockwise.rotate.90@2x.png"
                    alt="Icône Gestion Base de Données">
            </div>
            <!-- Titre de l'expertise -->
            <h3 class="expertise-title">DevOps</h3>
            <!-- Description de l'expertise -->
            <p class="expertise-text">Automatisation et optimisation des processus de déploiement pour des systèmes
                performants.
            </p>
        </article>
        <!-- Bouton pour accéder aux projets -->
        <a href="index.php?page=projects" class="cta-button">Voir mes projets</a>
    </div>
</section>

<!-- Section contact -->
<section id="contact" class="section-contact">
    <!-- Titre principal de la section contact -->
    <h2 class="section-title">Contactez-moi</h2>
    <!-- Formulaire de contact -->
    <form action="#" method="post" class="contact-form">
        <!-- Champ pour le nom -->
        <label for="name" class="form-label">Nom :</label>
        <input type="text" id="name" name="name" class="form-input" required>

        <!-- Champ pour l'email -->
        <label for="email" class="form-label">Email :</label>
        <input type="email" id="email" name="email" class="form-input" required>

        <!-- Champ pour le message -->
        <label for="message" class="form-label">Message :</label>
        <textarea id="message" name="message" class="form-textarea" rows="5" required></textarea>

        <!-- Bouton pour soumettre le formulaire -->
        <button type="submit" class="form-button">Envoyer</button>
    </form>
</section>