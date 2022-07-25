@extends('layouts.master')
@section('update')

    {{--                    <div class="mb-6">--}}
    {{--                        <label for="success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">0</label>--}}
    {{--                        <input type="text" id="success" class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500" placeholder="Success input">--}}
    {{--                        <p class="mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">Well done!</span> Some success messsage.</p>--}}
    {{--                        --}}
    {{--                        --}}
    {{--                    </div>--}}

    {{--                    <div class="flex flex-col">--}}
    {{--                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
    {{--                            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">--}}
    {{--                                <div class="overflow-hidden">--}}
    {{--                                    --}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}






    <div class="flex flex-col">
        <form action="/post/update/{{$post->id}}" method="post">
            @csrf
            @method('put')
            <input type="text" name="name" value="{{$post->name}}"><br><br>
            <input type="text" name="body" value="{{$post->body}}"><br><br>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                ویرایش
            </button>
        </form>
    </div>
    @forelse($errors->all() as $error)
        {{$error}}
    @empty
    @endforelse


@endsection
