/**
 * anatta-site — success-features tab interaction.
 *
 * Pairs each `.anatta-site-feature` with the `.anatta-site-feature-panel`
 * at the same index in the following `.anatta-site-feature-panels` group.
 * Markup ships with the first feature/panel active, so it works without JS.
 *
 * @package anatta-site
 */
( function () {
	'use strict';

	function findPanels( container ) {
		var el = container.nextElementSibling;
		while ( el ) {
			if ( el.classList.contains( 'anatta-site-feature-panels' ) ) {
				return el.querySelectorAll( '.anatta-site-feature-panel' );
			}
			el = el.nextElementSibling;
		}
		return container.parentNode
			? container.parentNode.querySelectorAll( '.anatta-site-feature-panel' )
			: [];
	}

	function init( container ) {
		var features = container.querySelectorAll( '.anatta-site-feature' );
		var panels = findPanels( container );

		if ( ! features.length || ! panels.length ) {
			return;
		}

		container.setAttribute( 'role', 'tablist' );

		function activate( index, focus ) {
			Array.prototype.forEach.call( features, function ( feature, i ) {
				var active = i === index;
				feature.classList.toggle( 'is-active', active );
				feature.setAttribute( 'aria-selected', active ? 'true' : 'false' );
				feature.setAttribute( 'tabindex', active ? '0' : '-1' );
				if ( active && focus ) {
					feature.focus();
				}
			} );
			Array.prototype.forEach.call( panels, function ( panel, i ) {
				var active = i === index;
				panel.classList.toggle( 'is-active', active );
				panel.setAttribute( 'aria-hidden', active ? 'false' : 'true' );
			} );
		}

		var initial = 0;
		Array.prototype.forEach.call( features, function ( feature, i ) {
			var uid = 'anatta-site-feature-' + Math.random().toString( 36 ).slice( 2, 9 );
			feature.setAttribute( 'role', 'tab' );
			feature.id = feature.id || uid + '-tab';

			if ( panels[ i ] ) {
				panels[ i ].setAttribute( 'role', 'tabpanel' );
				panels[ i ].id = panels[ i ].id || uid + '-panel';
				feature.setAttribute( 'aria-controls', panels[ i ].id );
				panels[ i ].setAttribute( 'aria-labelledby', feature.id );
			}

			if ( feature.classList.contains( 'is-active' ) ) {
				initial = i;
			}

			feature.addEventListener( 'click', function () {
				activate( i, false );
			} );

			feature.addEventListener( 'keydown', function ( event ) {
				var key = event.key;
				if ( 'Enter' === key || ' ' === key || 'Spacebar' === key ) {
					event.preventDefault();
					activate( i, false );
				} else if ( 'ArrowRight' === key || 'ArrowDown' === key ) {
					event.preventDefault();
					activate( ( i + 1 ) % features.length, true );
				} else if ( 'ArrowLeft' === key || 'ArrowUp' === key ) {
					event.preventDefault();
					activate( ( i - 1 + features.length ) % features.length, true );
				}
			} );
		} );

		activate( initial, false );
	}

	function boot() {
		Array.prototype.forEach.call(
			document.querySelectorAll( '.anatta-site-features' ),
			init
		);
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', boot );
	} else {
		boot();
	}
}() );
