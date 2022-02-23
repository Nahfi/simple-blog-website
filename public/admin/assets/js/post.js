$(function() {


    'use_strict'


    $('#hide').hide()
        // $('#hide1').hide()
    $('#icon').show()




    $(document).on('change', '#im_tag', function(e) {


        $('#hide').show()

        let c = URL.createObjectURL(e.target.files[0])
        $('#hide').attr('src', c)
        $('#icon').hide()

        e.preventDefault()
    })
    $(document).on('change', '#im_tag_post', function(e) {


        // $('#hide1').show()

        let c = URL.createObjectURL(e.target.files[0])
        $('#hide1').attr('src', c)


        e.preventDefault()
    })




    $.ajaxSetup({


        headers: {


            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



        }



    })


    load()

    function load() {


        $.ajax({


            method: 'get',
            url: '/admin/post/load',
            async: false
        }).done(xd => {

            // console.log(xd)

            $('#posttb').html(xd)

        })



    }




    $(document).on('click', '#pub_post', function(e) {


        let v = $(this).attr('val')
        $.ajax({

            method: 'get',
            url: `/admin/post/pub/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })

        e.preventDefault()

    })
    $(document).on('click', '#unpub_post', function(e) {


        // alert('d')

        let v = $(this).attr('val')
            // alert(v)
        $.ajax({

            method: 'get',
            url: `/admin/post/unpub/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })

        e.preventDefault()

    })


    $(document).on('click', '#de_post', function(e) {




        let v = $(this).attr('val')


        $.ajax({

            method: 'get',
            url: `/admin/post/delete/${v}`,
            async: false
        }).done(xd => {





            load()


            // $('#tbb').html(xd)
        })


        e.preventDefault()


    });



    $(document).on('click', '#edit_post', function(e) {


        let v = $(this).attr('val')
        $.ajax({

            method: 'get',
            url: `/admin/post/edit/${v}`,
            async: false,
            dataType: 'json'
        }).done(xd => {





            $('#title').val(xd.data.title)
            $('#idp').val(xd.data.id)
            $('#d').text(xd.data.content)
            $('#hide1').attr('src', xd.data.feature_image)

            // console.log(xd.catid)



            for (let cd in xd.catid) {



                let mx = xd.catid[cd]
                    // console.log(mx)
                $(`#ck${mx}`).prop("checked", false);


            }
            for (let c in xd.cat) {



                let p = xd.cat[c].id
                $(`#ck${p}`).prop("checked", true);


            }


        })

        e.preventDefault()

    })













})