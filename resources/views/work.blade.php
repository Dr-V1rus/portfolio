@extends('layouts.app')

@section('content')
<div class="pt-32 pb-20">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <span class="text-[#785555] font-semibold text-sm tracking-wider uppercase">Projects</span>
            <h1 class="text-5xl font-bold mt-4 mb-6">Learning Projects</h1>
            <p class="text-xl text-gray-600">Projects built during my fullstack program</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 - Final Defence -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-[#785555] to-[#9f7e7e] flex items-center justify-center">
                    <i class="fab fa-laravel text-6xl text-white opacity-50"></i>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">MySQL</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">Tailwind</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Final Defence Project</h3>
                    <p class="text-gray-600 mb-4">Complete Laravel application with authentication, database relationships, and responsive design. My final defence project.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-[#785555] to-[#9f7e7e] flex items-center justify-center">
                    <i class="fab fa-php text-6xl text-white opacity-50"></i>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">PHP</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">MySQL</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Blog System</h3>
                    <p class="text-gray-600 mb-4">Custom PHP blog with user posts, comments, and database integration. Learning project for backend development.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-[#785555] to-[#9f7e7e] flex items-center justify-center">
                    <i class="fab fa-js text-6xl text-white opacity-50"></i>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">JavaScript</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium">API</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Weather Dashboard</h3>
                    <p class="text-gray-600 mb-4">JavaScript application consuming public weather API. Built to practice async JavaScript and API integration.</p>
                </div>
            </div>
        </div>

        <!-- Note -->
        <div class="text-center mt-16 p-8 bg-gray-50 rounded-3xl">
            <p class="text-gray-600 text-lg">
                These are learning projects from my development program. 
                I'm excited to build more in a professional internship environment.
            </p>
        </div>
    </div>
</div>
@endsection
