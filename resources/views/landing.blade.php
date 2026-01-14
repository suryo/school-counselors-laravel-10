<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Counselors - Excellence in Guidance</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: white;
            padding: 100px 0;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .feature-card {
            transition: transform 0.3s;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .icon-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">School Counselors</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-lg-3" href="{{ route('dashboard') }}">Go to App</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Empowering Every Student to Succeed</h1>
            <p class="lead mb-5 px-md-5">A comprehensive management platform for school counselors to monitor, guide, and support student development through professional counseling and behavioral tracking.</p>
            <div>
                <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg px-5 py-3 fw-bold text-primary shadow">Get Started Now</a>
                <a href="#features" class="btn btn-outline-light btn-lg px-5 py-3 ms-3 fw-bold">Learn More</a>
            </div>
        </div>
    </header>

    <section id="features" class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Why Choose Our Platform?</h2>
                <p class="text-muted">Designed specifically for the unique needs of school counseling departments.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 feature-card p-4 text-center">
                        <div class="icon-circle bg-primary text-white">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <h4 class="fw-bold">Smart Scheduling</h4>
                        <p class="text-muted">Manage counseling sessions effortlessly with our intuitive scheduling system. Never miss an appointment again.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 feature-card p-4 text-center">
                        <div class="icon-circle bg-success text-white">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4 class="fw-bold">Behavior Tracking</h4>
                        <p class="text-muted">Record and monitor student behavioral patterns to identify those who need extra support or recognition.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 feature-card p-4 text-center">
                        <div class="icon-circle bg-warning text-white">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="fw-bold">Confidential & Secure</h4>
                        <p class="text-muted">Protect sensitive student data with industry-standard security measures and role-based access control.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://img.freepik.com/free-vector/hand-drawn-school-counseling-concept-illustration_23-2149721759.jpg" alt="Counseling" class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-md-6 ps-md-5">
                    <h2 class="fw-bold mb-4">Dedicated to Student Well-being</h2>
                    <p class="lead mb-4">Our mission is to provide counselors with the tools they need to foster a positive school environment.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Streamlined documentation of counseling hours.</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Comprehensive student growth reports.</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Collaborative tools for counselor teams.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">&copy; 2026 School Counselors Management System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
