<sidebar id="sidebar">
  <div class="sidebarc">
    <p class="mt-5 ml-4" style="color: rgb(147, 146, 146)
                ;font-weight: inherit;">COLLECTIONS</p>
    <ul>
      <li>
        <a href="" class="text-success" type="button" data-toggle="modal" data-target="#modal">
          <i class="fa-solid fa-folder-plus mr-1" style="font-size: 20px;"></i> New Collection</a>
      </li>
      <li>
        <a href="{{ route('dashboard') }}" style="font-weight: bold;">
          <i class="fa-solid fa-folder mr-2" style="font-size: 20px; color: rgb(178, 175, 175);"></i>All Books
        </a>

        @if(!empty(App\Models\Collection::get()))
        @foreach(App\Models\Collection::get() as $collection)
        @php
        $count = App\Models\Collection::get();
        @endphp
        <a href="{{ route('collectionBooks', $collection->id)}}" style="font-weight: bold;">
          <i class="fa-solid fa-folder mr-2" style="font-size: 20px; color: rgb(178, 175, 175);"></i> {{$collection->name}}
        </a>
        @endforeach
        @endif
      </li>
      <li style="display: none;">
        <a class="user_sidebar" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <i class="fa fa-user"></i><span> Users </span> <i class="fa-solid fa-caret-down"></i>
        </a>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <ul>
              <li>
                <a href="{{ route('users') }}">
                  <i class="bi bi-circle"></i><span>All Users</span>
                </a>
              </li>
              <li>
                <a href="{{ route('roles') }}">
                  <i class="bi bi-circle"></i><span>Users Role</span>
                </a>
              </li>
              <li>
                <a href="{{ route('permissions') }}">
                  <i class="bi bi-circle"></i><span>Users Permissions</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </li>

    </ul>
  </div>
</sidebar>