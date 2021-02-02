@extends('layouts.dashboard')

@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Form Layout
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">

    <div class="intro-y col-span-12 lg:col-span-6">

        <!-- BEGIN: Form Layout -->
        <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="intro-y box p-5">

            <div class="input-group mt-3">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="input w-full border mt-2" placeholder="Input name">
            </div>

            <div class="input-group mt-3">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="input w-full border mt-2">
            </div>

            <div class="input-group mt-3">
                <label for="passion">Passion</label>
                <input type="text" id="passion" name="passion" class="input w-full border mt-2" placeholder="Input passion">
            </div>
            <div class="input-group mt-3">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" class="input w-full border mt-2" placeholder="Input country">
            </div>
            <div class="input-group mt-3">
                <label for="city">City</label>
                <input type="text" id="city" name="city" class="input w-full border mt-2" placeholder="Input city">
            </div>
            <div class="input-group mt-3">
                <label for="street">Street</label>
                <input type="text" id="street" name="street" class="input w-full border mt-2" placeholder="Input street">
            </div>
            <div class="input-group mt-3">
                <label for="age">Age</label>
                <input type="text" id="age" name="age" class="input w-full border mt-2" placeholder="Input age">
            </div>
            <div class="input-group mt-3">
                <label>Social Media</label>
                <div class="sm:grid grid-cols-3 gap-2">
                    <div class="relative mt-2">
                        <div class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">Email</div>
                        <div class="pl-3">
                            <input type="email" name="email" class="input pl-12 w-full border col-span-4" placeholder="Email">
                        </div>
                    </div>
                    <div class="relative mt-2">
                        <div class="absolute top-0 left-0 rounded-l w-20 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">Telegram</div>
                        <div class="pl-3">
                            <input type="text" name="telegram" class="input pl-20 w-full border col-span-4" placeholder="Telegram">
                        </div>
                    </div>
                    <div class="relative mt-2">
                        <div class="absolute top-0 left-0 rounded-l w-20 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">WhatsApp</div>
                        <div class="pl-3">
                            <input type="text" name="whatsapp" class="input pl-20 w-full border col-span-4" placeholder="WhatsApp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-group mt-3">
                <label for="textarea">About</label>
                <div class="mt-2">
                    <textarea data-simple-toolbar="true" id="textarea" name="about" rows="3" class="input w-full border"></textarea>
                </div>
            </div>
            <div class="text-right mt-5">
                <a href="{{ route('profiles.index') }}" type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</a>
                <input type="submit" class="button w-24 bg-theme-1 text-white" value="Save">
            </div>

        </div>
    </form>

        <!-- END: Form Layout -->
    </div>

</div>

@endsection
