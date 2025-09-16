@extends('user.layouts.masterlayout')

@section('content')

<!-- Pricing Section -->
<section class="pricing-section">
    <div class="container">
        <!-- Header -->
        <div class="row text-center mb-5">
            <div class="col-12">
                <div class="pricing-header-section">
                    <h1 class="pricing-hero-title">আপনার ব্যবসাকে <span class="highlight-orange">অটোমেটেড করতে</span></h1>
                    <p class="pricing-hero-subtitle"><span class="subtitle-highlight">স্টোরএক্স ২-কয়েক</span> আটোমেশন সিস্টেম</p>
                </div>
            </div>
        </div>
        <div class="whatsapp-float">
            <a href="#" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <!-- Pricing Surface Panel -->
        <div class="pricing-panel rounded-4 shadow-sm p-3 p-md-4 mb-5">
        <!-- Pricing Cards -->
        <div class="row pricing-cards-row g-2 mb-4 mb-md-5">
            <!-- Basic Plan -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
                <div class="pricing-plan-card basic-plan position-relative w-100 h-100">
                    <div class="text-center p-4">
                        <h4 class="plan-title">Basic</h4>
                        <p class="plan-subtitle">Best for entrepreneurs</p>
                        <div class="plan-price-display">$৯৯৯৯</div>
                        <p class="plan-duration">(বার্ষিক)</p>
                        
                        <!-- Mobile Feature List -->
                        <div class="mobile-features-list d-lg-none">
                            <div class="feature-item-mobile">
                                <span class="feature-text">সুপারঅ্যাডমিন এবং কম নেটওয়ার্ক</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">হোস্টিং গ্রাহক</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">অর্ডার ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ইনভেন্টরি ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ফেইসবুক কনভার্সন এপিআই(API)</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">গুগল ট্যাগ ম্যানেজার এবং ডেটা লেয়ার(GTM)</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ড্যাশ & ডুপ ফুল ইউজারসাইট রিপোর্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড ট্রাফিক পেতে এবং রিপোর্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ডিসকাউন্ট/কুপন ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড প্রোডাক্ট ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড ব্যানারউইশ</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            
                            <!-- Additional Features Section -->
                            <div class="additional-features-section mt-3">
                                <div class="additional-feature-title" id="toggleTitle" onclick="toggleAdditionalFeatures()">আরও ৭ টি ফিচারস দেখুন +</div>
                                
                                <!-- Hidden Additional Features -->
                                <div class="additional-features-list" id="additionalFeatures" style="display: none;">
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড পেমেন্ট মেথড</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড স্টোরেজ</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড প্রোডাক্ট</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">অর্ডার আনলিমিটেড</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">এসএমএস আনলিমিটেড</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">Facebook Tracking</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">কাস্টমাইজেশন</span>
                                        <i class="fas fa-times-circle text-danger"></i>
                                    </div>
                                    
                                    <!-- Collapse Button -->
                                    <div class="collapse-button-container mt-3">
                                        <button class="collapse-btn" onclick="toggleAdditionalFeatures()">
                                            কম দেখুন ×
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="feature-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">এসএমএস ম্যানেজমেন্ট</span>
                                        <span class="stat-value">২ জন</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Facebook Tracking</span>
                                        <span class="stat-value">২ টি</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">অর্ডার প্রসেস</span>
                                        <span class="stat-value">৫০০ টি মাসিক</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">পরবর্তী বছর রিনিউ</span>
                                        <span class="stat-value">৯৯৯৯</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Mobile Order Button -->
                        <div class="d-lg-none mt-4">
                            <a href="#" class="btn btn-warning w-100 rounded-pill py-3 fw-semibold">অর্ডার করুন</a>
                        </div>
                        
                        <!-- Desktop Feature List -->
                        <div class="plan-features-list d-none d-lg-block">
                            <div class="feature-item">২ জন এডমিন</div>
                            <div class="feature-item">৫০০ প্রোডাক্ট/সেবা</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regular Plan -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
                <div class="pricing-plan-card position-relative w-100 h-100">
                    <div class="plan-badge-center">জনপ্রিয়</div>
                    <div class="text-center p-4">
                        <h4 class="plan-title">Regular</h4>
                        <p class="plan-subtitle">For small teams</p>
                        <div class="plan-price-display">$১৯৯৯৯</div>
                        <p class="plan-duration">(বার্ষিক)</p>
                        
                        <!-- Mobile Feature List -->
                        <div class="mobile-features-list d-lg-none">
                            <div class="feature-item-mobile">
                                <span class="feature-text">সুপারঅ্যাডমিন এবং কম নেটওয়ার্ক</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">হোস্টিং গ্রাহক</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">অর্ডার ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ইনভেন্টরি ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ফেইসবুক কনভার্সন এপিআই(API)</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">গুগল ট্যাগ ম্যানেজার এবং ডেটা লেয়ার(GTM)</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ড্যাশ & ডুপ ফুল ইউজারসাইট রিপোর্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড ট্রাফিক পেতে এবং রিপোর্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ডিসকাউন্ট/কুপন ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড প্রোডাক্ট ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড ব্যানারউইশ</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            
                            <!-- Additional Features Section -->
                            <div class="additional-features-section mt-3">
                                <div class="additional-feature-title" id="toggleTitleRegular" onclick="toggleAdditionalFeaturesRegular()">আরও ৭ টি ফিচারস দেখুন +</div>
                                
                                <!-- Hidden Additional Features -->
                                <div class="additional-features-list" id="additionalFeaturesRegular" style="display: none;">
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড পেমেন্ট মেথড</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড স্টোরেজ</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড প্রোডাক্ট</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">প্রোডাক্ট রিভিউ রিপোর্ট</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">এসএমএস আনলিমিটেড</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">Facebook Tracking</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">কাস্টমাইজেশন</span>
                                        <i class="fas fa-times-circle text-danger"></i>
                                    </div>
                                    
                                    <!-- Collapse Button -->
                                    <div class="collapse-button-container">
                                        <button class="collapse-btn" onclick="toggleAdditionalFeaturesRegular()">
                                            কম দেখুন ×
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="feature-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">এসএমএস ম্যানেজমেন্ট</span>
                                        <span class="stat-value">৫ জন</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Facebook Tracking</span>
                                        <span class="stat-value">৩ টি</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">অর্ডার প্রসেস</span>
                                        <span class="stat-value">১৫০০ টি মাসিক</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">পরবর্তী বছর রিনিউ</span>
                                        <span class="stat-value">১৯৯৯৯</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Mobile Order Button -->
                        <div class="d-lg-none mt-4">
                            <a href="#" class="btn btn-warning w-100 rounded-pill py-3 fw-semibold">অর্ডার করুন</a>
                        </div>
                        
                        <!-- Desktop Feature List -->
                        <div class="plan-features-list d-none d-lg-block">
                            <div class="feature-item">৫ জন এডমিন</div>
                            <div class="feature-item">১৫০০ প্রোডাক্ট/সেবা</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advanced Plan -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
                <div class="pricing-plan-card position-relative w-100 h-100">
                    <div class="text-center p-4">
                        <h4 class="plan-title">Advanced</h4>
                        <p class="plan-subtitle">As your business scales</p>
                        <div class="plan-price-display">$৩৫৯৯৯</div>
                        <p class="plan-duration">(বার্ষিক)</p>
                        
                        <!-- Mobile Feature List -->
                        <div class="mobile-features-list d-lg-none">
                            <div class="feature-item-mobile">
                                <span class="feature-text">সুপারঅ্যাডমিন এবং কম নেটওয়ার্ক</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">হোস্টিং গ্রাহক</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">অর্ডার ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ইনভেন্টরি ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ফেইসবুক কনভার্সন এপিআই(API)</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">গুগল ট্যাগ ম্যানেজার এবং ডেটা লেয়ার(GTM)</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ড্যাশ & ডুপ ফুল ইউজারসাইট রিপোর্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড ট্রাফিক পেতে এবং রিপোর্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">ডিসকাউন্ট/কুপন ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড প্রোডাক্ট ম্যানেজমেন্ট</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            <div class="feature-item-mobile">
                                <span class="feature-text">আনলিমিটেড ব্যানারউইশ</span>
                                <i class="fas fa-check-circle text-success"></i>
                            </div>
                            
                            <!-- Additional Features Section -->
                            <div class="additional-features-section mt-3">
                                <div class="additional-feature-title" id="toggleTitleAdvanced" onclick="toggleAdditionalFeaturesAdvanced()">আরও ৭ টি ফিচারস দেখুন +</div>
                                
                                <!-- Hidden Additional Features -->
                                <div class="additional-features-list" id="additionalFeaturesAdvanced" style="display: none;">
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড পেমেন্ট মেথড</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড স্টোরেজ</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">আনলিমিটেড প্রোডাক্ট</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">প্রোডাক্ট রিভিউ রিপোর্ট</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">এসএমএস আনলিমিটেড</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">Facebook Tracking</span>
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    <div class="feature-item-mobile">
                                        <span class="feature-text">কাস্টমাইজেশন</span>
                                        <i class="fas fa-times-circle text-danger"></i>
                                    </div>
                                    
                                    <!-- Collapse Button -->
                                    <div class="collapse-button-container">
                                        <button class="collapse-btn" onclick="toggleAdditionalFeaturesAdvanced()">
                                            কম দেখুন ×
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="feature-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">এসএমএস ম্যানেজমেন্ট</span>
                                        <span class="stat-value">১০ জন</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Facebook Tracking</span>
                                        <span class="stat-value">৫ টি</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">অর্ডার প্রসেস</span>
                                        <span class="stat-value">৫০০০ টি মাসিক</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">পরবর্তী বছর রিনিউ</span>
                                        <span class="stat-value">৩৫৯৯৯</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Mobile Order Button -->
                        <div class="d-lg-none mt-4">
                            <a href="#" class="btn btn-warning w-100 rounded-pill py-3 fw-semibold">অর্ডার করুন</a>
                        </div>
                        
                        <!-- Desktop Feature List -->
                        <div class="plan-features-list d-none d-lg-block">
                            <div class="feature-item">১০ জন এডমিন</div>
                            <div class="feature-item">৫০০০ প্রোডাক্ট/সেবা</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom Plan -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
                <div class="pricing-plan-card custom-plan-card position-relative w-100 h-100">
                    <div class="plan-badge-center custom-badge">কাস্টম</div>
                    <div class="text-center p-4">
                        <h4 class="plan-title">Custom</h4>
                        <p class="plan-subtitle">Tailored for your business needs</p>
                        <div class="plan-price-display custom-price-text">কাস্টম</div>
                        <p class="plan-duration">(যোগাযোগ সাপেক্ষে)</p>
                        
                        <!-- Mobile Feature List -->
                        <div class="mobile-features-list d-lg-none">
                            <div class="feature-item-mobile">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                সব ফিচার অন্তর্ভুক্ত
                            </div>
                            <div class="feature-item-mobile">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                কাস্টমাইজেশন সুবিধা
                            </div>
                            <div class="feature-item-mobile">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                ডেডিকেটেড সাপোর্ট
                            </div>
                            
                            <div class="custom-feature-stats mt-3">
                                <div class="custom-stat-item">
                                    <span class="custom-stat-label">এসএমএস ম্যানেজমেন্ট</span>
                                    <span class="custom-stat-value">আনলিমিটেড</span>
                                </div>
                                <div class="custom-stat-item">
                                    <span class="custom-stat-label">Facebook Tracking</span>
                                    <span class="custom-stat-value">আনলিমিটেড</span>
                                </div>
                                <div class="custom-stat-item">
                                    <span class="custom-stat-label">অর্ডার প্রসেস</span>
                                    <span class="custom-stat-value">আনলিমিটেড</span>
                                </div>
                                <div class="custom-stat-item">
                                    <span class="custom-stat-label">পরবর্তী বছর রিনিউ</span>
                                    <span class="custom-stat-value">কাস্টম</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Mobile Contact Button -->
                        <div class="d-lg-none mt-4">
                            <a href="#" class="btn btn-outline-warning w-100 rounded-pill py-3 fw-semibold custom-contact-btn" onclick="toggleContactButton(this)">যোগাযোগ করুন</a>
                        </div>
                        
                        <!-- Desktop Feature List -->
                        <div class="plan-features-list d-none d-lg-block">
                            <div class="feature-item">আনলিমিটেড এডমিন</div>
                            <div class="feature-item">আনলিমিটেড প্রোডাক্ট</div>
                        </div>
