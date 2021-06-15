<?php 


require 'lib/rb.php';
R::setup( 'mysql:host=localhost;dbname=manik','root', '' ); 

if ( !R::testconnection() )
{
		exit ('No connection with DB приветик');
}

session_start();