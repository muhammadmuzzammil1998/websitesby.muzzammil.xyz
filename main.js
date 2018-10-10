$(document).ready(function () {
    var hidden = true;
    $("#switch").click(function () {
        $(".hidden").fadeToggle("slow")
        if (hidden)
            $("#button").css({
                marginLeft: "57%"
            })
        else $("#button").removeAttr('style');
        hidden = !hidden
    })
})
$("body").ready(function () {
    $("#lContainer").css({
        display: "none"
    })
})