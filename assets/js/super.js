// (function($) {
//     $(document).on('elementor/controls/repeater/after_add_row', function(event, widget, newRow) {
//         var addButton = $(widget.$element).find('.elementor-repeater-add');

//         // Update the button text
//         addButton.text('New Button Text');
//     });
// })(jQuery);


// (function($) {
//     $(document).on('click', '.elementor-repeater-add', function() {
//         var addButton = $(this);

//         // Update the button text
//         addButton.text('New Button Text');
//     });
// })(jQuery);


(function($) {
    $(document).on('elementor:init', function() {
        elementor.hooks.addAction('panel/open_editor/widget/price_table/price_table_item/add_item', function(panel, model, view) {
            var addButton = view.$el.find('.elementor-repeater-add');
            addButton.text('<?php echo esc_js( __( "Add Service", "elementor-addon" ) ); ?>');
        });
    });
})(jQuery);
