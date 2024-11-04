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
    $('#accounts-link').on('click', function(e){
        e.preventDefault()
        viewAccounts()
    })

    function viewUsers(){
        $.ajax({
            type: 'GET',
            url: '../users/view-users.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
            }
        })
    }

    function viewAccounts(){
        $.ajax({
            type: 'GET',
            url: '../accounts/view-accounts.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
            }
        })
    }



    let url = window.location.href;
    if (url.endsWith('dashboard')){
        $('#dashboard-link').trigger('click')
    }else if (url.endsWith('users')){
        $('#users-link').trigger('click')
    }else if (url.endsWith('accounts')){
        $('#accounts-link').trigger('click')
    }else{
        $('#dashboard-link').trigger('click')
    }
});