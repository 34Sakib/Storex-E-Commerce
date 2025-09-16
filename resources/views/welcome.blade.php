@extends('user.layouts.masterlayout')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background"></div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Super Fast <span class="bangla-text">ওয়েবসাইটে</span><br>
                            <span class="highlight-text">ইকমার্স বিজনেস হবে</span><br>
                            <span class="bangla-text">অটোমেটেড!</span>
                        </h1>

                        <p class="hero-description">
                            আপনি যদি <span class="highlight-word">ফ্রিল্যান্সার</span> চান হতে তাহলে <span
                                class="brand-highlight">Storex</span><br>
                            ব্যবহার করে ইকমার্স বিজনেসে ও করতে পারবেন।
                        </p>

                        <div class="hero-buttons d-flex gap-3 mt-4">
                            <a href="#" class="btn btn-light rounded-pill px-4 py-3">
                                প্রাইসিং দেখুন
                            </a>
                            <a href="{{ route('try') }}" class="btn btn-warning rounded-pill px-4 py-3">
                                <i class="fas fa-arrow-right me-2"></i>
                                ট্রাই করে দেখুন
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-video">
                        <a href="#" class="video-play-btn">
                            <i class="fas fa-play"></i>
                            কেন স্টোরেক্স ব্যবহার করবেন?
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- WhatsApp Float Button -->
        <div class="whatsapp-float">
            <a href="#" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </section>


    <!-- Trusted Partners Section -->
    <section class="trusted-partners-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h3 class="trusted-title">
                        আপনার মতো ৫০০০+ ব্যবসায়ীর ভরসার Storex Ecommerce Automation
                    </h3>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-6 col-md-4 col-lg-2 mb-3">
                    <div class="partner-logo">
                        <div class="logo-container">
                            <span class="company-name">ATLANTIS</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-3">
                    <div class="partner-logo">
                        <div class="logo-container">
                            <span class="company-name khatiz-logo">Khatiz</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-3">
                    <div class="partner-logo">
                        <div class="logo-container">
                            <span class="company-name">নতুন</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-3">
                    <div class="partner-logo">
                        <div class="logo-container">
                            <span class="company-name mchon-logo">মচন</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-3">
                    <div class="partner-logo">
                        <div class="logo-container">
                            <span class="company-name">FIMON</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 mb-3">
                    <div class="partner-logo">
                        <div class="logo-container">
                            <span class="company-name">London</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Store Creation Features Section -->
    <section class="store-features-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="features-content">
                        <h2 class="features-title mb-4">
                            কায়েকটি ক্লিকেই রেডি<br>
                            আপনার অনলাইন স্টোর
                        </h2>

                        <p class="features-description mb-4">
                            কাস্টমাইজেশন টেমপ্লেট ও ড্রাগ-অ্যান্ড-ড্রপ বিল্ডার ব্যবহার<br>
                            করে মাত্র কয়েক মিনিটেই তৈরি করুন আপনার ওয়েবসাইট বা<br>
                            ল্যান্ডিং পেজ।
                        </p>

                        <p class="features-sub-description mb-4">
                            ট্রেডিং ম্যানেজমেন্ট, অর্ডার প্রসেসিং, পেমেন্ট গেটওয়ে,<br>
                            কুরিয়ার ইন্টিগ্রেশন, মার্কেটিং, অ্যানালিটিক্স এবং আরো কত<br>
                            কিছুর টেকোর ও রিপোর্ট সব কিছু পাবেন একটি প্যাকেজে বিনামূল্যে।
                        </p>

                        <div class="features-button">
                            <a href="#" class="btn btn-primary btn-lg rounded-pill px-5 py-3">
                                <i class="fas fa-arrow-right me-2"></i>
                                আপনার স্টোর রেডি করুন
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="features-image">
                        <div class="storefront-image">
                            <img src="https://storex.com.bd/_next/image?url=%2Fstorex%2Fimages%2Fready-storefront.png&w=1920&q=75"
                                alt="Ready Storefront - Storex E-commerce Platform" class="img-fluid rounded-3 shadow-lg"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="business-templates-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="templates-title mb-4">
                        বিজনেস ফোকাসড রেডি কাস্টোমাইজেবল টেমপ্লেট, যাতে করে প্রোডাক্ট আপ্লোড করেই শুরু করতে পারেন আপনার
                        ইকমার্স বিজনেস!
                    </h2>
                    <p class="templates-subtitle">
                        আপনার ব্যবসার ধরন অনুযায়ী নির্বাচন করুন উপযুক্ত টেমপ্লেট
                    </p>
                </div>
            </div>

            <!-- Category Tags -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="category-tags d-flex flex-wrap justify-content-center gap-3">
                        <span class="category-tag">গ্যাজেট</span>
                        <span class="category-tag">কসমেটিক্স</span>
                        <span class="category-tag">ইলেকট্রনিক্স</span>
                        <span class="category-tag">পোশাক</span>
                        <span class="category-tag">খাবার</span>
                        <span class="category-tag">বই</span>
                        <span class="category-tag">ফ্যাশন</span>
                        <span class="category-tag">হোম অ্যাপ্লায়েন্স</span>
                    </div>
                </div>
            </div>

            <!-- Template Showcase - Bootstrap Full Width Container -->
            <div class="row">
                <div class="col-12 px-0">
                    <div class="template-showcase w-100">
                        <div class="template-container d-flex flex-nowrap align-items-center">
                            <img src="https://storex.com.bd/storex/images/seq_10.0.webp"
                                alt="Storex Template - Electronics Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_1.1.webp"
                                alt="Storex Template - Fashion Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_3.1.webp"
                                alt="Storex Template - Cosmetics Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_4.1.webp"
                                alt="Storex Template - Multi-category Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_6.1.webp"
                                alt="Storex Template - Premium Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_7.1.webp"
                                alt="Storex Template - Home Appliances Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_8.1.webp" alt="Storex Template - Food Store"
                                class="template-image flex-shrink-0" loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_9.1.webp" alt="Storex Template - Book Store"
                                class="template-image flex-shrink-0" loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_5.1.webp"
                                alt="Storex Template - Jewelry Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <!-- Duplicate images for seamless loop -->
                            <img src="https://storex.com.bd/storex/images/seq_10.0.webp"
                                alt="Storex Template - Electronics Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_1.1.webp"
                                alt="Storex Template - Fashion Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_3.1.webp"
                                alt="Storex Template - Cosmetics Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_4.1.webp"
                                alt="Storex Template - Multi-category Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_6.1.webp"
                                alt="Storex Template - Premium Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_7.1.webp"
                                alt="Storex Template - Home Appliances Store" class="template-image flex-shrink-0"
                                loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_8.1.webp" alt="Storex Template - Food Store"
                                class="template-image flex-shrink-0" loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_9.1.webp" alt="Storex Template - Book Store"
                                class="template-image flex-shrink-0" loading="lazy">

                            <img src="https://storex.com.bd/storex/images/seq_5.1.webp"
                                alt="Storex Template - Jewelry Store" class="template-image flex-shrink-0"
                                loading="lazy">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Storex Section -->
    <section class="why-storex-section py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="why-storex-content">
                        <p class="section-subtitle mb-2">
                            স্টোরেক্স ইকমার্স অটোমেশন সিস্টেম কি?
                        </p>
                        <h2 class="why-storex-title mb-4">
                            নিশ্চিত অনলাইন ব্যবসার জন্য<br>
                            <span class="highlight-text">অল-ইন-ওয়ান</span> সিস্টেম!
                        </h2>
                        <p class="why-storex-description mb-4">
                            স্টোরেক্স দক্ষতা বৃদ্ধির সাধিত নিয়ে নিয়ন্ত্রণ অবহিত শক্তি এবং তেরি<br>
                            ক্রয় আমলিযন্ত্রত সাধিত থেকে। পল্লীনীতি ক্যালেন্দার মাধ্যমে<br>
                            ব্যবস্থা সেবার এবং ম্যাধিভরিক হবে প্রতি।
                        </p>
                        <a href="#" class="btn btn-primary btn-lg rounded-pill px-5 py-3">
                            সবগুলো ফিচার দেখুন <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="professional-image">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Professional businesswoman - Storex e-commerce automation"
                            class="img-fluid rounded-3 shadow-lg" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>

                        <div class="integration-icons">
                            <div class="feature-image">
                                <img src="https://storex.com.bd/storex/images/incubation/storex-multi-channel-marketing-friendly@2x.webp"
                                    alt="Storex Multi-channel Marketing Integration" class="img-fluid rounded"
                                    loading="lazy">
                            </div>
                        </div>

                        <h4 class="feature-title mb-3">Omnichannel Marketing Friendly</h4>

                        <p class="feature-description">
                            ফেসবুক, গুগল, এটিএ, টিকটক - সব চ্যানেল মার্কেটিং<br>
                            হবে এক প্ল্যাটফর্ম থেকেই, একসাথ সিঙ্ক
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-header">
                            <div class="feature-icon payment-icon">
                                <i class="fas fa-credit-card"></i>
                            </div>
                        </div>

                        <div class="integration-icons">
                            <div class="feature-image">
                                <img src="https://storex.com.bd/storex/images/incubation/storex-integrated-payment-system@2x.webp"
                                    alt="Storex Integrated Payment System" class="img-fluid rounded" loading="lazy">
                            </div>
                        </div>

                        <h4 class="feature-title mb-3">ইন্টিগ্রেটেড পেমেন্ট সিস্টেম</h4>

                        <p class="feature-description">
                            বিকাশ, নগদ, রকেট, SSLCommerz, Pay Station -<br>
                            সব পেমেন্ট গেটওয়ে করুন একই সিস্টেমা
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-header">
                            <div class="feature-icon delivery-icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                        </div>

                        <div class="integration-icons">
                            <div class="feature-image">
                                <img src="https://storex.com.bd/storex/images/incubation/storex-multi-channel-courier-management@2x.webp"
                                    alt="Storex Multi-channel Courier Management" class="img-fluid rounded"
                                    loading="lazy">
                            </div>
                        </div>

                        <h4 class="feature-title mb-3">মাল্টি চ্যানেল কুরিয়ার ম্যানেজমেন্ট</h4>

                        <p class="feature-description">
                            আমাদের রয়েছে ওয়ান ক্লিক কুরিয়ার ইন্টিগ্রেট<br>
                            সিস্টেম (পাঠাও, স্টিডফাস্ট, রেডএক্স, রেডএক্স, ই-<br>
                            কুরিয়ার)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Features Section -->
    <section class="additional-features-section py-5">
        <div class="container">
            <!-- Marketing Features Header -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="features-section-title">
                        মার্কেটিং থেকে ডানেই<br>
                        সবকিছুর খবরটি সবশ্রেষ্ঠ 🚀 পেল
                    </h2>
                    <p class="features-section-subtitle">
                        Storex এর মাধ্যমে এর পোশাক নতুন করি, এবং নতুন পেতে উইরিন মজার সৃষ্টি,<br>
                        কর্মসংস্থান বিভাগ সৃষ্টি। রূপান্তর, পণ্য।
                    </p>
                </div>
            </div>

            <!-- Feature Cards Row 1 -->
            <div class="row mb-5">
                <div class="col-lg-6 mb-4">
                    <div class="feature-detail-card bg-light-blue">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">সুপার ইজি (চেকআউট সিস্টেম)</h4>
                                    <p class="feature-detail-description">
                                        কাস্টমার যাতে Checkout করার সময়সময় সম্পূর্ণ<br>
                                        বুঝতে এবং সহজরূপ কানুন বুঝিয়ে খরিদার করে তবলেন,<br>
                                        সম্পূর্ণ দর্শ্য সিস্টেম।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=300&fit=crop"
                                        alt="Easy Checkout System" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="feature-detail-card bg-light-yellow">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">সুপার ফাস্ট ওয়েবসাইট</h4>
                                    <p class="feature-detail-description">
                                        আমাদের ওয়েবসাইট গুলোর লোড স্পিড সেকেন্ড স্পিড। ব্যানারগুলো<br>
                                        লোড করি, লাইট ওজন ডেটা হোস্ট এইচপি হোল্ডেকে অনলি মিনিট <br>
                                        এবং প্রজেক্ট সিঙ্গল সিমটুর করার উইলেরুদিন ওসে শতুরমুল্কার কোরিসিনার।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop"
                                        alt="Fast Website Speed" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Cards Row 2 -->
            <div class="row mb-5">
                <div class="col-lg-6 mb-4">
                    <div class="feature-detail-card bg-light-green">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">আনলিমিটেড ল্যান্ডিং পেজ</h4>
                                    <p class="feature-detail-description">
                                        শুধু আপনি শিক্ষাজ জমনার ভিত্তিকরে দিলেন মোহানলাইট রিয্যান্সে<br>
                                        ভুচি জানেন এবং নিবন্ধন কারণ।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?w=400&h=300&fit=crop"
                                        alt="Unlimited Landing Pages" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="feature-detail-card bg-light-orange">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">সিকিউরিত কাস্টমার ডাটা</h4>
                                    <p class="feature-detail-description">
                                        গ্রাহকের আস্থানার সবরা সুরক্ষিত রাখার নদোনেন ওই ব্যানারসমূহ,<br>
                                        বেদানার, নদেল বিএসগুলো, নদতি উইশনার এ ওইশবিউমিশর<br>
                                        সেবানরা।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=400&h=300&fit=crop"
                                        alt="Secure Customer Data" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Cards Row 3 -->
            <div class="row mb-5">
                <div class="col-lg-6 mb-4">
                    <div class="feature-detail-card bg-light-pink">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">অর্ডার ট্রার (ইনভেন্টরি অর্ডার)</h4>
                                    <p class="feature-detail-description">
                                        ইনভেন্টরি সিনেম সিটি-সিন- ভ্যাসেল যুগেল ত্বাচ শিমুল বিন<br>
                                        পারে না রেডি শিনুস।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=300&fit=crop"
                                        alt="Order Tracking and Inventory" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="feature-detail-card bg-light-purple">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">অপ্টার ম্যানেজমেন্ট</h4>
                                    <p class="feature-detail-description">
                                        আম্যানেজ আইটিএর ক্লোলাইন কৌশলগতিবর কুইস্টমেরিব উইক্যাপভার<br>
                                        অল্লারত পিসিজার শুরুমাসর, পাত দে লুরিয়ান।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=300&fit=crop"
                                        alt="Order Management System" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Cards Row 4 -->
            <div class="row mb-5">
                <div class="col-lg-6 mb-4">
                    <div class="feature-detail-card bg-light-cream">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">গ্লোবাল ম্যানেজমেন্ট</h4>
                                    <p class="feature-detail-description">
                                        আবকলীয় ভেসকার সকিড়ল পেতার শিকিস্টন টেকাল কি<br>
                                        বিবেদ্যক্যানা সালানের ভাবী সৃষ্টি বিলেদের ভাবার হলেল<br>
                                        ভুখি ক্যান্ডার ম্যানেজনতার সিস্টেময়।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1477281765962-ef34e8bb0967?w=400&h=300&fit=crop"
                                        alt="Global Management System" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="feature-detail-card bg-light-teal">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">অভার ম্যানেজমেন্ট</h4>
                                    <p class="feature-detail-description">
                                        আম্যানেজ পিউভার স্বেচ্ছার ওউলাইনেকিত তাৎবক ম্যানেজমেন্টের<br>
                                        ন্যাটরয।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=400&h=300&fit=crop"
                                        alt="Advanced Management Dashboard" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Final Feature Card -->
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="feature-detail-card bg-light-gradient">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="feature-content">
                                    <h4 class="feature-detail-title">ডাটা এক্সপোর্টেশন সার্ভিস<br>উইথ রিয়েল ব্যানেলজার
                                    </h4>
                                    <p class="feature-detail-description">
                                        ডিজিটাল জরিপে খানারের এজুটার পাটার্ন সিশনামর এ<br>
                                        সম্প্রতি কোয়ার, মত এতঘটানার অনেকার ডেতা এরিড অর্কারজ ভেতা নেস<br>
                                        ডেন।
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-detail-image">
                                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=400&fit=crop"
                                        alt="Data Export Service with Real Analytics" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Showcase Section -->
    <section class="dashboard-showcase-section py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="dashboard-title">
                        বিজনেস কন্ট্রোল হবে<br>
                        পুরোটাই আপনার হাতে!
                    </h2>
                    <div class="demo-button-container mt-4">
                        <a href="#" class="btn btn-demo rounded-pill px-4 py-3">
                            <i class="fas fa-play me-2"></i>
                            আমাদের ডেমো দেখুন
                        </a>
                    </div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="row mb-5">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="dashboard-feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="dashboard-feature-title">লাইভ রিপোর্ট ডিজাইন</h5>
                        <p class="dashboard-feature-desc">
                            দেখুন কত টাকা বিক্রি হলো, কতটি অর্ডার এলো, বিক্রির<br>
                            শিনিত করুন তথ্য দিয়ে।
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="dashboard-feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h5 class="dashboard-feature-title">প্রডাক্ট ম্যানেজমেন্ট সিস্টেম</h5>
                        <p class="dashboard-feature-desc">
                            প্রডাক্ট আপলোড থেকে শুরু করে একটিভ স্টক পর্যন্ত<br>
                            সব কিছু নিয়ন্ত্রণ করুন একটি ড্যাশবোর্ড দিয়ে।
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="dashboard-feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="dashboard-feature-title">অর্ডার ম্যানেজমেন্ট সিস্টেম</h5>
                        <p class="dashboard-feature-desc">
                            কাস্টমারের অর্ডার থেকে শুরু করে ডেলিভারি পর্যন্ত সবকিছুর<br>
                            স্ট্যাটাস জানুন এক জায়গা থেকেই।
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="dashboard-feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-analytics"></i>
                        </div>
                        <h5 class="dashboard-feature-title">অ্যাডভান্স ইন্টিগ্রেশন সিস্টেম</h5>
                        <p class="dashboard-feature-desc">
                            আমাদের সিস্টেম এর সাথে যুক্ত সব পেমেন্ট গেটওয়ে, কুরিয়ার<br>
                            সার্ভিস, এবং আরো অনেক সার্ভিস।
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dashboard Image Showcase -->
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-preview">
                        <div class="dashboard-image-container">
                            <img src="https://storex.com.bd/_next/image?url=%2Fstorex%2Fimages%2FDashboard.webp&w=1920&q=75"
                                alt="Storex Dashboard Preview - Complete Business Control"
                                class="img-fluid dashboard-image" loading="lazy">
                            <div class="dashboard-overlay">
                                <div class="overlay-content">
                                    <h4 class="overlay-title">সম্পূর্ণ বিজনেস কন্ট্রোল</h4>
                                    <p class="overlay-desc">একটি ড্যাশবোর্ড থেকেই সবকিছু</p>
                                    <a href="#" class="btn btn-outline-light btn-sm mt-2">
                                        <i class="fas fa-external-link-alt me-1"></i>
                                        লাইভ ডেমো দেখুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fraud Protection Section -->
    <section class="fraud-protection-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Content Column -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="fraud-content">
                        <h2 class="fraud-title mb-4">
                            শুধুমাত্র ফ্রড চেকার দিয়ে ফেক অর্ডার কমিয়ে এনে
                        </h2>
                        
                        <div class="fraud-stats">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="fraud-stat-item">
                                        <div class="fraud-stat-number">৩.৫ লক্ষ +</div>
                                        <p class="fraud-stat-label">এই প্রতি মাসে লেট</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="fraud-stat-item">
                                        <div class="fraud-stat-number">30%</div>
                                        <p class="fraud-stat-label">বিল্ডিং কস্টমার বেস</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <p class="fraud-description">
                          শুধু আমাদের Fraud Checker ইউজ করেই অনেক ব্যাবসায়ী ৩.৫ লক্ষ টাকা পর্যন্ত ফেইক অর্ডারের ক্ষতি ঠেকাতে পেরেছেন। Storex আগেই ধরে ফেলে কোন অর্ডার আসল আর কোনটা ফেক! ফলে সময়, টাকা আর টেনশন তিনদিকেই সেভ!

