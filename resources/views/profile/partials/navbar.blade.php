<nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
    <div>
        <img src="{{ asset('media/evenova_1.png') }}" alt="Evenova Logo" class="h-8 w-10 "> 
    </div>

    <ul class="hidden md:flex space-x-6">
        <li><a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600">Home</a></li>
        <li><a href="{{ url('/events') }}" class="text-gray-700 hover:text-blue-600">Events</a></li>
        <li><a href="{{ url('/contact') }}" class="text-gray-700 hover:text-blue-600">Contact</a></li>
    </ul>

    <div>
        <a href="{{ url('/register') }}" class="px-4 py-2 rounded-md bg-gradient-to-r from-blue-500 to-purple-600 text-white">Sign Up</a>
    </div>
</nav>


