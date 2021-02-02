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
        <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="intro-y box p-5">

            <div class="input-group mt-3">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" class="input w-full border mt-2" placeholder="Input company">
            </div>

            <div class="input-group mt-3">
                <label for="job_desc">Job Desc</label>
                <input type="text" id="job_desc" name="job_desc" class="input w-full border mt-2" placeholder="Input job desc">
            </div>

            <div class="input-group mt-3">
                <label for="certificate">Link Certificate</label>
                <input type="text" id="certificate" name="certificate" class="input w-full border mt-2" placeholder="Input certificate">
            </div>
            <div class="input-group mt-3">
                <label for="start_work">Start Work</label>
                <input type="date" id="start_work" name="start_work" class="input w-full border mt-2" placeholder="Input start work">
            </div>
            <div class="input-group mt-3">
                <label for="end_work">End Work</label>
                <input type="date" id="end_work" name="end_work" class="input w-full border mt-2" placeholder="Input end work">
            </div>
            <div class="text-right mt-5">
                <a href="{{ route('experiences.index') }}" type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</a>
                <input type="submit" class="button w-24 bg-theme-1 text-white" value="Save">
            </div>

        </div>
    </form>

        <!-- END: Form Layout -->
    </div>

</div>

@endsection
