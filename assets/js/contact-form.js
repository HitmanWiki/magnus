// JavaScript Document
$(document).ready(function() {

    "use strict";

    $(".contact-form").submit(function(e) {
        e.preventDefault();
        var name = $(".name");
        var email = $(".email");
        var subject = $(".subject");
        var phone = $(".phone");
        var msg = $(".message");
        var flag = false;
        if (name.val() == "") {
            name.closest(".form-control").addClass("error");
            name.focus();
            flag = false;
            return false;
        } else {
            name.closest(".form-control").removeClass("error").addClass("success");
        } if (email.val() == "") {
            email.closest(".form-control").addClass("error");
            email.focus();
            flag = false;
            return false;
        } else {
            email.closest(".form-control").removeClass("error").addClass("success");
        } if (subject.val() == "") {
            subject.closest(".form-control").addClass("error");
            subject.focus();
            flag = false;
            return false;
        } else {
            subject.closest(".form-control").removeClass("error").addClass("success");
        } if (msg.val() == "") {
            msg.closest(".form-control").addClass("error");
            msg.focus();
            flag = false;
            return false;
        } else {
            msg.closest(".form-control").removeClass("error").addClass("success");
            flag = true;
        }
                      var dataString = "name=" + name.val() + "&phone=" + phone.val() + "&email=" + email.val() + "&subject=" + subject.val() + "&msg=" + msg.val();

        $(".loading").fadeIn("slow").html("Loading...");
        $.ajax({
            type: "POST",
            data: dataString,
            url: "https://magnusimmigration.com/Home/contact_form",
            cache: false,
               success: function (d) {
                $(".form-control").removeClass("success");
                    if(d == 'success') // Message Sent? Show the 'Thank You' message and hide the form
					{
                      alert("Your Query Has Been sent. Our team will get back to you shortly.");
					    $('.loading').fadeIn('slow').html('<font color="#48af4b">Mail sent Successfully.</font>').delay(3000).fadeOut('slow');
						
						$('.name').val('');
						$('.email').val('');
						$('.phone').val('');
						$('.subject').val('');
						$('.message').val('');
						
					}
                         else
						 {
                        $('.loading').fadeIn('slow').html('<font color="#ff5607">Mail not sent.</font>').delay(3000).fadeOut('slow');
						 }
                                }
        });
        return false;
    });
    $("#reset").on('click', function() {
        $(".form-control").removeClass("success").removeClass("error");
    });
    
})
