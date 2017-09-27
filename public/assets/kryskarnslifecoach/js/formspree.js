$('#formspree').submit(function(e) {
    e.preventDefault();
    // Replace text
    $('#formspree_submit').val("Sending ...");

    // Collect form data
    var values = {};
    $.each($('#formspree').serializeArray(), function(i, field) {
        values[field.name] = field.value;
    });

    // Send form data
    $.ajax({
        url: "https://formspree.io/krys@kryskarnslifecoach.com", 
        method: "POST",
        data: {
            Name: values.Name,
            Email: values.Email,
            Phone: values.Phone,
            Message: values.Message
        },
        dataType: "json",
    })
    .done(function() {
        // Replace the form with thank you
        $('#formspree_submit').val("Sent!");
    });
})