বিস্তারিত জানুন
                        </p>
                    </div>
                </div>
                
                <!-- Fraud Detection Mockup Column -->
                <div class="col-lg-6">
                    <div class="fraud-mockup">
                        <div class="fraud-detector-card">
                            <div class="fraud-alert">
                                <img src="https://storex.com.bd/storex/images/incubation/fraud-customer@2x-100.webp" alt="Fraud Customer Detection" class="img-fluid">
                            </div>
                            </div>
                        </div>
                        
                        <!-- Animated Characters -->
                        <div class="fraud-characters">
                            <div class="detective-character">
                                <i class="fas fa-user-secret"></i>
                            </div>
                            <div class="fraudster-character">
                                <i class="fas fa-user-ninja"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section py-5">
        <div class="container">
            <h2 class="section-title">কাস্টোমারদের কাছ থেকে শুনুন</h2>
            
            <div class="row">
                <!-- Testimonial 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            StoreX ব্যবহার করে আমার অনলাইন স্টোরের বিক্রি ৩ গুণ বেড়ে গেছে! পেমেন্ট সিস্টেম এবং অর্ডার ম্যানেজমেন্ট খুবই সহজ।
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Customer" class="testimonial-avatar">
                            <div class="testimonial-author-info">
                                <h5>আয়শা রহমান</h5>
                                <p>ফ্যাশন স্টোর মালিক</p>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            আগে অন্য প্ল্যাটফর্ম ব্যবহার করতাম, কিন্তু StoreX-এ আসার পর থেকে আমার ব্যবসার গ্রোথ অনেক বেড়ে গেছে। কাস্টমার সার্ভিস অসাধারণ!
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer" class="testimonial-avatar">
                            <div class="testimonial-author-info">
                                <h5>রাকিব হাসান</h5>
                                <p>ইলেকট্রনিক্স রিটেইলার</p>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="col-lg-4 col-md-6 mb-4 mx-auto">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            নতুন ব্যবসা শুরু করার জন্য StoreX সেরা প্ল্যাটফর্ম। কোনো টেকনিক্যাল নলেজ ছাড়াই সহজে আমার স্টোর সেটআপ করতে পেরেছি।
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Customer" class="testimonial-avatar">
                            <div class="testimonial-author-info">
                                <h5>তানজিনা আক্তার</h5>
                                <p>হ্যান্ডিক্রাফ্ট বিক্রেতা</p>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-lg">আরও রিভিউ পড়ুন</a>
            </div>
        </div>
    </section>
    <!-- Call to Action Section -->
<section class="cta-section py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="cta-card-wrapper">
                    <div class="cta-card">
                        <div class="row align-items-center g-0">
                            <div class="col-lg-6 col-md-12">
                                <div class="cta-image-container">
                                    <img src="https://storex.com.bd/storex/images/incubation/footer-image@2x.webp" alt="StoreX Success Story" class="img-fluid cta-image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="cta-content">
                                    <h2 class="cta-title">এবার আপনার <br><span class="highlight">সফলতার গল্প</span> শোনার <br>অপেক্ষায় বাংলাদেশ!</h2>
                                    <p class="cta-subtitle">অনলাইন ব্যবসা শুরু থেকে সফলতা পর্যন্ত স্টোরএক্স আছে আপনার পাশে, সবসময়...</p>
                                    <a href="#" class="btn cta-btn">শুরু করুন</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
