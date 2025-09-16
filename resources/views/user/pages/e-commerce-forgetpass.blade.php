<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreX - Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffc107 0%, #ff8f00 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .login-container {
            min-height: 100vh;
            display: flex;
            position: relative;
        }
        
        /* Left Side - Dashboard Preview */
        .dashboard-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            position: relative;
        }
        
        .storex-logo {
            position: absolute;
            top: 30px;
            left: 30px;
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
        }
        
        .stats-badge {
            position: absolute;
            top: 30px;
            right: 30px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 15px 20px;
            color: white;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .stats-number {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .stats-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .dashboard-mockup {
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            position: relative;
            animation: dashboardFloat 4s ease-in-out infinite;
        }
        
        /* Dashboard image animation - top to bottom */
        @keyframes dashboardFloat {
            0% { transform: translateY(-5px); }
            50% { transform: translateY(5px); }
            100% { transform: translateY(-5px); }
        }
        
        .dashboard-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .dashboard-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
        }
        
        .dashboard-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .chart-container {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 15px;
            text-align: center;
        }
        
        .donut-chart {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: conic-gradient(
                #ff4757 0deg 120deg,
                #3742fa 120deg 200deg,
                #2ed573 200deg 280deg,
                #ffa502 280deg 360deg
            );
            margin: 0 auto 10px;
            position: relative;
        }
        
        .donut-chart::after {
            content: '100k';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #333;
        }
        
        .analytics-panel {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 15px;
        }
        
        .analytics-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }
        
        .analytics-value {
            font-weight: 600;
            color: #333;
        }
        
        .chart-legend {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
            font-size: 0.8rem;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .legend-color {
            width: 12px;
            height: 12px;
            border-radius: 2px;
        }
        
        .bottom-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 20px;
        }
        
        .stat-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
        }
        
        .stat-number {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.8rem;
            color: #666;
        }
        
        .tagline {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* Right Side - Login Form */
        .login-side {
            width: 400px;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }
        
        .login-form-container {
            width: 100%;
            max-width: 320px;
        }
        
        .user-avatar {
            width: 60px;
            height: 60px;
            background: #ffc107;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.5rem;
        }
        
        .welcome-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        
        .welcome-subtitle {
            text-align: center;
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            background: white;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #ffc107;
            box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.1);
        }
        
        .input-icon {
            position: relative;
        }
        
        .input-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        
        .input-icon .form-control {
            padding-left: 45px;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
        }
        
        .signin-btn {
            width: 100%;
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }
        
        .signin-btn:hover {
            background: #34495e;
            transform: translateY(-1px);
        }
        
        .forgot-password {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .forgot-password a {
            color: #007bff;
            text-decoration: none;
            font-size: 0.9rem;
        }
        
        .support-info {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #666;
        }
        
        .support-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .support-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #28a745;
        }
        
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                min-height: 100vh;
            }
            
            .dashboard-side {
                min-height: 45vh;
                padding: 15px 15px 30px 15px;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                position: relative;
                overflow: visible;
            }
            
            .login-side {
                width: 100%;
                min-height: 55vh;
                padding: 30px 20px;
                background: #f8f9fa;
                border-radius: 25px 25px 0 0;
                margin-top: -40px;
                position: relative;
                z-index: 10;
            }
            
            .stats-badge {
                position: absolute;
                top: 15px;
                right: 15px;
                margin-bottom: 0;
                font-size: 0.8rem;
                padding: 10px 15px;
            }
            
            .storex-logo {
                top: 15px;
                left: 15px;
                font-size: 1.4rem;
            }
            
            .dashboard-mockup {
                max-width: 95%;
                padding: 12px;
                margin: 0 auto 0 auto;
                transform: translateY(-20px);
            }
            
            .tagline {
                display: none;
            }
            
            .login-form-container {
                max-width: 100%;
                margin: 0 auto;
            }
            
            .user-avatar {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
                margin-bottom: 25px;
            }
            
            .welcome-title {
                font-size: 1.4rem;
                margin-bottom: 8px;
            }
            
            .welcome-subtitle {
                font-size: 0.9rem;
                margin-bottom: 35px;
            }
            
            .form-group {
                margin-bottom: 25px;
            }
            
            .form-control {
                padding: 15px 20px;
                font-size: 1rem;
                border-radius: 12px;
                border: 2px solid #e9ecef;
            }
            
            .input-icon .form-control {
                padding-left: 50px;
            }
            
            .signin-btn {
                padding: 15px;
                font-size: 1rem;
                border-radius: 12px;
                margin-top: 10px;
            }
            
            .forgot-password {
                margin-top: 20px;
                margin-bottom: 25px;
            }
            
            .support-info {
                font-size: 0.75rem;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Left Side - Dashboard Preview -->
        <div class="dashboard-side">
            <!-- StoreX Logo -->
            <a href="{{ route('welcome') }}" class="storex-logo" style="text-decoration: none;">
                store<span style="color: #fff;">X</span>
            </a>
            
            <!-- Stats Badge -->
            <div class="stats-badge">
                <div class="stats-number">5.5K+</div>
                <div class="stats-label">Users</div>
                <div class="stats-number" style="margin-top: 10px;">99%</div>
                <div class="stats-label">Uptime</div>
            </div>
            
            <!-- Dashboard Mockup -->
            <div class="dashboard-mockup">
                <div class="dashboard-header">
                    <div class="dashboard-title">📊 Analytics</div>
                    <div style="color: #28a745; font-size: 0.8rem;">● Live Data</div>
                </div>
                
                <div class="dashboard-content">
                    <!-- Donut Chart -->
                    <div class="chart-container">
                        <div class="donut-chart"></div>
                        <div class="chart-legend">
                            <div class="legend-item">
                                <div class="legend-color" style="background: #ff4757;"></div>
                                <span>Mobile</span>
                            </div>
                            <div class="legend-item">
                                <div class="legend-color" style="background: #3742fa;"></div>
                                <span>Desktop</span>
                            </div>
                            <div class="legend-item">
                                <div class="legend-color" style="background: #2ed573;"></div>
                                <span>Tablet</span>
                            </div>
                            <div class="legend-item">
                                <div class="legend-color" style="background: #ffa502;"></div>
                                <span>Others</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Analytics Panel -->
                    <div class="analytics-panel">
                        <div class="analytics-item">
                            <span>📱 This Month</span>
                            <span class="analytics-value">2,847</span>
                        </div>
                        <div class="analytics-item">
                            <span>💰 Revenue</span>
                            <span class="analytics-value">$175</span>
                        </div>
                        <div class="analytics-item">
                            <span>📈 Growth</span>
                            <span class="analytics-value">+12%</span>
                        </div>
                        <div class="analytics-item">
                            <span>👥 Users</span>
                            <span class="analytics-value">1,234</span>
                        </div>
                        <div class="analytics-item">
                            <span>🛒 Orders</span>
                            <span class="analytics-value">567</span>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Stats -->
                <div class="bottom-stats">
                    <div class="stat-card">
                        <div class="stat-number">3 months left</div>
                        <div class="stat-label">Subscription</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support</div>
                    </div>
                </div>
            </div>
            
            <!-- Tagline -->
            <div class="tagline">
                Trusted by 5,000+ successful business owners
            </div>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="login-side">
            <div class="login-form-container">
                <!-- User Avatar -->
                <div class="user-avatar">
                    <i class="fas fa-key"></i>
                </div>
                
                <!-- Welcome Text -->
                <h2 class="welcome-title">Reset Your Password</h2>
                <p class="welcome-subtitle">Enter your mobile number to reset your password</p>
                
                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success mb-4">
                        {{ session('status') }}
                    </div>
                @endif
                
                <!-- Reset Form -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    
                    <!-- Email Address -->
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="input-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email address" value="{{ old('email') }}" required autofocus>
                        </div>
                        @error('email')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Send OTP Button -->
                    <button type="submit" class="signin-btn">Send OTP</button>
                    
                    <!-- Back to Login -->
                    <div class="forgot-password">
                        <a href="{{ route('e-commerce-login') }}">Back to Login</a>
                    </div>
                    
                    <!-- Support Info -->
                    <div class="support-info">
                        <div class="support-item">
                            <div class="support-dot"></div>
                            <span>SSL Secured</span>
                        </div>
                        <div class="support-item">
                            <div class="support-dot"></div>
                            <span>24/7 Support</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
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