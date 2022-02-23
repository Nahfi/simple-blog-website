$(function() {


    'use_strict'



    load()

    function load() {


        $.ajax({


            method: 'get',
            url: '/admin/tag/load',
            async: false
        }).done(xd => {



            $('#tagtb').html(xd)
                // console.log(xd)


            // $('#tbb').html(xd)
        })



    }


    $.ajaxSetup({


        headers: {


            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



        }



    })




    $(document).on('submit', '#form_tag', function(e) {





        $.ajax({



            method: 'post',
            url: '/admin/tag',
            data: new FormData(this),
            contentType: false,
            processData: false




        }).done(c => {


            $('#name_tag').val('');
            $('#exampleModal').modal('hide')

            load();

        })




        e.preventDefault();


    })
    $(document).on('click', '#pub_tag', function(e) {


        let v = $(this).attr('val')
        $.ajax({

            method: 'get',
            url: `/admin/tag/pub/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })

        e.preventDefault()

    })
    $(document).on('click', '#unpub_tag', function(e) {


        // alert('d')

        let v = $(this).attr('val')
            // alert(v)
        $.ajax({

            method: 'get',
            url: `/admin/tag/unpub/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })

        e.preventDefault()

    })
    $(document).on('click', '#de_tag', function(e) {




        let v = $(this).attr('val')


        $.ajax({

            method: 'get',
            url: `/admin/tag/delete/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })


        e.preventDefault()


    });
    $(document).on('click', '#edit_tag', function(e) {


        let v = $(this).attr('val')
            // alert(v)
        $.ajax({

            method: 'get',
            url: `/admin/tag/edit/${v}`,
            async: false,
            dataType: 'json'
        }).done(xd => {




            $('#nx').val(xd.name)
            $('#idx').val(xd.id)

            // console.log(xd.name)

            load()


            // $('#tbb').html(xd)
        })

        e.preventDefault()

    })



    $(document).on('submit', '#tag_update', function(e) {




        $.ajax({



            method: 'post',
            url: '/admin/tag/update',
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


})