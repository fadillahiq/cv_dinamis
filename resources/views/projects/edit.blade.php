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
        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="intro-y box p-5">

            <div class="input-group mt-3">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ $project->title }}" class="input w-full border mt-2" placeholder="Input title">
            </div>

            <div class="input-group mt-3">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="input w-full border mt-2">
            </div>
            <div class="input-group mt3">
                <img src="{{ Storage::url($project->image) }}" height="400" width="400" alt="" />
            </div>

            <div class="input-group mt-3">
                <label for="link">Link</label>
                <input type="text" id="link" name="link" value="{{ $project->link }}" class="input w-full border mt-2" placeholder="Input link">
            </div>
            <div class="input-group mt-3">
                <label for="textarea">Desc</label>
                <div class="mt-2">
                    <textarea data-simple-toolbar="true" id="textarea" name="desc" rows="3" class="input w-full border">{{ $project->desc }}</textarea>
                </div>
            </div>
            <div class="text-right mt-5">
                <a href="{{ route('projects.index') }}" type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</a>
                <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
            </div>

        </div>
    </form>

        <!-- END: Form Layout -->
    </div>

</div>

@endsection
