<x-layout>
    <h1 class="text-center text-xl font-semibold mt-5">Change Password</h1>

    <form action="{{ route('password.update') }}" method="POST" class="bg-white w-80 px-4 py-6 mt-5 mx-auto rounded-md shadow-md sm:w-96">
        @csrf
        <input type="hidden" name="token" value="{{ $request->token }}">
        <div class="space-y-6">
            <div class="flex flex-col">
                <x-forms.input type="email" name="email" value="{{ $request->email }}" />
            </div>
            <div class="flex flex-col">
                <x-forms.input type="password" name="password" />
            </div>
            <div class="flex flex-col">
                <x-forms.input type="password" name="password_confirmation" label="Confirm Password" />
            </div>
        </div>

        <x-forms.submit>Change Password</x-forms.submit>
    </form>
</x-layout>
