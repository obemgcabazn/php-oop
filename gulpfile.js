;'use strict';

var gulp        = require( 'gulp' ),
    livereload  = require( 'gulp-livereload' );

gulp.task( 'watch', function(){
    livereload.listen();
    gulp.watch( '**/*.php' ).on( 'change', livereload.changed );
} );

gulp.task( 'default',
    gulp.series( 'watch' )
);