</div>
                </div>
            </div>
        
        <!-- Divider between cards and table -->
        <div class="panel-divider my-3 my-md-4"></div>

        <!-- Features Comparison Table -->
        <div class="row">
            <div class="col-12">
                <div class="comparison-table-wrapper bg-white rounded-4 shadow-sm">
                    <table class="comparison-table table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th class="feature-header-col"></th>
                                <th class="plan-header-col text-center">Basic</th>
                                <th class="plan-header-col text-center">Regular</th>
                                <th class="plan-header-col text-center">Advanced</th>
                                <th class="plan-header-col text-center">Custom</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="feature-row-name">সুপারঅ্যাডমিন এবং কম নেটওয়ার্ক</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">হোস্টিং গ্রাহক</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">অর্ডার ম্যানেজমেন্ট</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">ইনভেন্টরি ম্যানেজমেন্ট</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">ফেইসবুক কনভার্সন এপিআই(API)</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">গুগল ট্যাগ ম্যানেজার এবং ডেটা লেয়ার(GTM)</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">ড্যাশ & ডুপ ফুল ইউজারসাইট রিপোর্ট</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">আনলিমিটেড ট্রাফিক পেতে এবং রিপোর্ট</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">ডিসকাউন্ট/কুপন ম্যানেজমেন্ট</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">আনলিমিটেড প্রোডাক্ট ম্যানেজমেন্ট</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">আনলিমিটেড ব্যানারউইশ</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">আনলিমিটেড পেমেন্ট মেথড</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">আনলিমিটেড স্টোরেজ</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">প্রোডাক্ট আনলিমিটেড</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">অর্ডার আনলিমিটেড</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">এসএমএস আনলিমিটেড</td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">কাস্টমাইজেশন</td>
                                <td class="feature-cross-cell text-center"><i class="fas fa-times-circle text-danger fs-5"></i></td>
                                <td class="feature-cross-cell text-center"><i class="fas fa-times-circle text-danger fs-5"></i></td>
                                <td class="feature-cross-cell text-center"><i class="fas fa-times-circle text-danger fs-5"></i></td>
                                <td class="feature-check-cell text-center"><i class="fas fa-check-circle text-success fs-5"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">এসএমএস ম্যানেজমেন্ট</td>
                                <td class="feature-value-cell text-center">২ জন</td>
                                <td class="feature-value-cell text-center">৫ জন</td>
                                <td class="feature-value-cell text-center">১০ জন</td>
                                <td class="feature-value-cell text-center">আনলিমিটেড</td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">Facebook Tracking Dataset</td>
                                <td class="feature-value-cell text-center">২ টি</td>
                                <td class="feature-value-cell text-center">৩ টি</td>
                                <td class="feature-value-cell text-center">৫ টি</td>
                                <td class="feature-value-cell text-center">আনলিমিটেড</td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">অর্ডার প্রসেস (মাসিক)</td>
                                <td class="feature-value-cell text-center">৫০০ টি</td>
                                <td class="feature-value-cell text-center">১৫০০ টি</td>
                                <td class="feature-value-cell text-center">৩০০০ টি</td>
                                <td class="feature-value-cell text-center">আনলিমিটেড</td>
                            </tr>
                            <tr>
                                <td class="feature-row-name">পরবর্তী বছর রিনিউ</td>
                                <td class="feature-value-cell text-center">$৯৯৯৯</td>
                                <td class="feature-value-cell text-center">$১৯৯৯৯</td>
                                <td class="feature-value-cell text-center">$৩৫৯৯৯</td>
                                <td class="feature-value-cell text-center">কাস্টম</td>
                            </tr>
                            <tr class="table-action-row">
                                <td class="feature-header-col fw-bold fs-5 py-4">আজই শুরু করুন</td>
                                <td class="text-center py-4">
                                    <a href="#" class="btn btn-warning rounded-pill px-4 py-3 fw-semibold">অর্ডার করুন</a>
                                </td>
                                <td class="text-center py-4">
                                    <a href="#" class="btn btn-warning rounded-pill px-4 py-3 fw-semibold">অর্ডার করুন</a>
                                </td>
                                <td class="text-center py-4">
                                    <a href="#" class="btn btn-warning rounded-pill px-4 py-3 fw-semibold">অর্ডার করুন</a>
                                </td>
                                <td class="text-center py-4">
                                    <a href="#" class="btn btn-outline-warning rounded-pill px-4 py-3 fw-semibold">যোগাযোগ করুন</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

    </div>
