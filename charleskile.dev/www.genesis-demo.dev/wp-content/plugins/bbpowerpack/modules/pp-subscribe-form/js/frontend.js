( function( $ ) {

	PPSubscribeForm = function( settings )
	{
		this.settings	= settings;
		this.nodeClass	= '.fl-node-' + settings.id;
		this.form 		= $( this.nodeClass + ' .pp-subscribe-form' );
		this.button		= this.form.find( 'a.fl-button' );
		this._init();
	};

	PPSubscribeForm.prototype = {

		settings	: {},
		nodeClass	: '',
		form		: null,
		button		: null,

		_init: function()
		{
			this.button.on( 'click', $.proxy( this._submitForm, this ) );
			this.form.find( 'input[type="email"]' ).on( 'keypress', $.proxy( this._onEnterKey, this) );
		},

		_submitForm: function( e )
		{
			var postId      	= this.form.closest( '.fl-builder-content' ).data( 'post-id' ),
				templateId		= this.form.data( 'template-id' ),
				templateNodeId	= this.form.data( 'template-node-id' ),
				nodeId      	= this.form.closest( '.fl-module' ).data( 'node' ),
				buttonText  	= this.button.find( '.fl-button-text' ).text(),
				waitText    	= this.button.closest( '.pp-form-button' ).data( 'wait-text' ),
				name        	= this.form.find( 'input[name=pp-subscribe-form-name]' ),
				email       	= this.form.find( 'input[name=pp-subscribe-form-email]' ),
				re          	= /\S+@\S+\.\S+/,
				valid       	= true;

			e.preventDefault();

			if ( this.button.hasClass( 'pp-form-button-disabled' ) ) {
				return; // Already submitting
			}
			if ( name.length > 0 && name.val() == '' ) {
				name.addClass( 'pp-form-error' );
				name.siblings( '.pp-form-error-message' ).show();
				valid = false;
			}
			if ( '' == email.val() || ! re.test( email.val() ) ) {
				email.addClass( 'pp-form-error' );
				email.siblings( '.pp-form-error-message' ).show();
				valid = false;
			}

			if ( valid ) {

				this.form.find( '> .pp-form-error-message' ).hide();
				this.button.find( '.fl-button-text' ).text( waitText );
				this.button.data( 'original-text', buttonText );
				this.button.addClass( 'pp-form-button-disabled' );

				$.post( FLBuilderLayoutConfig.paths.wpAjaxUrl, {
					action  			: 'pp_subscribe_form_submit',
					name    			: name.val(),
					email   			: email.val(),
					post_id 			: postId,
					template_id 		: templateId,
					template_node_id 	: templateNodeId,
					node_id 			: nodeId
				}, $.proxy( this._submitFormComplete, this ) );
			}
		},

		_submitFormComplete: function( response )
		{
			var data        = JSON.parse( response ),
				buttonText  = this.button.data( 'original-text' );

			if ( data.error ) {

				if ( data.error ) {
					this.form.find( '> .pp-form-error-message' ).text( data.error );
				}

				this.form.find( '> .pp-form-error-message' ).show();
				this.button.removeClass( 'pp-form-button-disabled' );
				this.button.find( '.fl-button-text' ).text( buttonText );
			}
			else if ( 'message' == data.action ) {
				this.form.find( '> *' ).hide();
				this.form.append( '<div class="pp-form-success-message">' + data.message + '</div>' );
			}
			else if ( 'redirect' == data.action ) {
				window.location.href = data.url;
			}
		},

		_onEnterKey: function( e )
		{
			if (e.which == 13) {
		    	this.button.trigger( 'click' );
		  	}
		}
	}

})( jQuery );
