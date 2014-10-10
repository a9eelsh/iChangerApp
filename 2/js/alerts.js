var myApp = new Framework7();
 
var $$ = Dom7;
 
$$('.alert-text').on('click', function () {
    myApp.alert('Here goes alert text');
});
 
$$('.beta-warning').on('click', function () {
    myApp.alert('You are running a BETA Version of iChanger, Expect Bugs and Report Bugs', 'Warning');
});
 
$$('.already-installed').on('click', function () {
    myApp.alert('This icon is displayed for comparison only, to install the app visit AppStore', 'Notice');
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

$$('.no-mobile-view').on('click', function () {
    myApp.alert('This page is meant to be viewed on a Computer, some elements of the page might not work correctly', 'Warning');
});