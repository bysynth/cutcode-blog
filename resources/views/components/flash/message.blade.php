@props([
    'message'
])

@if($message)
    <p class="max-w-[640px] mt-4 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple mb-5 text-center">
        {{ $message }}
    </p>
@endif
