$('a.nice-link').each(function () {
    $(this).attr('data-text', $(this).text());
});

$(window).scroll(function(event) {
    var scrolledValue = $(window).scrollTop();
    var topElem = $('body');
    $('.scrollcounter').empty().append(scrolledValue+"px");

    
     if(scrolledValue >= 50){
       topElem.addClass('slim');
     }else{
       topElem.removeClass('slim');
     }
  });