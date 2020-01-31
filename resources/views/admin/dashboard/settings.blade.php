@extends('admin.app')
@section('title', 'Settings')
@section('content')
<div class="grid">
    <div id="toolbar"></div>
    <div id="drawer">
        <div class="drawer-content">
            <div id="Dashboard">
                <h3>a</h3>
            </div>
        </div>
    </div>
</div>
<script>
     $("#drawer").kendoDrawer({
        template: "<ul>\
            <li data-role='drawer-separator'></li> \
            <a style='overflow: hidden;' href='{{ route('admin') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-tachometer-alt'></i><span class='k-item-text' style='padding-left: 16px;'>Dashboard</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a style='overflow: hidden;' href='{{ route('admin-media') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-images'></i><span class='k-item-text' style='padding-left: 16px;'>Media</span></li></a> \
            <a style='overflow: hidden;' href='{{ route('admin-posts') }}'><li data-role='drawer-item' style='height: 18px; width: 18px;'><i style='height: 18px; padding-left: 3px; padding-right: 2px;' class='fas fa-thumbtack'></i><span class='k-item-text' style='padding-left: 16px;'>Posts</span></li></a> \
            <a style='overflow: hidden;' href='{{ route('admin-pages') }}'><li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-copy'></i><span class='k-item-text' style='padding-left: 16px;'>Pages</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a href='{{ route('admin-settings') }}'><li data-role='drawer-item' style='height: 18px;' class='k-state-selected'><i style='height: 18px; padding-left: 3px;' class='fas fa-cog'></i><span class='k-item-text' style='padding-left: 16px;'>Settings</span></li></a> \
            <li data-role='drawer-separator'></li> \
            <a href='{{ route('home') }}'><li style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-external-link-alt'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Back to the Main Site</span></li></a> \
            <li  style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-info-circle'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Impact Express CMS System - v0.1</span></li> \
      </ul>",
        mode: "push",
        mini: true,
        position: 'left',
        minHeight: 903,
    });
</script>
@endsection

