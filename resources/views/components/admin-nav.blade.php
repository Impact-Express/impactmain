<div class="sidebar">
    <ul style="list-style-type: none;width: 100%;padding-inline-start: 0;margin-block-start: 0;">
        <i class='fas fa-info-circle sidebar-text'></i><span class='k-item-text' style='padding-left: 16px; font-size: 11px; overflow: hidden;'>Impact Express CMS System - v1</span>
        <li data-role='drawer-separator'><hr></li>
        <a class="white" style='overflow: hidden;' href='{{ route('admin') }}'>
            <li data-role='drawer-item' class='state-selected sidebar-item'>
                <i class='fas fa-tachometer-alt sidebar-text'></i>
                <span class='k-item-text' style='padding-left: 16px;'>Dashboard</span>
            </li>
        </a>
        {{-- Currently Work in Progress, trying to work out a way to make this work similar to wordpress.
            <li data-role='drawer-separator'><hr></li>
                <a class="white" style='overflow: hidden;' href='{{ route('admin-pages') }}'>
                    <li data-role='drawer-item' class="sidebar-item">
                        <i class='fas fa-copy sidebar-text'></i>
                        <span class='k-item-text' style='padding-left: 20px;'>Pages</span>
                    </li>
                </a>  
        --}}
        <li data-role='drawer-separator'><hr></li>
        <a class="white" style='overflow: hidden;' href='{{ route('admin-posts') }}'>
            <li data-role='drawer-item' class="sidebar-item">
                <i class='fas fa-thumbtack sidebar-text'></i>
                <span class='k-item-text' style='padding-left: 20px;'>Posts</span>
            </li>
        </a>
        <a class="white" style='overflow: hidden;' href='{{ route('admin-trash') }}'>
            <li data-role='drawer-item' class="sidebar-item">
                <i class='fas fa-trash-alt sidebar-text'></i>
                <span class='k-item-text' style='padding-left: 20px;'>Trashed Posts</span>
            </li>
        </a>
        <li data-role='drawer-separator'><hr></li> 
        <a class="white" style='overflow: hidden;' href='{{ route('admin-categories') }}'>
            <li data-role='drawer-item' class="sidebar-item">
                <i class="fas fa-copy sidebar-text"></i>
                <span class='k-item-text' style='padding-left: 20px;'>Categories</span>
            </li>
        </a>
        <a class="white" style='overflow: hidden;' href='{{ route('admin-tags') }}'>
            <li data-role='drawer-item' class="sidebar-item">
                <i class="fas fa-tags sidebar-text"></i>
                <span class='k-item-text' style='padding-left: 20px;'>Tags</span>
            </li>
        </a>
        @if (auth()->user()->isAdmin())
        <li data-role='drawer-separator'><hr></li>
        <a class="white" style='overflow: hidden;' href='{{route('admin-users')}}'>
            <li data-role='drawer-item' class="sidebar-item">
                <i class="fas fa-user sidebar-text"></i>
                <span class='k-item-text' style='padding-left: 20px;'>Users</span>
            </li>
        </a>
        @endif
        <a class="white" style='overflow: hidden;' href='{{route('admin-profile', auth()->user()->slug)}}'>
            <li data-role='drawer-item' class="sidebar-item">
                <i class="fas fa-user sidebar-text"></i>
                <span class='k-item-text' style='padding-left: 20px;'>User Profile</span>
            </li>
        </a>
        <li data-role='drawer-separator'><hr></li> 
        <a class="white" href='{{ route('home') }}'>
            <li class="sidebar-item">
                <i class='fas fa-external-link-alt sidebar-text'></i>
                <span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Back to the Main Site</span>
            </li>
        </a>
  </ul>
</div>