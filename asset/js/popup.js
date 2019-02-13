$( document ).on( "pagecreate", "#demo-page", function() {
    $( ".cars" ).on( "click", function() {
        var target = $( this ),
            brand = target.find( "h2" ).html(),
            model = target.find( "p" ).html(),
            short = target.attr( "id" ),
            closebtn = '<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>',
            header = '<div data-role="header"><h2>' + brand + ' ' + model + '</h2></div>',
            img = '<img src="../_assets/img/' + short + '.jpg" alt="' + brand + '" class="photo">',
            popup = '<div data-role="popup" id="popup-' + short + '" data-short="' + short +'" data-theme="none" data-overlay-theme="a" data-corners="false" data-tolerance="15"></div>';
        // Create the popup.
        $( header )
            .appendTo( $( popup )
                .appendTo( $.mobile.activePage )
                .popup() )
            .toolbar()
            .before( closebtn )
            .after( img );
        // Wait with opening the popup until the popup image has been loaded in the DOM.
        // This ensures the popup gets the correct size and position
        $( ".photo", "#popup-" + short ).load(function() {
            // Open the popup
            $( "#popup-" + short ).popup( "open" );
            // Clear the fallback
            clearTimeout( fallback );
        });
        // Fallback in case the browser doesn't fire a load event
        var fallback = setTimeout(function() {
            $( "#popup-" + short ).popup( "open" );
        }, 2000);
    });
    // Set a max-height to make large images shrink to fit the screen.
    $( document ).on( "popupbeforeposition", ".ui-popup", function() {
        var image = $( this ).children( "img" ),
            height = image.height(),
            width = image.width();
        // Set height and width attribute of the image
        $( this ).attr({ "height": height, "width": width });
        // 68px: 2 * 15px for top/bottom tolerance, 38px for the header.
        var maxHeight = $( window ).height() - 68 + "px";
        $( "img.photo", this ).css( "max-height", maxHeight );
    });
    // Remove the popup after it has been closed to manage DOM size
    $( document ).on( "popupafterclose", ".ui-popup", function() {
        $( this ).remove();
    });
});