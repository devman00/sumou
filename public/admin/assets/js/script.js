$(document).ready(function () {
    const activeMenu = $('.submenu-item.active');
    if(activeMenu.length)
    {
        activeMenu.parents('.submenu').addClass('active');
        activeMenu.parents('li.has-sub').addClass('active');
    }
});
