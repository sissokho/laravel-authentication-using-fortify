<x-layout>
    <h1 class="text-center text-xl font-semibold mt-5">Log In</h1>
    @if (session('status'))
        <div class="mt-4 mb-4 font-medium text-sm text-green-600 text-center">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="bg-white w-80 px-4 py-6 mt-5 rounded-md shadow-md sm:w-96">
        @csrf
        <div class="space-y-6">
            <div class="flex flex-col">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">

                <x-forms.error name="email" />
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input type="passwowrd" name="password" id="password" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">

                <x-forms.error name="password" />
            </div>
        </div>

        <x-forms.submit>Sign In</x-forms.submit>
        <a href="{{ route('password.request') }}" class="block mt-3 text-green-600 hover:text-green-700">Forgot password ?</a>
    </form>
</x-layout>
