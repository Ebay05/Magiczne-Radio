( function( api ) {

	// Extends our custom "radio-station" section.
	api.sectionConstructor['radio-station'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );