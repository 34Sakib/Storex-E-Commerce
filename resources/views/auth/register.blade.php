<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - StoreX</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            margin: 0;
            padding: 0;
        }
        
        .signup-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }
        
        .storex-logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .storex-brand {
            font-size: 2.5rem;
            font-weight: 700;
            color: #f39c12;
            text-decoration: none;
        }
        
        .storex-brand .logo-highlight {
            color: #e67e22;
        }
        
        .signup-form-container {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
            margin: 0 auto;
        }
        
        .signup-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .signup-title {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.3);
        }
        
        .signup-subtitle {
            color: #2c3e50;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            font-weight: 500;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        
        .form-control {
            border: 2px solid #dee2e6;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: #f39c12;
            box-shadow: 0 0 0 0.2rem rgba(243, 156, 18, 0.25);
            background: white;
        }
        
        .btn-signup {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            width: 100%;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
            color: white;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .btn-signup:hover {
            background: linear-gradient(135deg, #1a252f, #2c3e50);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(44, 62, 80, 0.3);
            color: white;
        }
        
        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .login-link a {
            color: #f39c12;
            text-decoration: none;
            font-weight: 500;
        }
        
        .login-link a:hover {
            color: #e67e22;
            text-decoration: underline;
        }
        
        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }
        
        .whatsapp-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: #25d366;
            border-radius: 50%;
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
        }
        
        .whatsapp-btn:hover {
            transform: scale(1.1) translateY(-2px);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
            color: white;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="container">
            <!-- StoreX Logo -->
            <div class="storex-logo">
                <a href="{{ route('welcome') }}" class="storex-brand">stor<span class="logo-highlight">ex</span></a>
            </div>
            
            <!-- Signup Form -->
            <div class="signup-form-container">
                <div class="signup-header">
                    <div class="signup-title">
                        StoreX Incubation Program
                    </div>
                    <div class="signup-subtitle">
                        রেজিস্ট্রেশন ফর্ম
                    </div>
                </div>
                
                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success mb-4">
                        {{ session('status') }}
                    </div>
                @endif
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone*</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password*</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error('password')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password*</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        @error('password_confirmation')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-signup">
                        <i class="fas fa-arrow-right"></i>
                        সাবমিট করুন
                    </button>
                    
                    <!-- Login Link -->
                    <div class="login-link">
                        Already have an account? <a href="{{ route('login') }}">Sign in here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/01950606020" class="whatsapp-btn" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    
    <!-- Footer from Welcome Page -->
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
    
    <style>
        .payment-method-card {
            border-radius: 4px;
            font-size: 8px;
            font-weight: 600;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .payment-method-card:hover {
            transform: scale(1.05);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .member-badge {
            font-size: 11px;
            font-weight: 600;
            min-height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .member-badge:hover {
            transform: scale(1.02);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</body>
</html>
