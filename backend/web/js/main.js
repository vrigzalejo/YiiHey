/**
 * Created by brigido.alejo on 8/31/2015.
 */
(function ($) {
    'use strict';
    // get the click of the create button
    $('#modalButton').click(function () {
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });
}(jQuery));
