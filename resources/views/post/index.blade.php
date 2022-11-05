@extends('layout')

@section('content')
<div class="container mx-auto flex flex-wrap justify-between p-5 flex-col md:flex-row items-center">
    <h1 class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <span class="ml-3 text-xl">All Post</span>
    </h1>

    <a href="{{ route('post.create') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">New Post
    </a>
  </div>



<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full border">
            <thead class="border-b text-center">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  S/N
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  Title
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  Body
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  Status
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  Created Date
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
                <tr class="border-b">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900 border-r">{{ $loop->index + 1 }}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 border-r">
                    {{ $post->title }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 border-r">
                    {{ $post->body }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 border-r">
                    {{ $post->status ? 'Published' : 'Draft' }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 border-r">
                    {{ $post->created_at }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                        <div class="flex items-center justify-center">
                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                              <a href="#" class="rounded-l inline-block px-4 py-1.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">View</a>
                              <a href="#" class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase hover:bg-purple-700 focus:bg-purple-700 focus:outline-none focus:ring-0 active:bg-purple-800 transition duration-150 ease-in-out">Edit</a>
                              <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-r inline-block px-4 py-1.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-0 active:bg-red-800 transition duration-150 ease-in-out">Delete</button>
                              </form>
                              
                            </div>
                          </div>
                    </td>
                </tr>
                  
              @endforeach
            </tbody>
          </table>
          {{ $posts->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection