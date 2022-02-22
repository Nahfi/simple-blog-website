$(function() {


    'use_strict'


    load()

    $.ajaxSetup({


        headers: {


            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



        }



    })



    function load() {


        $.ajax({


            method: 'get',
            url: '/admin/cat/load',
            async: false
        }).done(xd => {



            $('#tc').html(xd)
                // console.log(xd)


            // $('#tbb').html(xd)
        })

    }

    $(document).on('click', '#pub', function(e) {


        let v = $(this).attr('val')
        $.ajax({

            method: 'get',
            url: `/admin/cat/pub/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })

        e.preventDefault()

    })



    $(document).on('submit', '#fy', function(e) {




        $.ajax({



            method: 'post',
            url: '/admin/cat/update',
            data: new FormData(this),
            contentType: false,
            processData: false




        }).done(c => {


            // $('#na').val('');
            $('#mod').modal('hide')

            load();

        })









        e.preventDefault()
    })


    $(document).on('click', '#editx', function(e) {


        let v = $(this).attr('val')
            // alert(v)
        $.ajax({

            method: 'get',
            url: `/admin/cat/edit/${v}`,
            async: false,
            dataType: 'json'
        }).done(xd => {




            $('#na').val(xd.name)
            $('#idd').val(xd.id)

            // console.log(xd.name)

            load()


            // $('#tbb').html(xd)
        })

        e.preventDefault()

    })












    $(document).on('click', '#unpub', function(e) {


        // alert('d')

        let v = $(this).attr('val')
            // alert(v)
        $.ajax({

            method: 'get',
            url: `/admin/cat/unpub/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })

        e.preventDefault()

    })


    $(document).on('click', '#de', function(e) {




        let v = $(this).attr('val')


        $.ajax({

            method: 'get',
            url: `/admin/cat/delete/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })


        e.preventDefault()


    });


    $(document).on('submit', '#form_submit_cat', function(e) {





        $.ajax({



            method: 'post',
            url: '/admin/cat',
            data: new FormData(this),
            contentType: false,
            processData: false




        }).done(c => {


            $('#name').val('');
            $('#exampleModal').modal('hide')

            load();

        })




        e.preventDefault();


    })



})