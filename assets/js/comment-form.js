// JavaScript Document
$(document).ready(function() {

    "use strict";

    $(".comment-form").submit(function(e) {
        e.preventDefault();
        var name = $(".f_name");
        var last_name = $(".last_name");
        var email = $(".email");
        var email1 = $(".email1");
        var number = $(".number");
        var number1 = $(".number1");
        var companyname = $(".cname");
        var skypeid = $(".skype_id");
        var address = $(".address");
        var country = $(".country");
        var province = $(".province");
        var postalcode = $(".postalcode");
        var msg = $(".message1");
        var flag = false;
        if (name.val() == "") {
            name.closest(".form-control").addClass("error");
            last_name.focus();
            flag = false;
            return false;
        } else {
            name.closest(".form-control").removeClass("error").addClass("success");
        }if (last_name.val() == "") {
            llast_name.closest(".form-control").addClass("error");
            last_name.focus();
            flag = false;
            return false;
        } else {
            last_name.closest(".form-control").removeClass("error").addClass("success");
        } if (email.val() == "") {
            email.closest(".form-control").addClass("error");
            email.focus();
            flag = false;
            return false;
        } else {
            email.closest(".form-control").removeClass("error").addClass("success");
        } if (number.val() == "") {
            number.closest(".form-control").addClass("error");
            number.focus();
            flag = false;
            return false;
        } else {
            number.closest(".form-control").removeClass("error").addClass("success");
        }if (companyname.val() == "") {
            companyname.closest(".form-control").addClass("error");
            companyname.focus();
            flag = false;
            return false;
        } else {
            companyname.closest(".form-control").removeClass("error").addClass("success");
        } if (address.val() == "") {
            address.closest(".form-control").addClass("error");
            address.focus();
            flag = false;
            return false;
        } else {
            address.closest(".form-control").removeClass("error").addClass("success");
        } if (country.val() == "") {
            country.closest(".form-control").addClass("error");
            country.focus();
            flag = false;
            return false;
        } else {
            country.closest(".form-control").removeClass("error").addClass("success");
        } if (province.val() == "") {
            province.closest(".form-control").addClass("error");
            province.focus();
            flag = false;
            return false;
        } else {
            province.closest(".form-control").removeClass("error").addClass("success");
        } if (postalcode.val() == "") {
            postalcode.closest(".form-control").addClass("error");
            postalcode.focus();
            flag = false;
            return false;
        } else {
            postalcode.closest(".form-control").removeClass("error").addClass("success");
        } if (msg.val() == "") {
            msg.closest(".form-control").addClass("error");
            msg.focus();
            flag = false;
            return false;
        } else {
            msg.closest(".form-control").removeClass("error").addClass("success");
            flag = true;
        }
var dataString = "name=" + name.val() + "&last_name=" + last_name.val() + "&email=" + email.val() + "&email1=" + email1.val() + "&phone=" + number.val() + "&phone1=" + number1.val() + "&companyname=" + companyname.val() +  "&skypeid=" + skypeid.val() + "&address=" + address.val() + "&country=" + country.val() + "&province=" + province.val() + "&postalcode=" + postalcode.val() + "&msg=" + msg.val();
        $(".loading").fadeIn("slow").html("Loading...");
        $.ajax({

            type: "POST",
            data: dataString,
            url: "https://magnusimmigration.com/Home/agent_form",
            cache: false,
               success: function (res) {
                $(".form-control").removeClass("success");
                    if(res == 'success') // Message Sent? Show the 'Thank You' message and hide the form
                    {
                      alert("Your Query Has Been sent. Our team will get back to you shortly.");
                        $('.loading').fadeIn('slow').html('<font color="#48af4b">Mail sent Successfully.</font>').delay(3000).fadeOut('slow');
                        $('.f_name').val('');
                        $(".last_name").val('');
                        $('.email').val('');
                        $('.email1').val('');
                        $('.number').val('');
                        $('.number1').val('');
                        $(".cname").val('');
                        $(".skypeid").val('');
                        $(".address").val('');
                        $(".country").val('');
                        $(".province").val('');
                        $(".postalcode").val('');
                        $('.message1').val('');
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
