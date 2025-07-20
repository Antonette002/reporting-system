<!-- resources/views/welcome.blade.php -->
<x-guest-layout>
    <div class="sm:justify-center sm:pt-0">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800">Welcome to ReportIt</h1>
            <p class="mt-4 text-lg text-gray-600">
                Report issues. Improve communities. Empower change.
            </p>

            <div class="mt-6">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-blue-600 underline">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-blue-600 underline">Log in</a>
                    <span class="mx-2">|</span>
                    <a href="{{ route('register') }}" class="text-blue-600 underline">Register</a>
                @endauth
            </div>
        </div>
    </div>
</x-guest-layout>
