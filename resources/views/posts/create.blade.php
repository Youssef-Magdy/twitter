<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="h2">
                        Create New Post
                    </p>
                    <div class="continer">

                        <form action=" {{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label for="Title" class="mb-2">Title Post</label>
                                    <input class="form-control" id="Title" name="title" type="text" placeholder="Enter Your Title">
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-floating">
                                        <textarea name="body" rows="3" id="floatingTextarea" placeholder="Leave a comment here" class="@error('content') is-invalid @enderror form-control"></textarea>
                                        <label for="floatingTextarea">Body Post :</label>
                                    </div>

                                </div>

                                <div class="col-lg-12 col-md-12 mt-3 justify-content-center d-flex ">
                                    <button type="submit" class="btn btn-primary w-50">Submit</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>