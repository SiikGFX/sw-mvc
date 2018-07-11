/*jslint browser: true*/
/*global $, document*/

$(document).ready(function () {
    $("#select_type").on("change", function () {
        var type = $("#select_type").val();
        var panel = $("#" + type);
        var inputs = panel.find("input");

        $('.second-form').find("input").filter('[required]').prop('required', false);
        $(inputs).prop('required', true);

        $('.second-form').find("div").filter('[style]').css({
            display: 'none'
        });
        $(panel).css({
            display: 'block'
        });
    });

    $("#select_option").change(function () {
        var str = "";
        $("select option:selected").each(function () {
            str += $(this).text() + " ";
        });
        alert(str);
    });
});