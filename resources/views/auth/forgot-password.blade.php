<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - StoreX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .forgot-password-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .forgot-password-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
        }
        
        .left-section {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 60px 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .illustration-image {
            width: 100%;
            height: auto;
            object-fit: contain;
            max-width: 400px;
            border-radius: 10px;
        }
        
        .illustration-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }
        
        .right-section {
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .storex-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .storex-logo i {
            font-size: 2rem;
            color: #ffc107;
            margin-right: 10px;
        }
        
        .storex-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        
        .incubation-text {
            font-size: 0.9rem;
            color: #666;
            margin-top: 5px;
        }
        
        .forgot-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .form-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #4285f4;
            box-shadow: 0 0 0 0.2rem rgba(66, 133, 244, 0.25);
        }
        
        .reset-btn {
            background: #4285f4;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            width: 100%;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        
        .reset-btn:hover {
            background: #3367d6;
            transform: translateY(-2px);
        }
        
        .back-to-login {
            text-align: center;
            margin-top: 20px;
        }
        
        .back-to-login a {
            color: #4285f4;
            text-decoration: none;
            font-weight: 500;
        }
        
        .back-to-login a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .left-section {
                display: none;
            }
            
            .forgot-password-card {
                margin: 20px;
            }
            
            .right-section {
                padding: 40px 30px;
            }
        }
    </style>
</head>
<body>
    <div class="forgot-password-container">
        <div class="forgot-password-card">
            <div class="row g-0 h-100">
                <!-- Left Section with Illustration -->
                <div class="col-lg-6">
                    <div class="left-section">
                        <div class="illustration-content">
                            <img src="https://edu.storex.com.bd/storex/images/incubation/login_page2.webp" 
                                 alt="StoreX Login Illustration" 
                                 class="illustration-image">
                        </div>
                    </div>
                </div>
                
                <!-- Right Section with Form -->
                <div class="col-lg-6">
                    <div class="right-section">
                        <!-- StoreX Logo -->
                        <div class="storex-logo">
                            <i class="fas fa-lightbulb"></i>
                            <div>
                                <div class="storex-text">store<span style="color: #ffc107;">X</span></div>
                                <div class="incubation-text">INCUBATION<br>PROGRAM</div>
                            </div>
                        </div>
                        
                        <h2 class="forgot-title">Forgot Password</h2>
                        
                        <!-- Session Status -->
                        @if (session('status'))
                            <div class="alert alert-success mb-4">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" 
                                       placeholder="Enter your email address" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="reset-btn">
                                Send Reset Code
                            </button>
                        </form>
                        
                        <div class="back-to-login">
                            Remember your password? <a href="{{ route('login') }}">Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
