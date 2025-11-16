// https://developer.wordpress.org/block-editor/developers/filters/block-filters/
wp.domReady(() => {

	wp.blocks.registerBlockStyle('core/heading', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'light-back',
			label: 'Light Back',
			style_handle: 'chk-css' // currently isnt working on the admin side
		}
	]);

	wp.blocks.registerBlockStyle('core/list', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'stripes',
			label: 'Stripes',
			style_handle: 'chk-css' // currently isnt working on the admin side
		}
	]);
});