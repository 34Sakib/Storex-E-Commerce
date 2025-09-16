@extends('user.layouts.masterlayout')

@section('content')

<!-- StoreX Info Hero Section -->
<section class="storex-info-section">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6 col-md-6">
                <div class="storex-content">
                    <h1 class="storex-main-title">স্টোরএক্স কি?</h1>
                    <div class="storex-description">
                        <p class="description-text">
                            স্টোরএক্স একটি ই-কমার্স অটোমেশন সিস্টেম যার মাধ্যমে অল্প সময়, স্বল্প খরচে এবং কোনো ঝঞ্ঝাট ছাড়াই টেকনিক্যাল জ্ঞান ছাড়াই আপনি লাভজনক পেজ ও সম্পূর্ণ ওয়েবসাইট তৈরি করে অনলাইন ব্যবসা শুরু করতে পারবেন।
                        </p>
                        <p class="highlight-text">
                            স্টোরএক্স আপনার ব্যবসাকে করবে সহজ, দ্রুত এবং লাভজনক।
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="storex-illustration-wrapper">
                    <div class="illustration-container">
                        <img src="https://storex.com.bd/storex/images/contact/contact.svg" alt="StoreX Illustration" class="storex-illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whatsapp-float">
            <a href="#" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form-wrapper">
                    <h2 class="contact-form-title">যোগাযোগ করুন</h2>
                    <form class="contact-form">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control contact-input" placeholder="নাম লিখুন">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control contact-input" placeholder="মোবাইল নাম্বারটি লিখুন ন">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control contact-input" placeholder="ইমেইল অ্যাড্রেস লিখুন ন">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control contact-input" placeholder="বিষয় প্রতিষ্ঠানের নাম লিখুন ন">
                        </div>
                        <div class="form-group mb-4">
                            <textarea class="form-control contact-textarea" rows="4" placeholder="মেসেজ লিখুন ন"></textarea>
                        </div>
                        <button type="submit" class="btn contact-submit-btn">সাবমিট করুন</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info-wrapper">
                    <div class="contact-info-header">
                        <h3 class="contact-info-title">আমাদের ঠিকানা</h3>
                    </div>
                    <div class="contact-info-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">019 50 60 60 20</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">info@storex.com.bd</div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">৩/৫, বিস্কুট-৮, চিতম তবন-২,<br>রসিনা গার্ডেন সিটি, ঢাকা-১২০৭</div>
                        </div>
                    </div>
                    <div class="contact-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1!2d90.4125!3d23.7808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ2JzUxLjAiTiA5MMKwMjQnNDUuMCJF!5e0!3m2!1sen!2sbd!4v1234567890"
                            width="100%" 
                            height="250" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
