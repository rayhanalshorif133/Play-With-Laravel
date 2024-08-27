$(() => {
    var GETVALUES = $("#tagify").val();
    GETVALUES = GETVALUES.split(",");
    GETVALUES.length > 0 && GETVALUES.map((item) => {
        console.log(item);
    });

    $("#tagify").val('<span class="bg-gray-500 p-1">Hello</span>');
});