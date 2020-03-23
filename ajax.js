$(document).ready(function () {
    $("#submit").click(
        function () {
            sendAjaxForm('#result_form', 'ajax_form', 'access.php');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url: url,
        type: "GET",
        dataType: "html",
        data: $("#" + ajax_form).serialize(),
        success: function (response) {
            result = $.parseJSON(response);
            $(result_form).html(response);
        },
    });
}