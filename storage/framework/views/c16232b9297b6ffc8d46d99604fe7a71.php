<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Custom styles for FAQ */
        .faq-answer {
            display: none;
        }

        /* Custom style for the "Back" button */
        .back-button {
            background: none;
            border: none;
            color: #007bff; /* Blue color similar to iPhone's back button */
            font-size: 18px;
            padding: 0;
            cursor: pointer;
            text-decoration: underline;
        }
        h1{
            text-align: center;
            margin-bottom: 10px;
        }

        /* Custom styles for the FAQ items */
        .faq-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .faq-item:hover {
            background-color: #e0e0e0;
            transition: background-color 0.3s;
        }

        /* Custom styles for the FAQ question */
        .faq-question {
            font-size: 24px; /* Decreased font size */
            font-weight: bold; /* Added bold style */
            margin-bottom: 10px; /* Added margin for spacing */
        }

        /* Custom styles for the FAQ answer */
        .faq-answer-text {
            font-size: 16px;
    margin-top: 10px;
    background-color: #f0f0f0; /* Add a background color */
    padding: 10px; /* Add some padding for spacing */
    border-radius: 5px; /* Add rounded corners */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mb-3">
            <!-- Updated "Back" button style -->
            <button class="back-button" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path fill="currentColor" d="M19 12H5m7-7-7 7 7 7" /></svg>
                Back
            </button>
        </div>
        <h1 class="mt-5">Frequently Asked Questions</h1>

        <div class="accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    ই-পুষ্টি প্লাটফর্মে কি কি আছে?
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>অনলাইন কোর্স</li>
                            <li>লাইব্রেরী (তথ্য ও শিক্ষা উপকরণ)</li>
                            <li>ওয়েবিনার (বিষয়ভিত্তিক আলোচনা ও প্রশিক্ষণ)</li>
                            <li>ব্লগ (ভিডিও)</li>
                            <li>নিউট্রিশন ক্লাব বিষয়ক তথ্য</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    বিআইআইডি ফাউন্ডেশন সম্পর্কে
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        বিআইআইডি ফাউন্ডেশন, একটি সামাজিক উদ্যোগ, যা টেকসই উন্নয়নের লক্ষ্যে সরকারী এবং বেসরকারি প্রতিষ্ঠান এবং উদ্যোগের সাথে যৌথভাবে কৃষি, পুষ্টি, ও উদ্যোক্তা উন্নয়ন সংক্রান্ত কার্যক্রম পরিচালনা করছে। বিআইআইডি তথ্য-প্রযুক্তি ভিত্তিক সেবা প্রদানের মাধ্যমে পুষ্টি খাতে কিশোর-কিশোরী ও তরুণদের সক্ষমতা বৃদ্ধি এবং নেতৃত্ব বিকাশ, তরুণ উদ্যোক্তাদের দক্ষতা বৃদ্ধি, কৃষি সম্প্রসারণ কার্যক্রম আধুনিকায়নে বিভিন্ন কার্যক্রম পরিচালনা করে থাকে। বিআইআইডি এর অন্যতম উদ্যোগ সমূহ হল: নিউট্রিশন ক্লাব, ইন্টারন্যাশনাল নিউদ্রিশন অলিম্পিয়াড, ই- কৃষক, বি-ল্যাব, নির্ভয়া। বিআইআইডি ফাউন্ডেশন সকল কার্যক্রমে উদ্ভাবনী কৌশল অনুশীলনের আয়োজন করে থাকে।
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    নিউট্রিশন ক্লাব সম্পর্কে
                    </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        পুষ্টিসযদ্ধ বাংলাদেশ গড়ার লক্ষ্যে বাংলাদেশ ইনস্টিটিউট অফ আইসিটি ইন ডেভেলপমেন্ট (BIID) এর উদ্যোগে ২০১৫ সালে নিউটিশন ক্লাব গঠনের উদ্যোগ গ্রহণ করা হয়। কিশোর কিশোরী, এবং তরুণদের অংশগ্রহণ, নেতৃত্ব প্রদান, খাদ্য নিরাপত্তা, পুষ্টি কার্যক্রম সঠিকভাবে পরিচালনার জন্য নিউটিশন ক্লাব কাজ করে । ২০১৭ সাল থেকে কিশোর কিশোরীদের
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    ফিড দ্যা ফিউচার বাংলাদেশ নিউট্রিশন অ্যাক্টিভিটি
                    </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        USAID এর অর্থায়নে “ফিড দ্য ফিউচার বাংলাদেশ নিউট্রিশন অ্যাক্টিভিটি” কিশোর ও কিশোরীদের ক্ষমতায়নের মাধ্যমে পুষ্টি, নিরাপদ পানি, হোম হাইজিন বা পারিবারিক স্বাস্থ্যবিধি, মাসিক ব্যবস্থাপনা, লিঙ্গ ভিত্তিক সহিংসতা ও বাল্যবিবাহ প্রতিরোধ, খাদ্য নিরাপত্তা, খাদ্য ক্ষতি ও ব্যবধান রোধ, নেতৃত্ব এ সকল বিষয় সমূহ চর্চা করে সার্বিক পারিবারিক ও সামাজিক উন্নয়নের জন্য কাজ করে যাচ্ছে।
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle arrow icon on accordion click
        document.querySelectorAll('.accordion-button').forEach(function (button) {
            button.addEventListener('click', function () {
                const arrow = this.querySelector('.arrow');
                if (arrow) {
                    arrow.classList.toggle('rotate');
                }
            });
        });

        function goBack() {
            window.location.href = 'index';
        }
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\epushtiN\temp_129\resources\views/home_page/home_faq.blade.php ENDPATH**/ ?>