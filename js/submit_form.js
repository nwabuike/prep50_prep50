$("#registerForm").validate({
  errorElement: "span",
  rules: {
    reg_name: { required: !0 },
    reg_email: { required: !0 },
    reg_address: { required: !0 },
    reg_contact: { required: !0 },
    reg_quantity: { required: !0 },
    reg_state: { required: !0 },
  },
  messages: {
    reg_name: { required: "Required." },
    reg_email: { required: "Required." },
    reg_contact: { required: "Required." },
    reg_address: { required: "Required." },
    reg_quantity: { required: "Required." },
    reg_state: { required: "Required." },
  },

  submitHandler: function (form) {
    $.ajax({
      url: "./php/genera.php",
      type: form.method,
      data: $(form).serialize(),
      success: function (response) {
          var response = JSON.parse(response);
        // console.log(response.id);
        //  $("#msgid").html("<h1>Submitting Form (External Routine)</h1>");
    //     // $("#answers").html(response);
        var qs = response.id;
        // console.log("====================================");
        // console.log(qs);
        // console.log("====================================");
        window.location.href = "./upbringing_confirmation.php?id=" + qs;
      },
    });
  },
});
	