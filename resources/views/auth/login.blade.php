<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Login - StoreX</title>
    
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
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .illustration-side {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .illustration-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            padding: 2rem;
        }
        
        .illustration-image {
            width: 100%;
            height: auto;
            object-fit: contain;
            max-width: 500px;
            border-radius: 10px;
        }
        
        .browser-mockup {
            background: #1a1a1a;
            border-radius: 15px;
            padding: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            max-width: 400px;
        }
        
        .browser-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #333;
        }
        
        .browser-dots {
            display: flex;
            gap: 5px;
            margin-right: 1rem;
        }
        
        .browser-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #666;
        }
        
        .browser-dot.red { background: #ff5f56; }
        .browser-dot.yellow { background: #ffbd2e; }
        .browser-dot.green { background: #27ca3f; }
        
        .browser-content {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            position: relative;
        }
        
        .teacher-illustration {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .teacher-figure {
            width: 80px;
            height: 80px;
            background: #ffc107;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #2c3e50;
        }
        
        .presentation-board {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 1rem;
            margin-left: 1rem;
            flex: 1;
            position: relative;
        }
        
        .chart-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ffc107;
            border-radius: 8px;
            padding: 0.5rem;
            color: #2c3e50;
        }
        
        .decorative-elements {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }
        
        .lightbulb {
            position: absolute;
            top: 20%;
            left: 10%;
            background: #ffc107;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #2c3e50;
        }
        
        .play-button {
            position: absolute;
            bottom: 20%;
            left: 15%;
            background: #2c3e50;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .sparkle {
            position: absolute;
            color: #ffc107;
            font-size: 1.5rem;
        }
        
        .sparkle-1 { top: 15%; right: 20%; }
        .sparkle-2 { bottom: 30%; right: 15%; }
        .sparkle-3 { top: 40%; left: 5%; }
        
        .need-skills-badge {
            background: #ffc107;
            color: #2c3e50;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-top: 1rem;
            display: inline-block;
        }
        
        .bengali-text-overlay {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 0.8rem;
        }
        
        .login-side {
            background: white;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100vh;
        }
        
        .incubation-logo {
            text-align: right;
            margin-bottom: 2rem;
        }
        
        .incubation-badge {
            display: inline-flex;
            align-items: center;
            background: #f8f9fa;
            border: 2px solid #ffc107;
            border-radius: 50px;
            padding: 0.5rem 1rem;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .incubation-icon {
            background: #ffc107;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.5rem;
            color: #2c3e50;
        }
        
        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        .login-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }
        
        .login-subtitle {
            color: #6c757d;
            margin-bottom: 2rem;
            line-height: 1.5;
        }
        
        .form-label {
            font-weight: 500;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #4285f4;
            box-shadow: 0 0 0 0.2rem rgba(66, 133, 244, 0.25);
        }
        
        .password-input-group {
            position: relative;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: none;
            color: #6c757d;
            cursor: pointer;
        }
        
        .btn-signin {
            background: #4285f4;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            width: 100%;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-signin:hover {
            background: #3367d6;
            transform: translateY(-1px);
        }
        
        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }
        
        .forgot-password a {
            color: #4285f4;
            text-decoration: none;
            font-size: 0.9rem;
        }
        
        .signup-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .signup-link a {
            color: #4285f4;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container-fluid login-container">
        <div class="row w-100">
            <!-- Left Side - Illustration -->
            <div class="col-lg-7 col-md-6 illustration-side">
                <div class="illustration-content">
                    <img src="https://edu.storex.com.bd/storex/images/incubation/login_page2.webp" 
                         alt="StoreX Login Illustration" 
                         class="illustration-image">
                </div>
            </div>
            
            <!-- Right Side - Login Form -->
            <div class="col-lg-5 col-md-6 login-side">
                <div class="incubation-logo">
                    <div class="incubation-badge">
                        <div class="incubation-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; font-weight: 700;">INCUBATION</div>
                            <div style="font-size: 0.7rem;">PROGRAM</div>
                        </div>
                    </div>
                </div>
                
                <div class="login-form">
                    <h2 class="login-title">নিচের ফর্মে আপনার মোবাইল নাম্বার এবং পাসওয়ার্ড দিয়ে লগিন বাটনে ক্লিক করুন।</h2>
                    
                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success mb-4">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="text-danger mt-1 small">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="password-input-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                                <button type="button" class="password-toggle" onclick="togglePassword()">
                                    <i class="fas fa-eye" id="password-icon"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="text-danger mt-1 small">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Sign In Button -->
                        <button type="submit" class="btn btn-primary btn-signin">
                            Sign in
                        </button>
                        
                        <!-- Forgot Password -->
                        <div class="forgot-password">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            @endif
                        </div>
                        
                        <!-- Sign Up Link -->
                        <div class="signup-link">
                            Don't have an account? <a href="{{ route('register') }}">Sign up now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
