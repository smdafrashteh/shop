<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>





                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-center">
                                        <caption scope="col" class="text-sm font-medium text-gray-900 px-6 py-4"> مطالب </caption>
                                        <thead class="border-b bg-gray-50">
                                        <tr>
                                            {{--                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">--}}
                                            {{--                                                انتخاب--}}
                                            {{--                                            </th>--}}
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                #
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                عنوان
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                متن
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                حذف
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                ویرایش
                                            </th>
                                        </tr>

                                        </thead class="border-b">

                                        <tbody>
                                        @foreach($posts as $post)

                                            <tr class="bg-white border-b">

                                                {{--                                                //--------------------------------------------------------------------------------------}}
                                                {{--                                                <form method="post" action="/post/delete/checkbox">--}}
                                                {{--                                                @csrf--}}
                                                {{--                                                @method('delete')--}}
                                                {{--                                                <td>--}}
                                                {{--                                                    <input type="checkbox" name="check[]" value="{{$post->id}}">--}}

                                                {{--                                                </td>--}}
                                                {{--                                                //-----------------------------------------------------------------------}}

                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{$i++}}</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{$post->name}}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{$post->body}}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">


                                                    <form method="post" action="/post/delete/{{$post->id}}">
                                                        @csrf
                                                        @method('delete')

                                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                                                            delete
                                                        </button>
                                                    </form>
                                                </td>

                                                {{--                                                <x-button-a  :href=" route('post.delete',['post'=>{{$post->id}}]) ">--}}
                                                {{--                                                    حذف--}}
                                                {{--                                                </x-button-a>--}}

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <form method="post" action="/post/update/{{$post->id}}">
                                                        @csrf
                                                        @method('get')
                                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                                                            ویرایش
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                                            حذف
                                        </button>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>










                </div>
            </div>
        </div>
    </div>
</x-app-layout>
