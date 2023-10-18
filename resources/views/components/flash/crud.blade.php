@props([
    'crudMessage'
])

@if($crudMessage)
    <div id="crud-flash" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">
        <div class="ml-3 text-sm font-medium">
            {{ $crudMessage }}
        </div>
        <button
            type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8"
            data-dismiss-target="#crud-flash"
            aria-label="Close"
        >
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
@endif
