$(document).ready(function(){
    //Side Nav
    $('.nav-link').on('click', function(e){
        e.preventDefault()
        $('.nav-link').removeClass('link-active')
        $(this).addClass('link-active')

        let url = $(this).attr('href')
        window.history.pushState({path: url}, '', url)
    })
    $('#dashboard-link').on('click', function(e){
        e.preventDefault()
        viewDashboard()
    })
    $('#users-link').on('click', function(e){
        e.preventDefault()
        viewUsers()
    })
    $('#transactions-link').on('click', function(e){
        e.preventDefault()
        viewTransactions()
    })
    $('#support-tickets-link').on('click', function(e){
        e.preventDefault()
        viewSupportTickets()
    })
    $('#accounts-link').on('click', function(e){
        e.preventDefault()
        viewAccounts()
    })
    $('#contacts-link').on('click', function(e){
        e.preventDefault()
        viewContacts()
    })
    $('#logs-link').on('click', function(e){
        e.preventDefault()
        viewLogs()
    })
    $('#statistics-link').on('click', function(e){
        e.preventDefault()
        viewStatistics()
    })
    $('#subscriptions-link').on('click', function(e){
        e.preventDefault()
        viewSubscriptions()
    })
    $('#settings-link').on('click', function(e){
        e.preventDefault()
        viewSettings()
    })
    function viewDashboard(){
        $.ajax({
            type: 'GET',
            url: '../dashboard/dashboard.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
                renderChart();
            }
        })
    }
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
    function viewTransactions(){
        $.ajax({
            type: 'GET',
            url: '../transactions/transactions.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
            }
        })
    }
    function viewSupportTickets(){
        $.ajax({
            type: 'GET',
            url: '../support-tickets/support-tickets.php',
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
    function viewContacts(){
        $.ajax({
            type: 'GET',
            url: '../contacts/contacts.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
            }
        })
    }
    function viewLogs(){
        $.ajax({
            type: 'GET',
            url: '../logs/logs.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
            }
        })
    }
    function viewStatistics(){
        $.ajax({
            type: 'GET',
            url: '../statistics/statistics.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
                renderChart();
            }
        })
    }
    function viewSubscriptions(){
        $.ajax({
            type: 'GET',
            url: '../subscriptions/subscriptions.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
            }
        })
    }
    function viewSettings(){
        $.ajax({
            type: 'GET',
            url: '../settings/settings.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
            }
        })
    }

    function renderChart() {
        const xValues = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        const ctx = document.getElementById("myChart").getContext("2d");
    
        // Destroy old chart instance if it exists
        if (chartInstance) {
            chartInstance.destroy();
        }
    
        // Create new chart instance
        chartInstance = new Chart(ctx, {
            type: "line",
            data: {
                labels: xValues,
                datasets: [
                    {   
                        label:"Sales",
                        data: [800, 1300, 1350, 1060, 800, 600, 1330],
                        borderColor: "blue",
                        fill: true

                    }, 
                    {   
                        
                        label:"API Cost",
                        data: [500, 800, 760, 600, 500, 680, 400],
                        borderColor: "red",
                        fill: true
                    }, 
                    {   
                        label:"Profit",
                        data: [300, 500, 590, 200, 100, 620, 150],
                        borderColor: "green",
                        fill: true
                    }
                ]
            }
        });
    }
    
    


    let url = window.location.href;
    if (url.endsWith('dashboard')){
        $('#dashboard-link').trigger('click')
    }else if (url.endsWith('users')){
        $('#users-link').trigger('click')
    }else if (url.endsWith('transactions')){
        $('#transactions-link').trigger('click')
    }else if (url.endsWith('support-tickets')){
        $('#support-tickets-link').trigger('click')
    }else if (url.endsWith('accounts')){
        $('#accounts-link').trigger('click')
    }else if (url.endsWith('contacts')){
        $('#contacts-link').trigger('click')
    }else if (url.endsWith('logs')){
        $('#logs-link').trigger('click')
    }else if (url.endsWith('statistics')){
        $('#statistics-link').trigger('click')
    }else if (url.endsWith('subscriptions')){
        $('#subscriptions-link').trigger('click')
    }else if (url.endsWith('settings')){
        $('#settings-link').trigger('click')
    }else{
        $('#dashboard-link').trigger('click')
    }

    //Top Nav
    $('.dropdown-item').on('click', function(e){
        e.preventDefault()
        $('.dropdown-item').removeClass('link-active')
        $(this).addClass('link-active')

        let url = $(this).attr('href')
        window.history.pushState({path: url}, '', url)
    })
    $('#profile-link').on('click', function(e){
        e.preventDefault()
        viewProfile()
    })
    function viewProfile(){
        $.ajax({
            type: 'GET',
            url: '../profiles/profile.php',
            dataType: 'html',
            success: function(response){
                $('.content-page').html(response)
            }
        })
    }
    let top_url = window.location.href;
    if (top_url.endsWith('profile')){
        $('#profile-link').trigger('click')
    }
});


