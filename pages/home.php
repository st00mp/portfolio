    <!--Section présentation-->
    <header id="about" class="section-about">
        <h2 class="section-title">Vincent Corvers, développeur web backend</h2>
        <p class="section-text"> Je conçois des solutions backend robustes et scalables adaptées à vos besoins.</p>
        <img class="about-image" src="assets/images/about-image.png" alt="Photo de Vincent Corvers">
    </header>

    <!--Section expertise-->
    <section id="expertise" class="section-expertise">
        <h2 class="section-title">Mes expertises</h2>
        <p class="section-text">Mon expertise technique me permet de créer des solutions qui connectent les besoins des
            utilisateurs et les objectifs des entreprises, tout en garantissant robustesse et évolutivité.</p>

        <div class="expertise-container">

            <article class="expertise-item">
                <div class="icon-mobile">
                    <img src="assets/images/server.rack@2x.png" alt="Icône Backend">
                </div>
                <h3 class="expertise-title">Développement Backend</h3>
                <p class="expertise-text">Conception et déploiement d’API performantes, sécurisées et prêtes à évoluer avec vos
                    besoins.</p>
            </article>

            <article class="expertise-item">
                <div class="icon-mobile">
                    <img src="assets/images/cylinder.split.1x2@2x.png" alt="Icône Gestion Base de Données">
                </div>
                <h3 class="expertise-title">Gestion de Base de Données</h3>
                <p class="expertise-text">Gestion de bases de données avec des solutions adaptées comme MySQL, PostgreSQL et
                    MongoDB.</p>
            </article>

            <article class="expertise-item">
                <div class="icon-mobile">
                    <img src="assets/images/gearshape.arrow.trianglehead.2.clockwise.rotate.90@2x.png"
                        alt="Icône Gestion Base de Données">
                </div>
                <h3 class="expertise-title">DevOps</h3>
                <p class="expertise-text">Automatisation et optimisation des processus de déploiement pour des systèmes
                    performants.
                </p>
            </article>
            <a href="index.php?page=projects" class="cta-button">Voir mes projets</a>
        </div>
    </section>

    <!--Section témoignages -->
    <?php require 'includes/testimonial.php'; ?>

    <!--Section contact-->
    <section id="contact" class="section-contact">
        <h2 class="section-title">Contactez-moi</h2>
        <form action="#" method="post" class="contact-form">
            <label for="name" class="form-label">Nom :</label>
            <input type="text" id="name" name="name" class="form-input" required>

            <label for="email" class="form-label">Email :</label>
            <input type="email" id="email" name="email" class="form-input" required>

            <label for="message" class="form-label">Message :</label>
            <textarea id="message" name="message" class="form-textarea" rows="5" required></textarea>

            <button type="submit" class="form-button">Envoyer</button>
        </form>
    </section>