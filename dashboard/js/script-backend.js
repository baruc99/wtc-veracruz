// JavaScript Document
var Custom_meta = {
	addMedia: function(click_media){
		var button = jQuery("#"+click_media);
		var send_attachment = wp.media.editor.send.attachment;
		wp.media.editor.send.attachment = function(props, attachment){
			button.html(attachment.filename);
			jQuery("input[name*='"+click_media+"']").val(attachment.url);
			
			if(attachment.url != ''){
				jQuery( '.remove-p-'+click_media).css('display', 'block');
			}else{
				jQuery( '.remove-p-'+click_media).css('display', 'none');
			}
			wp.media.editor.send.attachment = send_attachment;
		}
		wp.media.editor.open(button);
		return false;
		return this;
	},
	removeMedia: function(click_media){
		var button = jQuery("#"+click_media);
		jQuery(document).on('click', '#remove-'+click_media , function(event) {
			event.preventDefault();
			jQuery( "input[name*='"+click_media+"']" ).val('');
			button.html("Asignar archivo PDF");
			jQuery( '.remove-p-'+click_media).css('display', 'none');
		});
		return this;
	}
} 
jQuery( document ).ready(Custom_meta);
