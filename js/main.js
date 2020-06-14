$(document).ready(function () {
    "use strict";
    // form-search-dashboard
    // search-toggler-admin

    // Common 'X' used in every toggler (dropdown,etc)
    const $closeIcon = '<span class="closeIcon" style="font-size:1.125rem;font-weight:600;">X</span>';

    // Toggle search input box  in tobpar on click search icon
    $('#search-toggler-admin').click(function () {
        $('#form-search-dashboard').toggleClass('show');
        $('.topbar').toggleClass('search-opened');
        if (!($('#form-search-dashboard').hasClass('show'))) {
            $(this).html('<i class="fas fa-search"></i>');
        } else {
            // $(this).html('<i class="far fa-times-circle"></i>');
            // $(this).html('<i class="fas fa-times" style="font-size:1.125rem;"></i>');
            $(this).html($closeIcon);
        }
    })
    // Add Tranisiton delay to topbar nav items
    $(".topbar-nav-dropdown").not(".default-drop").children(".topbar-nav-dropdown-item").each(function (e) {
        $(this).css('transition-delay', (String(e * 50) + 'ms'));
    });

    // Toggle Dropdown of topbar on click tobar icons
    $("#topbar-user-dropdown-toggler ,#topbar-menu-dropdown-toggler ,#topbar-notify-dropdown-toggler").each(function () {
        $(this).click(function () {
            $('.topbar-nav-dropdown').not($(this).siblings('.topbar-nav-dropdown')).removeClass("show")
            $(".topbar-nav-btn").not(this).removeClass("shown")
            $(this).toggleClass("shown");
            $(this).siblings('.topbar-nav-dropdown').toggleClass("show");
        });
    });

    // Limit Notification Links in Dropdown upto 3 (useless if already done via PHP)
    const $limit = 3;
    const $notificatonLists = $("#notification-drop > li").not(".see-more-btn");
    if ($notificatonLists.length > $limit) {
        $notificatonLists.slice($limit, $notificatonLists.length).hide();
    }

    if (window.innerHeight <= 400) {
        $(".topbar-nav-dropdown").each(function () {
            if ($(this).height() > 200) {
                console.log("HEIGHT");

                $(this).height(220);
            }
        });
    } else {
        $(".topbar-nav-dropdown").each(function () {
            if ($(this).height() > 200) {
                $(this).height("auto");
            }
        });
    }

    $(window).resize(function () {
        if (window.innerHeight <= 400) {
            $(".topbar-nav-dropdown").each(function () {
                if ($(this).height() > 200) {
                    console.log("HEIGHT");

                    $(this).height(200);
                }
            });
        } else {
            $(".topbar-nav-dropdown").each(function () {
                if ($(this).height() > 200) {
                    $(this).height("auto");
                }
            });
        }
    });
    /* 
        Function for adding dynamic content
        @params : Object with property title,body,action
        @param title :String,
        @param body :HTML Element (use space for multiple),
        @param action :Function,
    */
    function handleDynamicModal(content = { title: "A Heading", body: "<p>This is a para</p>", action: function () { }, actionButtonText: "Action" }) {
        const $modalDynamic = $("#modal-dynamic"),
            $modalTitle = $("#modal-dynamic-title"),
            $modalBody = $("#modal-dynamic-body"),
            $modalActionBtn = $("#modal-dynamic-actionBtn");
        $($modalTitle).html(content.title);
        $($modalBody).html(content.body);
        $($modalActionBtn).html(content.actionButtonText);
        $($modalActionBtn).click(content.action);
        $($modalDynamic).modal("toggle");
    }
    // Usage
    $("#toggleDynamicModal").click(function () {
        handleDynamicModal({
            title: "My Own Title",
            body: '<p>This is a para.</p> <a href="#">This is a link</a>',
            action: function () {
                $("#modal-dynamic-title").html("Changed Title On Click");
            },
            actionButtonText: "Click for magic"
        });
    });
    // Sidenav Toggle
    // Close on click outiside
    $('html').click(function () {
        $("#sidenav").removeClass("expanded");
        $('#section-right').removeClass("sidnav-opened");
    });
    $("#sidenav-toggler,#sidenav-toggler-mobile").click(function (e) {
        e.stopPropagation();
        $('#section-right').toggleClass("sidnav-opened");
        $("#sidenav").toggleClass("expanded");
    });

    // Toast
    $('#toast').toast('show');
});