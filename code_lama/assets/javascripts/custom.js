$(document).ready(function () {
  $('#login-form').validate({
    rules: {
      email: {
        required: true
      },
      password: {
        required: true
      }
    },
    highlight: function (element) {
      $(element).closest('.form-group').addClass('error');
    },
    success: function (element) {
        $(element).closest('.form-group').removeClass('error');
    }
  });

  $('#registration-form').validate({
    rules: {
      name: {
        required: true
      },
      email: {
        required: true
      },
      password: {
        minlength: 6,
        required: true
      },
      phone: {
        required: true,
        minlength: 7,
        digits: true
      },
      address: {
        required: true
      }
    },
    highlight: function (element) {
      $(element).closest('.form-group').addClass('error');
    },
    success: function (element) {
        $(element).closest('.form-group').removeClass('error');
    }
  });

  $('#add-found').validate({
    rules: {
      kategori: {
        required: true
      },
      detail: {
        required: true
      },
      keterangan: {
        required: true
      },
      lokasi: {
        required: true
      },
    },
    highlight: function (element) {
      $(element).closest('.form-group').addClass('error');
    },
    success: function (element) {
        $(element).closest('.form-group').removeClass('error');
    }
  });

  $('#add-lost').validate({
    rules: {
      kategori: {
        required: true
      },
      detail: {
        required: true
      },
      keterangan: {
        required: true
      },
      lokasi: {
        required: true
      },
    },
    highlight: function (element) {
      $(element).closest('.form-group').addClass('error');
    },
    success: function (element) {
        $(element).closest('.form-group').removeClass('error');
    }
  });

  $('[data-toggle="tooltip"]').tooltip();
});

function expand_parameter_wrapper(){
    $("#parameter-wrapper").css("height","10em");
    $("#expand-parameter-trigger").fadeOut(300);
}

function hide_sidebar(){
    $("#sidebar").removeClass("slide-in");
    $("#show-sidebar-trigger").fadeIn(20);
    $("#hide-sidebar-trigger").addClass("hide");
    $("#overlay").fadeOut(100);
    $("body").removeClass("lock-scrolling");
}

function show_sidebar(){
    hide_sidebar();
    $("#sidebar").addClass("slide-in");
    $("#show-sidebar-trigger").fadeOut(0);
    $("#hide-sidebar-trigger").removeClass("hide");
    $("#overlay").fadeIn(250);
    $("body").addClass("lock-scrolling");
}

function getValue(obj){
	if (obj.value=="Dompet" || obj.value=="Uang") {
	$("#input-1").fadeOut(200);
// 	alert(obj.value);
	 }
	else {
		$("#input-1").fadeIn(200);
	}

}

function change_pwd_success(){
  $("#change_pwd_alert").removeClass("hide");
  $('#forgot-password').modal('toggle');
}
