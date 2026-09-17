<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Azfar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#skills">Skils</a>
                    <a class="nav-link" href="#project">Project</a>
                    <a class="nav-link" href="#contact">contact</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>




    <section id="home" class="hero">

        <div class="hero-content">

            <p class="greeting">Halo, saya</p>

            <h1>Azfar</h1>

            <h2>Junior Web Developer</h2>

            <p class="description">
                Saya sedang belajar membuat website
                menggunakan HTML dan CSS.
            </p>

            <a href="#project" class="button">
                Lihat Project
            </a>

        </div>

    </section>


    <section id="about">

        <h2 class="section-title">Tentang Saya</h2>

        <div class="about-content">

            <div class="about-text">
                <blockquote>
                    <p>
                        Halo! Saya Azfar. Saya adalah seorang pemula
                        yang sedang belajar web development.
                    </p>

                    <p>
                        Saat ini saya sedang mempelajari HTML dan CSS
                        untuk membuat website yang menarik dan
                        mudah digunakan.
                    </p>
                </blockquote>
            </div>

        </div>

    </section>


    <section id="skills">

        <h2 class="section-title">Skills</h2>

        <div class="skills-container">

            <div class="skill-card">
                <h3>HTML</h3>
                <p>
                    Membuat struktur dasar sebuah website.
                </p>
            </div>

            <div class="skill-card">
                <h3>CSS</h3>
                <p>
                    Membuat tampilan website menjadi menarik.
                </p>
            </div>

            <div class="skill-card">
                <h3>Git</h3>
                <p>
                    Belajar mengelola dan menyimpan kode.
                </p>
            </div>

        </div>

    </section>



    <section id="project">

        <h2 class="section-title">Project Saya</h2>

        <div class="project-container">

            <div class="project-card">

                <h3>Website Pertama</h3>

                <p>
                    Website pertama yang saya buat
                    menggunakan HTML dan CSS.
                </p>

                <a href="#" class="project-button">
                    Lihat Project
                </a>

            </div>


            <div class="project-card">

                <h3>Website Login</h3>

                <p>
                    Membuat halaman login sederhana
                    menggunakan HTML dan CSS.
                </p>

                <a href="#" class="project-button">
                    Lihat Project
                </a>

            </div>


            <div class="project-card">

                <h3>Website Toko</h3>

                <p>
                    Website toko sederhana sebagai
                    latihan membuat layout.
                </p>

                <a href="#" class="project-button">
                    Lihat Project
                </a>

            </div>

        </div>

    </section>



    <section id="contact">

        <h2 class="section-title">Kontak</h2>

        <p>
            Tertarik untuk menghubungi saya?
        </p>

        <a href="mailto:azfarhatiyanto73@gmail.com" class="button">
            Kirim Email
        </a>

    </section>


    <footer>

        <p>
            © 2026 azfar. Semua Hak Dilindungi.
        </p>

    </footer>

</body>

</html>