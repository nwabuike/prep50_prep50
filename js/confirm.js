$("#deliveryForm").validate({
  errorElement: "span",
  rules: {
    dateOfdev: { required: !0 },
  },
  messages: {
    dateOfdev: { required: "Required." },
  },

  submitHandler: function (form) {
    $.ajax({
      url: "./php/confirm_order.php",
      type: "POST",
      data: $(form).serialize(),
      success: function (response) {
        var response = JSON.parse(response);
        // console.log(response.id);
        //  $("#msgid").html("<h1>Submitting Form (External Routine)</h1>");
        //     // $("#answers").html(response);
        window.location.href = "../thank-you.html";
      },
    });
  },
});
