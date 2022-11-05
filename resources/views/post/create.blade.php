@extends('layout')

@section('content')
<div class="container mx-auto flex flex-wrap justify-between p-5 flex-col md:flex-row items-center">
    <h1 class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <span class="ml-3 text-xl">New Post</span>
    </h1>
    <a href="{{ route('post.index') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">All Post
    </a>
  </div>

  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-4 mx-auto flex">
      <div class="lg:w-full md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
        <form action="{{ route('post.store') }}" method="POST">
          @csrf
        
          <div class="relative mb-4">
            <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
            <input type="text" id="title" name="title" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-1">
            <label for="body" class="leading-7 text-sm text-gray-600">Body</label>
            <textarea id="body" name="body" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>

          <div class="flex justify-start">
            <div class="form-check form-switch">
              <label class="form-check-label inline-block text-gray-800" for="status">Status</label>
              <input class="form-check-input appearance-none w-9 -mr-10 rounded-full float-right h-5 align-top bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm" type="checkbox" name="status" role="switch" id="status" checked>
              
            </div>
          </div>
          
          <div class="flex space-x-2 justify-center">
              <button type="submit" class="inline-block px-6 py-2 text-lg bg-indigo-500 text-white font-medium leading-tight uppercase rounded shadow-md hover:bg-indigo-600 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-600 active:shadow-lg transition duration-150 ease-in-out">Add</button>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection