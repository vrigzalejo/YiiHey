/**
 * Created by brigido.alejo on 8/31/2015.
 */
$(function () {
    // get the click of the create button
    $('#modalButton').click(function () {
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });
});
