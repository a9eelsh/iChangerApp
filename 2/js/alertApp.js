var myApp = new Framework7();
 
var $$ = Dom7;
 
$$('.alert-text').on('click', function () {
    myApp.alert('Here goes alert text');
});
 
$$('.beta-warning').on('click', function () {
    myApp.alert('<iframe src="http://nlalonde.github.com/commits-widget/index.html?owner=nlalonde&repo=nlalonde.github.com&limit=6&width=500&height=200" width="502px" height="202px"></iframe>', 'Custom Title!');
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

