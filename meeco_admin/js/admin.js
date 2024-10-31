$(document).ready(function(){
    $('.nav-link').on('click', function(e){
        e.preventDefault()
        $('.nav-link').removeClass('link-active')
        $(this).addClass('link-active')

        let url = $(this).attr('href')
        window.history.pushState({path: url}, '', url)
    })

    $('#users-link').on('click', function(e){
        e.preventDefault()
        viewUsers()
    })

    function viewUsers(){
        $.ajax({
            type: 'GET',
            url: '../users/view_users.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
                loadChart()
            }
        })
    }

});