/*
Author       : Dreamguys
Template Name: Doccure - Bootstrap Admin Template
Version      : 1.0
*/

(function($) {
    "use strict";


    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });





    $('#dt').DataTable();


    load()


    function load() {

        $.ajaxSetup({


            headers: {


                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



            }



        })

        $.ajax({


            method: 'get',
            url: '/load',
            async: false
        }).done(xd => {



            $('#tbb').html(xd)
        })

    }

    $(document).on('submit', '#form_submit', function(e) {





        $.ajaxSetup({


            headers: {


                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



            }



        })






        $.ajax({





            method: 'POST',
            url: '/sysyem/admin/user/store',
            data: new FormData(this),
            contentType: false,
            processData: false,



        }).done(e => {


            load();

        })


        // alert("hi")

        e.preventDefault();
    })

    $(document).on('click', '#ee', function(e) {



        let data = $(this).attr('val')
            // alert(data)

        $.ajaxSetup({


            headers: {


                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



            }



        })

        $.ajax({

            method: "get",
            url: `/edit/${data}`,
            dataType: "json"


        }).done(ci => {




            $('#na').val(ci.data.name)
            $('#em').val(ci.data.email)
            $('#idd').val(ci.data.id)

            $("#n1").prop("checked", false);
            $("#o1").prop("checked", false);

            if (ci.data.is_admin == 1) {

                $("#n1").prop("checked", true);



            }
            if (ci.data.is_admin == 0) {

                $("#o1").prop("checked", true);



            }








        })
        e.preventDefault()
    })


    $(document).on('click', '#dd', function(e) {


        let data = $(this).attr('val')

        $.ajaxSetup({


            headers: {


                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



            }



        })



        $.ajax({


            method: 'get',
            url: `/sysyem/admin/user/delete/${data}`,
            dataType: "json"



        }).done(e => {


            load()
        })


        e.preventDefault()
    })


    $(document).on('submit', '#f', function(e) {


        // alert('ok')
        $.ajaxSetup({


            headers: {


                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



            }



        })


        $.ajax({


            method: 'POST',
            url: '/sysyem/admin/user/update',
            data: new FormData(this),
            contentType: false,
            processData: false,



        }).done(e => {


            load()
        })

        e.preventDefault()

    })






    $(document).on('click', '#log', function(e) {





        $('#frm').submit()
        e.preventDefault();

    })

    $(document).on('click', '#edit', function(e) {






        let id = $(this).attr('edit')





        $.ajaxSetup({


            headers: {


                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



            }



        })

        $.ajax({

            method: "get",
            url: `/admin/role/edit/${id}`,
            dataType: "json"


        }).done(e => {






            $('#name').val(e.name)
            $('#id').val(e.id)

            $("#p").prop("checked", false);
            $("#o").prop("checked", false);
            $("#n").prop("checked", false);
            for (let i in e.permission) {



                if (e.permission[i] == 'super admin') {

                    $("#n").prop("checked", true);



                }
                if (e.permission[i] == 'user') {

                    $("#p").prop("checked", true);

                }
                if (e.permission[i] == 'post') {

                    $("#o").prop("checked", true);


                }

            }

        })





        e.preventDefault()
    })





















    // Variables declarations

    var $wrapper = $('.main-wrapper');
    var $pageWrapper = $('.page-wrapper');
    var $slimScrolls = $('.slimscroll');

    // Sidebar

    var Sidemenu = function() {
        this.$menuItem = $('#sidebar-menu a');
    };

    function init() {
        var $this = Sidemenu;
        $('#sidebar-menu a').on('click', function(e) {
            if ($(this).parent().hasClass('submenu')) {
                e.preventDefault();
            }
            if (!$(this).hasClass('subdrop')) {
                $('ul', $(this).parents('ul:first')).slideUp(350);
                $('a', $(this).parents('ul:first')).removeClass('subdrop');
                $(this).next('ul').slideDown(350);
                $(this).addClass('subdrop');
            } else if ($(this).hasClass('subdrop')) {
                $(this).removeClass('subdrop');
                $(this).next('ul').slideUp(350);
            }
        });
        $('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
    }

    // Sidebar Initiate
    init();

    // Mobile menu sidebar overlay

    $('body').append('<div class="sidebar-overlay"></div>');
    $(document).on('click', '#mobile_btn', function() {
        $wrapper.toggleClass('slide-nav');
        $('.sidebar-overlay').toggleClass('opened');
        $('html').addClass('menu-opened');
        return false;
    });

    // Sidebar overlay

    $(".sidebar-overlay").on("click", function() {
        $wrapper.removeClass('slide-nav');
        $(".sidebar-overlay").removeClass("opened");
        $('html').removeClass('menu-opened');
    });

    // Page Content Height

    if ($('.page-wrapper').length > 0) {
        var height = $(window).height();
        $(".page-wrapper").css("min-height", height);
    }

    // Page Content Height Resize

    $(window).resize(function() {
        if ($('.page-wrapper').length > 0) {
            var height = $(window).height();
            $(".page-wrapper").css("min-height", height);
        }
    });

    // Select 2

    if ($('.select').length > 0) {
        $('.select').select2({
            minimumResultsForSearch: -1,
            width: '100%'
        });
    }

    // Datetimepicker

    if ($('.datetimepicker').length > 0) {
        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY',
            icons: {
                up: "fa fa-angle-up",
                down: "fa fa-angle-down",
                next: 'fa fa-angle-right',
                previous: 'fa fa-angle-left'
            }
        });
        $('.datetimepicker').on('dp.show', function() {
            $(this).closest('.table-responsive').removeClass('table-responsive').addClass('temp');
        }).on('dp.hide', function() {
            $(this).closest('.temp').addClass('table-responsive').removeClass('temp')
        });
    }

    // Tooltip

    if ($('[data-toggle="tooltip"]').length > 0) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // Datatable

    if ($('.datatable').length > 0) {
        $('.datatable').DataTable({
            "bFilter": false,
        });
    }

    // Email Inbox

    if ($('.clickable-row').length > 0) {
        $(document).on('click', '.clickable-row', function() {
            window.location = $(this).data("href");
        });
    }

    // Check all email

    $(document).on('click', '#check_all', function() {
        $('.checkmail').click();
        return false;
    });
    if ($('.checkmail').length > 0) {
        $('.checkmail').each(function() {
            $(this).on('click', function() {
                if ($(this).closest('tr').hasClass('checked')) {
                    $(this).closest('tr').removeClass('checked');
                } else {
                    $(this).closest('tr').addClass('checked');
                }
            });
        });
    }

    // Mail important

    $(document).on('click', '.mail-important', function() {
        $(this).find('i.fa').toggleClass('fa-star').toggleClass('fa-star-o');
    });

    // Summernote

    if ($('.summernote').length > 0) {
        $('.summernote').summernote({
            height: 200, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });
    }

    // Product thumb images

    if ($('.proimage-thumb li a').length > 0) {
        var full_image = $(this).attr("href");
        $(".proimage-thumb li a").click(function() {
            full_image = $(this).attr("href");
            $(".pro-image img").attr("src", full_image);
            $(".pro-image img").parent().attr("href", full_image);
            return false;
        });
    }

    // Lightgallery

    if ($('#pro_popup').length > 0) {
        $('#pro_popup').lightGallery({
            thumbnail: true,
            selector: 'a'
        });
    }

    // Sidebar Slimscroll

    if ($slimScrolls.length > 0) {
        $slimScrolls.slimScroll({
            height: 'auto',
            width: '100%',
            position: 'right',
            size: '7px',
            color: '#ccc',
            allowPageScroll: false,
            wheelStep: 10,
            touchScrollStep: 100
        });
        var wHeight = $(window).height() - 60;
        $slimScrolls.height(wHeight);
        $('.sidebar .slimScrollDiv').height(wHeight);
        $(window).resize(function() {
            var rHeight = $(window).height() - 60;
            $slimScrolls.height(rHeight);
            $('.sidebar .slimScrollDiv').height(rHeight);
        });
    }

    // Small Sidebar

    $(document).on('click', '#toggle_btn', function() {
        if ($('body').hasClass('mini-sidebar')) {
            $('body').removeClass('mini-sidebar');
            $('.subdrop + ul').slideDown();
        } else {
            $('body').addClass('mini-sidebar');
            $('.subdrop + ul').slideUp();
        }
        setTimeout(function() {
            mA.redraw();
            mL.redraw();
        }, 300);
        return false;
    });
    $(document).on('mouseover', function(e) {
        e.stopPropagation();
        if ($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
            var targ = $(e.target).closest('.sidebar').length;
            if (targ) {
                $('body').addClass('expand-menu');
                $('.subdrop + ul').slideDown();
            } else {
                $('body').removeClass('expand-menu');
                $('.subdrop + ul').slideUp();
            }
            return false;
        }
    });


})(jQuery);