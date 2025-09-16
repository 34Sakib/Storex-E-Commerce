<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Storex - E-commerce Platform')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/user/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/userSite/style.css') }}">
    
</head>
<body>
    <!-- Navigation Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <span class="storex-logo">stor<span class="logo-highlight">ex</span></span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Mobile Menu Header -->
                <div class="mobile-menu-header d-lg-none">
                    <a href="{{ route('welcome') }}" class="mobile-logo">
                        stor<span style="color: #e67e22;">ex</span>
                    </a>
                    <button class="mobile-close-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Navigation Items -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('features') }}">ফিচারস</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pricing') }}">প্রাইসিং</a>
                    </li>
                </ul>
                
                <!-- Desktop Buttons -->
                <div class="d-flex align-items-center gap-2 d-none d-lg-flex">
                    <a href="{{ route('try') }}" class="btn btn-warning rounded-pill px-4 py-2 fw-semibold">
                        <i class="fas fa-arrow-right me-2"></i>
                        ট্রাই করে দেখুন
                    </a>
                    
                    <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-3 px-3 py-2 fw-semibold">
                        <i class="fas fa-graduation-cap me-2"></i>
                        Course Login
                    </a>
                    
                    <a href="{{ route('e-commerce-login')}}" class="btn btn-success rounded-3 px-3 py-2 fw-semibold">
                        <i class="fas fa-shopping-cart me-2"></i>
                        E-Commerce Login
                    </a>
                </div>

                <!-- Mobile Buttons -->
                <div class="mobile-buttons d-lg-none">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">
                        <i class="fas fa-graduation-cap me-2"></i>
                        Course Login
                    </a>
                    
                    <a href="{{ route('e-commerce-login')}}" class="btn btn-success">
                        <i class="fas fa-shopping-cart me-2"></i>
                        E-Commerce Login
                    </a>

                    <a href="{{ route('try') }}" class="btn btn-warning">
                        <i class="fas fa-arrow-right me-2"></i>
                        ট্রাই করে দেখুন
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5 class="text-warning border-bottom border-warning pb-2">নিড হেল্প?</h5>
                <p><i class="fas fa-phone"></i> 019 50 60 60 20</p>
                <p><i class="fas fa-envelope"></i> info@storex.com.bd</p>
                <p><i class="fas fa-map-marker-alt"></i> ৬/এ,লিফট-৬,ডিএম ভবন-২, বসিলা গার্ডেন সিটি, ঢাকা-১২০৭</p>
                <p>যুক্ত হন আমাদের কমিউনিটিতে</p>
                <div class="mt-3">
                    <a href="#" class="btn btn-warning"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <h5 class="text-warning border-bottom border-warning pb-2">গ্রাহকের একাউন্ট</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">লগ ইন</a></li>
                    <li><a href="#" class="text-white">সাইন আপ</a></li>
                    <li><a href="#" class="text-white">যোগাযোগ</a></li>
                    <li><a href="#" class="text-white">রিফান্ড পলিসি</a></li>
                    <li><a href="#" class="text-white">প্রাইভেসি পলিসি</a></li>
                    <li><a href="#" class="text-white">টার্মস এন্ড কন্ডিশন</a></li>
                    <li><a href="#" class="text-white">কোর্সে লগইন করুন</a></li>
                    <li><a href="#" class="text-white">ই-কমার্স লগইন করুন</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-warning border-bottom border-warning pb-2">প্রয়োজনীয় পেইজ</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">ফিচার</a></li>
                    <li><a href="#" class="text-white">প্রাইসিং</a></li>
                    <li><a href="#" class="text-white">ফ্রড চেকার</a></li>
                    <li><a href="#" class="text-white">হেল্প পোস্ট</a></li>
                    <li><a href="#" class="text-white">বিজনেস প্রোফাইল</a></li>
                    <li><a href="#" class="text-white">ইনকুবেশন প্রোগ্রাম</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-warning border-bottom border-warning pb-2">পেমেন্টের মাধ্যমে</h5>
                <div class="row g-1 mb-4">
                    <div class="col-3"><div class="payment-method-card bg-primary text-white text-center p-1"><small>BD</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-danger text-white text-center p-1"><small>MC</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-success text-white text-center p-1"><small>bKash</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-warning text-dark text-center p-1"><small>Nagad</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-info text-white text-center p-1"><small>Rocket</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-secondary text-white text-center p-1"><small>Upay</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-dark text-white text-center p-1"><small>Sure</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-primary text-white text-center p-1"><small>Amex</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-success text-white text-center p-1"><small>PayPal</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-warning text-dark text-center p-1"><small>Skrill</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-info text-white text-center p-1"><small>Visa</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-danger text-white text-center p-1"><small>Disc</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-secondary text-white text-center p-1"><small>JCB</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-dark text-white text-center p-1"><small>Union</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-primary text-white text-center p-1"><small>Diners</small></div></div>
                    <div class="col-3"><div class="payment-method-card bg-success text-white text-center p-1"><small>Other</small></div></div>
                </div>
                
                <h5 class="text-warning border-bottom border-warning pb-2">গবিষ্ট সদস্য</h5>
                <div class="row g-2 align-items-center">
                    <div class="col-6 text-center">
                        <div class="member-badge bg-success text-white p-2 rounded mb-1">
                            <i class="fas fa-flag"></i> BD Gov
                        </div>
                        <small class="text-muted d-block">DNCC/032591</small>
                    </div>
                    <div class="col-6 text-center">
                        <div class="member-badge bg-primary text-white p-2 rounded mb-1">
                            e-CAB
                        </div>
                        <small class="text-muted d-block">ID NO 1255</small>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-warning my-4">
        <div class="text-center">
            StoreX © 2025
        </div>
    </div>
</footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/userSite/responsive-navbar.js') }}"></script>
    
    <script>
        // Add smooth scrolling and animations
        document.addEventListener('DOMContentLoaded', function() {
            const heroContent = document.querySelector('.hero-content');
            if (heroContent) {
                heroContent.classList.add('fade-in-up');
            }
        });
    </script> 
</body>
</html>
