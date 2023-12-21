<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .blur {
            filter: blur(5px);
            transition: filter 0.5s ease;
        }
        .no-blur {
            filter: blur(0);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </div>
        </div>
    </div>
</nav>

<section class="container mt-4" id="container-section">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <div style="padding-top: 30px;">
                <h1 style="font-size: 3.5rem;">Revolutionize Your Writing with</h1>
                <h1 style="font-weight: bolder; font-size: 6rem;">Shothik</h1>
                <p style="font-size: 1.2rem; padding-top: 20px;">
                    The ultimate AI-powered writing tool. From rephrasing sentences to refining grammar and vocabulary, Shothik ensures your writing is top-notch every time.
                </p>
                <div style="padding-top: 30px;">
                    <a href="{{route('login')}}" class="btn btn-primary btn-lg">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-container" id="features-section" style="padding-top: 80px;">
    <div class="row" style="background-color: #f0f0f0; padding: 50px 0;">
        <div class="col-md-8 offset-md-2">
            <h2 style="text-align: center; font-size: 2.5rem; font-weight: bold; margin-bottom: 30px;">Why Choose Shothik?</h2>
            <div class="feature-item">
                <h3>AI-Powered Writing Assistance</h3>
                <p>Shothik uses cutting-edge AI to assist in rephrasing sentences, refining grammar, and enhancing vocabulary, ensuring top-notch writing quality.</p>
            </div>
            <div class="feature-item">
                <h3>Professional-Grade Results</h3>
                <p>Create polished content effortlessly, be it for work, academics, or creative endeavors.</p>
            </div>
            <div class="feature-item">
                <h3>Time-Saving Tool</h3>
                <p>Save time on proofreading, allowing more focus on generating ideas and content.</p>
            </div>
            <div class="feature-item">
                <h3>Accessible Anywhere</h3>
                <p>Conveniently access Shothik across multiple devices, ensuring seamless writing experiences on the go.</p>
            </div>
            <div class="feature-item">
                <h3>Enhanced Collaboration</h3>
                <p>Facilitates collaboration by allowing easy sharing and reviewing of documents with others.</p>
            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.addEventListener("scroll", function () {
        const featuresSection = document.getElementById("features-section");
        const navbar = document.getElementById("navbar");

        if (featuresSection) {
            if (window.scrollY > featuresSection.offsetTop) {
                navbar.classList.add("fixed-top");
            } else {
                navbar.classList.remove("fixed-top");
            }
        }
    });

    window.addEventListener("scroll", function () {
        const featuresSection = document.getElementById("features-section");
        const containerSection = document.getElementById("container-section");

        if (featuresSection && containerSection) {
            const scrollTop = window.scrollY;
            const featuresSectionTop = featuresSection.offsetTop;

            if (scrollTop > featuresSectionTop) {
                featuresSection.classList.add("no-blur");
                containerSection.classList.add("blur");
            } else {
                featuresSection.classList.remove("no-blur");
                containerSection.classList.remove("blur");
            }
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
