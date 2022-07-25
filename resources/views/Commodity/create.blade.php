@extends('layouts.master')
@section('create')

    <form method="post" >
    @csrf

    <!-- Name -->
        <div>
            <x-label for="name" :value="'عنوان'" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <div>
            <x-label for="body" :value="'محتوا'" />

            <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required  />
        </div>

        <x-button>
            ارسال پست
        </x-button>
        <x-button-a  :href="route('post.index')">
            نمایش مطالب
        </x-button-a>

        <button type="submit"></button>
    </form>

@endsection
