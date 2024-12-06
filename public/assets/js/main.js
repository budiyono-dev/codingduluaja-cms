$('#btnShowPassword').click(function(e){
    const pwd = $('#txtLoginPwd');
    if (e.target.innerHTML === 'Show') {
        pwd.attr('type', 'text');
        e.target.innerHTML = 'Hide'
    } else {
        pwd.attr('type', 'password');
        e.target.innerHTML = 'Show';
    }
});

$('#toggleDarkMode').change(function(){
    $('body').toggleClass('bg-theme-dark');
});
