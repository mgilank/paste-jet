@extends('layouts.app')

@section('content')
<script>

setTimeout(() => {
    document.getElementById('flash').remove();
}, 2000);

</script>
@if ($message = Session::get('success')) 
<div id="flash" class="w-full rounded p-5 bg-slate-200 text-sm flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
</svg>

    {{ $message }}
</div>
@endif
{{-- <div id="flash" class=" ">
    tesss sdfsdf
</div> --}}
    <form action="{{ route('home') }}" method="POST">
        @csrf

        <div x-data="{ isOpen: false }" class="h-screen flex overflow-hidden">
            <x-main>
                @include('_editor')
            </x-main>

            <x-nav>
                <x-nav-item label="Save" type="submit" icon="heroicon-o-folder-plus" />
                <x-nav-item label="Reset" type="reset" icon="heroicon-o-no-symbol" />
            </x-nav>
        </div>
    </form>
@stop
