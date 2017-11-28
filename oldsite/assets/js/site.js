//<![CDATA[ 
$(window).load(function () {
    //left column navitgation
    $('div.navHeader').click(function (accordian) {
        $(accordian.target).next('div').siblings('div.menuItems').slideUp(600);
        $(accordian.target).next('div').slideToggle(600);
    });
    //widget variation navigation -
	
	
	
    $('.widgetContainers div.widgetContainer').hide();
    $('.widgetContainers div.widgetContainer:first').show();
    $('.widgetNav ul.nav li:first').addClass('active');
    $('.widgetNav ul.nav li a').click(function () {
        $('.widgetNav ul.nav li').removeClass('active');
        $(this).parent().addClass('active');
        var currentTab = $(this).attr('href');
        $('.widgetContainers div.widgetContainer').hide();
        $(currentTab).show();
      
        return false;
    });
	    
	
	
	
	
	
	
    //content tabs navigation
    $('.contentTabs div.contentContainer').hide();
    $('.contentTabs div.contentContainer:first').show();
    $('.contentNav ul li:first').addClass('active');
    $('.contentNav ul li a').click(function () {
        $('.contentNav ul li').removeClass('active');
        $(this).parent().addClass('active');
        var currentTab1 = $(this).attr('href');
        $('.contentTabs div.contentContainer').hide();
        $(currentTab1).show();
        return false;
    });
    //copy to clipboard widget
    $(".codeSnippet").hover(

    function () {
        $(".copypaste").fadeIn(200);
    },

    function () {
        $(".copypaste").fadeOut(200);
    });
    //demo modal window resizing
    $('#accInq').modal({
        show: false,
        backdrop: true,
        keyboard: true
    }).css({
        'width': function () {
            return ($(document).width() * .9) + 'px';
        },
        'margin-left': function () {
            return -($(this).width() / 2);
        }
    });
    //widget variation navigation - large
    $('#widgetNavList').animate({
        marginLeft: "175"
    }, 000);
    $("#right-button").toggle(function () {
        $('#widgetNavList').animate({
            marginLeft: "0"
        }, 500);
        $("#right-button").html("hide options");
    }, function () {
        $('#widgetNavList').animate({
            marginLeft: "175"
        }, 500);
        $("#right-button").html("show options");
    });
}); //]]>