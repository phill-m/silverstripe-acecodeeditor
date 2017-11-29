(function($) {
	$.entwine('ss', function($) {
		$('textarea.aceeditor').entwine({
			onmatch: function(e) {
				var textarea	= this,
					editor_id	= this.attr('id') + '_Editor',
					editor		= ace.edit(editor_id);

				textarea.hide();
				editor.setTheme("ace/theme/" + textarea.data('theme'));
				editor.getSession().setMode("ace/mode/" + textarea.data('mode'));
				editor.getSession().setValue(textarea.val());
				editor.getSession().setUseWrapMode(true);
				editor.getSession().on('change', function(){
					textarea.val(editor.getSession().getValue());
				});
				$('#'+editor_id).css('min-height',
					(Math.ceil(editor.renderer.lineHeight) * textarea.attr('rows')) + 'px'
				);
			}
		});
	});
})(jQuery);