</section>

@endsection

<script>
function toggleAdditionalFeatures() {
    const additionalFeatures = document.getElementById('additionalFeatures');
    const toggleTitle = document.getElementById('toggleTitle');
    
    if (additionalFeatures.style.display === 'none') {
        additionalFeatures.style.display = 'block';
        toggleTitle.style.display = 'none';
    } else {
        additionalFeatures.style.display = 'none';
        toggleTitle.style.display = 'block';
    }
}

function toggleAdditionalFeaturesRegular() {
    const additionalFeatures = document.getElementById('additionalFeaturesRegular');
    const toggleTitle = document.getElementById('toggleTitleRegular');
    
    if (additionalFeatures.style.display === 'none') {
        additionalFeatures.style.display = 'block';
        toggleTitle.style.display = 'none';
    } else {
        additionalFeatures.style.display = 'none';
        toggleTitle.style.display = 'block';
    }
}

function toggleAdditionalFeaturesAdvanced() {
    const additionalFeatures = document.getElementById('additionalFeaturesAdvanced');
    const toggleTitle = document.getElementById('toggleTitleAdvanced');
    
    if (additionalFeatures.style.display === 'none') {
        additionalFeatures.style.display = 'block';
        toggleTitle.style.display = 'none';
    } else {
        additionalFeatures.style.display = 'none';
        toggleTitle.style.display = 'block';
    }
}

function toggleContactButton(button) {
    if (button.classList.contains('btn-outline-warning')) {
        // Change to filled orange button
        button.classList.remove('btn-outline-warning');
        button.classList.add('btn-warning');
        button.textContent = 'যোগাযোগ করুন';
    } else {
        // Change back to outline button
        button.classList.remove('btn-warning');
        button.classList.add('btn-outline-warning');
        button.textContent = 'যোগাযোগ করুন';
    }
}
</script>