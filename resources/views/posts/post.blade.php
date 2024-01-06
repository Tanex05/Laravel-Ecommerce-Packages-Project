<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-semibold text-1 text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

   <div class="container py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="container mt-5">
                <a href="" class="btn btn-success">Create Post</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 textgray-900">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <th>{{ ++$loop->index }}</th>
                                    <th style="width: 30%">{{ $post->Title }}</th>
                                    <th>{{ $post->Category }}</th>
                                    <th><button class="btn btn-primary">Edit</button></th>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
   </div>
</x-app-layout>
