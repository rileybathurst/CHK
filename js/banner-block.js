// console.log('more');
// console.log('banner ' + uncoverwp_script_vars.template_directory); // this only works on the backend

( function( blocks, editor, element ) {
	var el = element.createElement;
	var RichText = editor.RichText;

	blocks.registerBlockType( 'chk/banner-block', {
		title: 'Banner Block',
		icon: 'universal-access-alt',
		category: 'layout',

		attributes: {
			content: {
				type: 'array',
				source: 'children',
				selector: 'p',
			},
			alignment: {
				type: 'string',
				default: 'none',
			},
			more: {
				type: 'string',
				default: 'none',
			},
		},

		edit: function( props ) {
			var content = props.attributes.content;
			// var more = uncoverwp_script_vars.template_directory;
			
			function onChangeContent( newContent ) {
				props.setAttributes( { content: newContent } );
			}

			return el(
				RichText,
				{
					tagName: 'p',
					className: props.className,
					onChange: onChangeContent,
					value: content,
				}
			);
		},

		save: function( props ) {
			return el( RichText.Content, {
				tagName: 'div',
				value: 
					props.attributes.content +
					
					'<img src="https://canterburyhomekill.co.nz/wp-content/uploads/2019/09/CHK-logo.png" alt="img">' +
					'<img src="../img/pig.png" alt="pig" />' // +
					// alignment
					// props.attributes.alignment +
					// props.attributes.more // +
					// uncoverwp_script_vars.template_directory
					,
			} );
		},
	} );
}(
	window.wp.blocks,
	window.wp.editor,
	window.wp.element
) );
