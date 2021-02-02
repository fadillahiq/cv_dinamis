
@extends('layouts.dashboard')

@section('content')
<h2 class="intro-y text-lg font-medium mt-10">
    Data List Layout
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
        <a href="{{ route('profiles.create') }}" class="button text-white bg-theme-1 shadow-md mr-2">Add New Profile</a>
        <div class="dropdown">
            <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-box w-40">
                <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                </div>
            </div>
        </div>
        <div class="hidden md:block mx-auto text-gray-600"></div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <form action="{{ route('profiles.index') }}" method="GET">
                    <input type="text" name="search" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search..." value="{{ request()->query('search') }}">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </form>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-no-wrap">IMAGES</th>
                    <th class="whitespace-no-wrap">PROFILE</th>
                    <th class="text-center whitespace-no-wrap">EMAIL</th>
                    <th class="text-center whitespace-no-wrap">WHATSAPP</th>
                    <th class="text-center whitespace-no-wrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($profiles as $profile)
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ Storage::url($profile->image) }}" title="Uploaded at {{ $profile->updated_at->diffForHumans() }}">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-no-wrap">{{ $profile->name }}</a>
                        <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $profile->passion }}</div>
                    </td>
                    <td class="text-center">{{ $profile->email }}</td>
                    <td class="w-40 text-center">{{ $profile->whatsapp }}</td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="{{ route('profiles.edit', $profile->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">
                        <p class="text-center">No result found for query <strong>{{ request()->query('search') }}</strong></p>
                    </td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>

    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
        <ul class="pagination">
            {!! $profiles->appends(['search' => request()->query('search')])->links() !!}
        </ul>
    </div>
    <!-- END: Pagination -->
</div>
<!-- BEGIN: Delete Confirmation Modal -->
<div class="modal" id="delete-confirmation-modal">
    <div class="modal__content">
        <div class="p-5 text-center">
            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
            <div class="text-3xl mt-5">Are you sure?</div>
            <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
        </div>
        <div class="px-5 pb-8 text-center">
            @foreach ($profiles as $profile)
            <form action="{{ route('profiles.destroy',$profile->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-600 mr-1">Cancel</button>

                <button type="submit" class="button w-24 bg-theme-6 text-white">Delete</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->
</div>
<!-- END: Content -->
</div>
@endsection
