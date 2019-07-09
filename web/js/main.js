
$( "#btn_add_new_text" ).click(function() {
    var text = $('#input_add_new_text').val();
    $('#body2').text(text);
    $('#body2').css('margin-top','15%');
    $('#body2').css('margin-left','25%'),
        $('#body2').css('margin-right','25%')
});
$("#fontFamily").change(function() {
    var tmp = $(this).children(":selected").attr("title");
    $('#body2').css("font-family", $(this).val());
    $('#span_family').text($(this).val());
    $('#download').attr('href');
    $('#download').attr('href',tmp);
});
$("#size").change(function() {
    $('#body2').css("font-size", $(this).val()+'px');
    $('#span_size').text($(this).val());
});
$("#weight").change(function () {
    $('#body2').css("font-weight",$(this).val());
    $('#span_weight').text($(this).val());
});
$("#style").change(function(){
    $("#body2").css("font-style",$(this).val());
    $('#span_style').text($(this).val());
});

$('#colorSelector').ColorPicker({
    color: '#0000ff',
    onShow: function (colpkr) {
        $(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        $(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        $('#span_color').text('#' +hex);
        $('#body2 ').css('color',  '#' + hex);
    }
});


