<x-layout>
    <h1 class="text-center text-xl font-semibold mt-5">Change Password</h1>

    <form action="{{ route('password.update') }}" method="POST" class="bg-white w-80 px-4 py-6 mt-5 mx-auto rounded-md shadow-md sm:w-96">
        @csrf
        <input type="hidden" name="token" value="{{ $request->token }}">
        <div class="space-y-6">
            <div class="flex flex-col">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" value="{{ old('email', $request->email) }}" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">

                <x-forms.error name="email" />
            </div>
            <div class="flex flex-col">
                <label for="password">New Password</label>
                <input type="passwowrd" name="password" id="password" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">

                <x-forms.error name="password" />
            </div>
            <div class="flex flex-col">
                <label for="password_confirmation">Confirm Password</label>
                <input type="passwowrd" name="password_confirmation" id="password_confirmation" class="border border-gray-200 bg-gray-100 text-gray-700 p-1 rounded-sm focus:outline-none focus:border-gray-300">
            </div>
        </div>

        <x-forms.submit>Change Password</x-forms.submit>
    </form>
</x-layout>
