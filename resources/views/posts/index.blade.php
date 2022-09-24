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
          <p class="h1">
            Posts
            <a href="{{route('posts.create')}}" class="btn btn-primary float-end "> Add </a>
          </p>
          <div class="continer">
            <div class="card border-primary mb-3">
              <div class="card-header bg-transparent border-primary">Added By : {{ Auth::user()->name }}</div>
              <div class="card-body text-success">
                <h5 class="card-title"> title</h5>
                <p class="card-text"> Description </p>

                <button type="button" class="btn-o btn-primary position-relative float-end "><span class="h4 text-danger"><i class=" bi bi-chat-heart"></i></span>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    4
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </button>
                &nbsp;
                <button type="button" class="btn-o btn-primary position-relative float-end me-3"><span class="h4 text-dark"><i class=" bi bi-chat-text"></i></span>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
                    4
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </button>

              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="form-floating">
                  <div class="row  align-items-center">
                    <div class="col-11">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    </div>
                    <div class="col-1">
                      <button type="button" class="btn-o btn-success"><span class="h2 text-success"><i class="bi bi-send"></i></span></button>
                    </div>
                  </div>
                </div>
              </div>

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>