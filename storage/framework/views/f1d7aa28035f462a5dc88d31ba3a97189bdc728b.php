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
        <a href="#" style="font-weight: bold;">
          <i class="fa-solid fa-folder mr-2" style="font-size: 20px; color: rgb(178, 175, 175);"></i>All Books</a>
      </li>


      <li>
        <a class="user_sidebar" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa fa-user"></i><span> Users </span> <i class="fa-solid fa-caret-down"></i>
        </a>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <ul>
              <li>
                <a href="<?php echo e(route('users')); ?>">
                  <i class="bi bi-circle"></i><span>All Users</span>
                </a>
              </li>
              <li>
                <a href="<?php echo e(route('roles')); ?>">
                  <i class="bi bi-circle"></i><span>Users Role</span>
                </a>
              </li>
              <li>
                <a href="<?php echo e(route('permissions')); ?>">
                  <i class="bi bi-circle"></i><span>Users Permissions</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </li>

    </ul>
  </div>
</sidebar><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/layouts/partials/_sidebar.blade.php ENDPATH**/ ?>