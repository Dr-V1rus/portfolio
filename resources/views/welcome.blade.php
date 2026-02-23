<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precious | FullStack Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background: #20BA5E;
            color: white;
        }

        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            display: none;
            border-left: 4px solid #785555;
        }

        .toast.success {
            border-left-color: #10B981;
        }

        .toast.error {
            border-left-color: #EF4444;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900 font-['Inter'] antialiased">

    <!-- Toast Notification -->
    <div id="toast" class="toast">
        <span id="toast-message"></span>
    </div>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/2349016308686?text=Hi%20Precious,%20I%20saw%20your%20portfolio" class="whatsapp-float"
        target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-100">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="#" class="text-2xl font-bold text-[#785555]">Precious</a>
                <div class="hidden md:flex items-center space-x-12">
                    <a href="#work" class="text-gray-600 hover:text-gray-900 transition text-sm font-medium">Work</a>
                    <a href="#skills"
                        class="text-gray-600 hover:text-gray-900 transition text-sm font-medium">Skills</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900 transition text-sm font-medium">About</a>
                    <a href="#contact"
                        class="text-gray-600 hover:text-gray-900 transition text-sm font-medium">Contact</a>
                </div>
                <a href="#contact"
                    class="bg-[#785555] text-white px-5 py-2.5 rounded-lg text-sm font-medium hover:bg-[#634444] transition">
                    Hire Me
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Photo -->
    <section class="pt-32 pb-20 md:pt-40 md:pb-28">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Profile Photo -->
                <div class="relative">
                    <div class="w-48 h-48 md:w-56 md:h-56 rounded-full overflow-hidden border-4 border-white shadow-xl">
                        <img src="https://ui-avatars.com/api/?name=Precious&size=200&background=785555&color=fff&bold=true"
                            alt="Precious" class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="flex-1 text-center md:text-left">
                    <span class="text-[#785555] font-semibold text-sm tracking-wider uppercase mb-4 block">FullStack
                        Developer</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
                        Hi, I'm <span class="text-[#785555]">Precious</span>
                    </h1>
                    <p class="text-xl text-gray-600 max-w-2xl mb-6 leading-relaxed">
                        LAMP Stack • Laravel • JavaScript • PHP • MySQL • Tailwind CSS
                    </p>
                    <p class="text-lg text-gray-600 max-w-2xl mb-8">
                        Recently completed final defence. Looking for an internship to kickstart my career.
                    </p>
                    <div class="flex flex-wrap items-center gap-4 justify-center md:justify-start">
                        <a href="#work"
                            class="bg-[#785555] text-white px-8 py-4 rounded-xl font-medium hover:bg-[#634444] transition shadow-lg">
                            View My Work
                        </a>
                        <a href="https://wa.me/2349016308686?text=Hi%20Precious,%20I%20saw%20your%20portfolio"
                            target="_blank"
                            class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-xl font-medium hover:border-[#25D366] hover:text-[#25D366] hover:bg-green-50 transition flex items-center gap-2">
                            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Section -->
    <section id="work" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#785555] font-semibold text-sm tracking-wider uppercase">Portfolio</span>
                <h2 class="text-4xl font-bold mt-3 mb-4">My Projects</h2>
                <p class="text-gray-600 text-lg">Projects built during my fullstack program</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 - Final Defence -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="h-48 bg-gradient-to-br from-[#785555] to-[#9f7e7e] flex items-center justify-center">
                        <i class="fab fa-laravel text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">Laravel</span>
                            <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">MySQL</span>
                            <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">Tailwind</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Final Defence Project</h3>
                        <p class="text-gray-600 mb-4">Complete Laravel application with authentication, database design,
                            and responsive UI. My final defence project.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="h-48 bg-gradient-to-br from-[#785555] to-[#9f7e7e] flex items-center justify-center">
                        <i class="fab fa-php text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">PHP</span>
                            <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">MySQL</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Blog System</h3>
                        <p class="text-gray-600 mb-4">Custom PHP blog with user posts, comments, and database
                            integration. Learning project for backend development.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="h-48 bg-gradient-to-br from-[#785555] to-[#9f7e7e] flex items-center justify-center">
                        <i class="fab fa-js text-6xl text-white opacity-50"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">JavaScript</span>
                            <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">API</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Weather Dashboard</h3>
                        <p class="text-gray-600 mb-4">JavaScript application consuming public weather API. Built to
                            practice async JavaScript and API integration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#785555] font-semibold text-sm tracking-wider uppercase">Skills</span>
                <h2 class="text-4xl font-bold mt-3 mb-4">Technical Skills</h2>
                <p class="text-gray-600 text-lg">Technologies I've learned and worked with</p>
            </div>

            <div class="flex flex-wrap justify-center gap-3 max-w-3xl mx-auto">
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    PHP</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    Laravel</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    JavaScript</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    MySQL</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    Tailwind CSS</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    HTML5</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    CSS3</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    Git</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    Linux Basics</div>
                <div class="px-6 py-3 bg-white border border-gray-200 rounded-full text-gray-700 font-medium shadow-sm">
                    REST APIs</div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-[#785555] font-semibold text-sm tracking-wider uppercase mb-4 block">About
                        Me</span>
                    <h2 class="text-4xl font-bold mb-6">FullStack Developer</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        I'm Precious, a recent fullstack development graduate with a passion for building web
                        applications.
                        I started with the LAMP stack and expanded into Laravel and modern JavaScript.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        My final defence project was a complete Laravel application that demonstrated my ability to
                        handle
                        authentication, database design, and responsive frontend development.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        I'm now seeking an internship where I can contribute to real projects while learning from
                        experienced developers.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div>
                            <div class="text-3xl font-bold text-[#785555]">3+</div>
                            <div class="text-gray-500">Projects Built</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-[#785555]">1 Year</div>
                            <div class="text-gray-500">Learning</div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-[#785555] to-[#9f7e7e] rounded-3xl p-1">
                        <div class="bg-white rounded-3xl p-8">
                            <h3 class="text-xl font-bold mb-6">Education</h3>
                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-12 h-12 bg-[#785555]/10 rounded-2xl flex items-center justify-center flex-shrink-0">
                                        <i class="fa-solid fa-graduation-cap text-[#785555] text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">FullStack Development Program</h4>
                                        <p class="text-gray-500 text-sm">2025 - 2026</p>
                                        <p class="text-gray-600 text-sm mt-1">Final defence: Complete Laravel
                                            application with authentication and database</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section with Form -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-[#785555] font-semibold text-sm tracking-wider uppercase mb-4 block">Get In
                        Touch</span>
                    <h2 class="text-4xl font-bold mb-6">Let's connect</h2>
                    <p class="text-gray-600 text-lg">
                        I'm actively seeking internship opportunities. Feel free to reach out!
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Contact Info Cards -->
                    <div class="space-y-4">
                        <!-- WhatsApp Card -->
                        <a href="https://wa.me/2349016308686?text=Hi%20Precious,%20I%20saw%20your%20portfolio"
                            target="_blank"
                            class="block bg-[#25D366] text-white p-6 rounded-2xl hover:shadow-lg transition">
                            <div class="flex items-center gap-4">
                                <i class="fab fa-whatsapp text-4xl"></i>
                                <div>
                                    <h3 class="font-bold text-xl">WhatsApp</h3>
                                    <p class="text-white/90">Quickest response</p>
                                </div>
                            </div>
                        </a>

                        <!-- Email Card -->
                        <div class="bg-gray-50 p-6 rounded-2xl">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-[#785555]/10 rounded-xl flex items-center justify-center">
                                    <i class="fa-regular fa-envelope text-[#785555] text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold">Email</h3>
                                    <p class="text-gray-600">wizlad3@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="flex gap-3">
                            <a href="https://github.com/Dr-V1rus"
                                class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600 hover:bg-[#785555] hover:text-white transition">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600 hover:bg-[#785555] hover:text-white transition">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="bg-white rounded-2xl p-8 border border-gray-100">
                        <h3 class="text-2xl font-bold mb-6">Send a message</h3>

                        <form id="contactForm" class="space-y-4">
                            @csrf
                            <div>
                                <input type="text" name="name" placeholder="Your Name"
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-[#785555] focus:bg-white transition"
                                    required>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Your Email"
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-[#785555] focus:bg-white transition"
                                    required>
                            </div>
                            <div>
                                <input type="text" name="subject" placeholder="Subject (optional)"
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-[#785555] focus:bg-white transition">
                            </div>
                            <div>
                                <textarea name="message" rows="4" placeholder="Your Message"
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-[#785555] focus:bg-white transition"
                                    required></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-[#785555] text-white px-8 py-4 rounded-xl font-medium hover:bg-[#634444] transition shadow-lg flex items-center justify-center gap-2">
                                <span>Send Message</span>
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center text-gray-400 text-sm">
                © 2026 Precious. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- JavaScript for Contact Form -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const form = e.target;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            // Get form data
            const formData = new FormData(form);

            try {
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const data = await response.json();

                if (response.ok) {
                    showToast(data.message, 'success');
                    form.reset();
                } else {
                    showToast(data.message || 'Error sending message', 'error');
                }
            } catch (error) {
                showToast('Network error. Please try again.', 'error');
            } finally {
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        });

        function showToast(message, type) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toast.className = `toast ${type}`;
            toastMessage.textContent = message;
            toast.style.display = 'block';

            setTimeout(() => {
                toast.style.display = 'none';
            }, 5000);
        }
    </script>
</body>

</html>