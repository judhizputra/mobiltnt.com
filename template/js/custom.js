"use strict";

$('.btn').button();

$("[rel='tooltip']").tooltip();

$('.form-group').each(function() {
    var self = $(this),
        input = self.find('input');

    input.focus(function() {
        self.addClass('form-group-focus');
    })

    input.blur(function() {
        if (input.val()) {
            self.addClass('form-group-filled');
        } else {
            self.removeClass('form-group-filled');
        }
        self.removeClass('form-group-focus');
    });
});

$('.typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 3,
    limit: 8
}, {
    source: function(q, cb) {
        return $.ajax({
            dataType: 'json',
            type: 'get',
            url: 'http://gd.geobytes.com/AutoCompleteCity?callback=?&q=' + q,
            chache: false,
            success: function(data) {
                var result = [];
                $.each(data, function(index, val) {
                    result.push({
                        value: val
                    });
                });
                cb(result);
            }
        });
    }
});


$('input.date-pick, .input-daterange, .date-pick-inline').datepicker({
    todayHighlight: true
});

$('input.date-pick, .input-daterange input[name="start"]').datepicker('setDate', 'today');
$('.input-daterange input[name="end"]').datepicker('setDate', '+7d');

$('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})

$('input.date-pick-years').datepicker({
    startView: 2
});

$(document).ready(
    function() {

    $('html').niceScroll({
        cursorcolor: "#000",
        cursorborder: "0px solid #fff",
        railpadding: {
            top: 0,
            right: 0,
            left: 0,
            bottom: 0
        },
        cursorwidth: "10px",
        cursorborderradius: "0px",
        cursoropacitymin: 0.2,
        cursoropacitymax: 0.8,
        boxzoom: true,
        horizrailenabled: false,
        zindex: 9999
    });

    // footer always on bottom
    var docHeight = $(window).height();
	   var footerHeight = $('#main-footer').height();
	   var footerTop = $('#main-footer').position().top + footerHeight;
	   
	   if (footerTop < docHeight) {
		$('#main-footer').css('margin-top', (docHeight - footerTop) + 'px');
	   }
    }
);


$('.nav-drop').dropit();

$('.i-check, .i-radio').iCheck({
    checkboxClass: 'i-check',
    radioClass: 'i-radio'
});

$('.form-group-select-plus').each(function() {
    var self = $(this),
        btnGroup = self.find('.btn-group').first(),
        select = self.find('select');
    btnGroup.children('label').last().click(function() {
        btnGroup.addClass('hidden');
        select.removeClass('hidden');
    });
});

$(function() {
    $('#ri-grid').gridrotator({
        rows: 2,
        columns: 6,
        animType: 'random',
        animSpeed: 1200,
        interval: 1200,
        step: 'random',
        preventClick: false,
        maxStep: 2,
        w1366: {
            rows: 2,
            columns: 4
        },
        w992: {
            rows: 4,
            columns: 4
        },
        w768: {
            rows: 4,
            columns: 3
        },
        w480: {
            rows: 4,
            columns: 2
        }
    });

});

// Lightbox iframe
$('.popup-form').magnificPopup({
    removalDelay: 500,
    closeBtnInside: true,
    callbacks: {
        beforeOpen: function() {
            this.st.mainClass = this.st.el.attr('data-effect');
        }
    },
    midClick: true
});

/* Custom */
$(document).ready(function(){
	$("#register-form").submit(function(e){
		e.preventDefault();
		$(".register-step1").hide();
		$(".register-step2").show();
	});
	
	$("#show-forgot").click(function(e){
		$(".login-form").hide();
		$(".forgot-form").show();
	});
	
	$("#show-login").click(function(e){
		$(".login-form").show();
		$(".forgot-form").hide();
	});
});
/* Custom */