$(document).ready(function () {
    $("#drawer").kendoDrawer({
        template: "<ul>\
                    <li data-role='drawer-separator'></li> \
                    <li data-role='drawer-item' style='height: 18px;' class='k-state-selected'><i style='height: 18px;' class='fas fa-tachometer-alt'></i><span class='k-item-text' style='padding-left: 16px;'>Dashboard</span></li> \
                    <li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-images'></i><span class='k-item-text' style='padding-left: 16px;'>Media</span></li> \
                    <li data-role='drawer-item' style='height: 18px; width: 18px;'><i style='height: 18px; padding-left: 3px; padding-right: 2px;' class='fas fa-thumbtack'></i><span class='k-item-text' style='padding-left: 16px;'>Posts</span></li> \
                    <li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-copy'></i><span class='k-item-text' style='padding-left: 16px;'>Pages</span></li> \
                    <li data-role='drawer-separator'></li> \
                    <li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-cog'></i><span class='k-item-text' style='padding-left: 16px;'>Settings</span></li> \
                    <li data-role='drawer-separator'></li> \
                    <li  style='padding: 12px 16px; color: inherit; line-height: 1.5; display: flex; flex-direction: row; flex-wrap: nowrap; height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-info-circle'></i><span class='k-item-text' style='padding-left: 16px; font-size: 12px; overflow: hidden;'>Impact Express CMS System - v0.1</span></li> \
                  </ul>",
        mode: "push",
        mini: true,
        itemClick: function (e) {
            if(!e.item.hasClass("k-drawer-separator")){
                e.sender.drawerContainer.find("#drawer-content > div").addClass("hidden");
            } else {
                e.sender.drawerContainer.find("#drawer-content").find("#" + e.item.find(".k-item-text").text()).removeClass("hidden");
            }
        },
        position: 'left',
        minHeight: 903,
    });
    $("#toolbar").kendoToolBar({
                items: [
                    { type: "button", icon: "menu", attributes: { "class": "k-flat" }, click: toggleDrawer},
                    { template: "<h3 style='margin-left: 20px;'>Impact Express</h3> " },

                ]
            });
});    



