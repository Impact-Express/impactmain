$(document).ready(function () {
    $("#drawer").kendoDrawer({
        template: "<ul>\
                    <li data-role='drawer-separator'></li> \
                    <li data-role='drawer-item' style='height: 18px;' class='k-state-selected'><i style='height: 18px;' class='fas fa-tachometer-alt'></i><span style='padding-left: 16px;'>Dashboard</span></li> \
                    <li data-role='drawer-item' style='height: 18px;'><i style='height: 18px;' class='fas fa-images'></i><span style='padding-left: 16px;'>Media</span></li> \
                    <li data-role='drawer-item' style='height: 18px; width: 18px;'><i style='height: 18px; padding-left: 3px; padding-right: 2px;' class='fas fa-thumbtack'></i><span style='padding-left: 16px;'>Posts</span></li> \
                    <li data-role='drawer-item' style='height: 18px;'><i style='height: 18px; padding-left: 3px;' class='fas fa-copy'></i><span style='padding-left: 16px;'>Pages</span></li> \
                    <li data-role='drawer-separator'></li> \
                  </ul>",
        mode: "push",
        mini: true,
        itemClick: function (e) {
            if(!e.item.hasClass("k-drawer-separator")){
                e.sender.drawerContainer.find("#drawer-content > div").addClass("hidden");
                e.sender.drawerContainer.find("#drawer-content").find("#" + e.item.find(".k-item-text").text()).removeClass("hidden");
            }
        },
        position: 'left',
        minHeight: 903,
    });
    $("#profileDropDown").kendoDropDownList({
        optionLabel: "Profile",
        dataTextField: "text",
        dataValueField: "value",
        dataSource: [
            { text: "Heading 1", value: 1 },
            { text: "Heading 2", value: 2 },
            { text: "Heading 3", value: 3 },
            { text: "Title", value: 4 },
            { text: "Subtitle", value: 5 }
        ]
    });
});



