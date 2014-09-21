var myApp = new Framework7();
 
var $$ = Dom7;
 
$$('.alert-text').on('click', function () {
    myApp.alert('Here goes alert text');
});
 
$$('.beta-warning').on('click', function () {
    myApp.alert('You are running a BETA Version of iChanger, Expect Bugs', 'Warning');
});
 
$$('.alert-text-title-callback').on('click', function () {
    myApp.alert('Here goes alert text', 'Custom Title!', function () {
        myApp.alert('Button clicked!')
    });
});
 
$$('.alert-text-callback').on('click', function () {
    myApp.alert('Here goes alert text', function () {
        myApp.alert('Button clicked!')
    });
});

