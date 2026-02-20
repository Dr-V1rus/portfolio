@extends('layouts.app')

@section('content')
<div class="pt-32 pb-20">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <span class="text-[#785555] font-semibold text-sm tracking-wider uppercase">Get in touch</span>
            <h1 class="text-5xl font-bold mt-4 mb-6">Let's connect</h1>
            <p class="text-xl text-gray-600">I'm actively seeking internship opportunities</p>
        </div>

        <div class="max-w-xl mx-auto">
            <div class="bg-white rounded-3xl p-8 border border-gray-100">
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-[#785555]/10 rounded-3xl flex items-center justify-center mx-auto mb-4">
                        <i class="fa-regular fa-envelope text-3xl text-[#785555]"></i>
                    </div>
                    <h2 class="text-2xl font-bold mb-2">Email me directly</h2>
                    <p class="text-gray-600">The best way to reach me</p>
                </div>
                
                <a href="mailto:your-email@email.com" class="block w-full bg-gray-900 text-white px-8 py-4 rounded-xl font-medium hover:bg-gray-800 transition text-center mb-6">
                    wizlad3@gmail.com
                </a>

                <div class="flex justify-center gap-4">
                    <a href="#" class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600 hover:bg-[#785555] hover:text-white transition">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600 hover:bg-[#785555] hover:text-white transition">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                </div>
            </div>

            <div class="text-center mt-8 text-gray-500 text-sm">
                Response within 24-48 hours
            </div>
        </div>
    </div>
</div>
@endsection
