$(function(){
    $('.num1').viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100,
        callbackFunction: function(){
            $('#num1').animateNumber({ number: $('#num1').data('num') },1500);
        }
    });$('.num2').viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100,
        callbackFunction: function(){
            $('#num2').animateNumber({ number: $('#num2').data('num') },1500);
        }
    });$('.num3').viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100,
        callbackFunction: function(){
            $('#num3').animateNumber({ number: $('#num3').data('num') },1500);
        }
    });$('.num4').viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100,
        callbackFunction: function(){
            $('#num4').animateNumber({ number: $('#num4').data('num') },1500);
        }
    });
});
