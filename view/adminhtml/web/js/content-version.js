/**
 * Copyright © 2016 Gordon Lesti. All rights reserved.
 * See COPYING.txt for license details.
 */
define( [ "jquery", "jquery/ui" ], function( $ ) {
    "use strict";

    $.widget( "lesti.contentVersion", {
        options: {
            url: ""
        },
        _create: function() {
            var options = this.options;
            var ajaxCall = function( leftId, rightId ) {
                $.ajax( {
                    url: options.url + "left/" + leftId + "/right/" + rightId + "/",

                    // jscs:disable requireCamelCaseOrUpperCaseIdentifiers
                    data: { form_key: window.FORM_KEY },

                    // jscs:enable requireCamelCaseOrUpperCaseIdentifiers
                    success: function( data ) {
                        var versionDiff = $( "#version-diff" );
                        versionDiff.html( "" );
                        for ( var i = 0; i < data.length; i++ ) {
                            var line = data[ i ];
                            var div = "<div>";
                            if ( line[ 1 ] === 1 ) {
                                div = "<div style=\"background-color: #ff9999;\">";
                            }
                            if ( line[ 1 ] === 2 ) {
                                div = "<div style=\"background-color: #99ff99;\">";
                            }
                            versionDiff.append( div + line[ 0 ] + "</div>" );
                        }
                    }
                } );
            };
            var initRadios = function( side ) {
                var radios = $( "input[data-version-side=\"" + side + "\"]" );
                radios.click( function() {
                    radios.prop( "checked", false );
                    var radio = $( this );
                    radio.prop( "checked", true );
                    var leftId = 0;
                    var rightId = 0;
                    if ( side === "left" ) {
                        leftId = radio.attr( "data-version-id" );
                        rightId = $( "input[data-version-side=\"right\"]:checked" )
                            .attr( "data-version-id" );
                    } else {
                        leftId = $( "input[data-version-side=\"left\"]:checked" )
                            .attr( "data-version-id" );
                        rightId = radio.attr( "data-version-id" );
                    }
                    ajaxCall( leftId, rightId );
                } );
            };
            initRadios( "left" );
            initRadios( "right" );
        }
    } );

    return $.lesti.contentVersion;
} );
