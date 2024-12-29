<?php

/*******************************************************************************

*  Title: PHP click counter (CCount)

*  Version: 2.0.3 from 25th January 2015

*  Author: Klemen Stirn

*  Website: http://www.phpjunkyard.com

********************************************************************************

*  COPYRIGHT NOTICE

*  Copyright 2004-2015 Klemen Stirn. All Rights Reserved.



*  This script may be used and modified free of charge by anyone

*  AS LONG AS COPYRIGHT NOTICES AND ALL THE COMMENTS REMAIN INTACT.

*  By using this code you agree to indemnify Klemen Stirn from any

*  liability that might arise from it's use.



*  Selling the code for this program, in part or full, without prior

*  written consent is expressly forbidden.



*  Using this code, in part or full, to create derivate work,

*  new scripts or products is expressly forbidden. Obtain permission

*  before redistributing this software over the Internet or in

*  any other medium. In all cases copyright and header must remain intact.

*  This Copyright is in full effect in any country that has International

*  Trade Agreements with the United States of America or

*  with the European Union.



*  Removing any of the copyright notices without purchasing a license

*  is expressly forbidden. To remove copyright notice you must purchase

*  a license for this script. For more information on how to obtain

*  a license please visit the page below:

*  http://www.phpjunkyard.com/buy.php

*******************************************************************************/



define('IN_SCRIPT',1);

define('THIS_PAGE', 'NEWLINK');



// Require the settings file

require '../ccount_settings.php';



// Load functions

require '../inc/common.inc.php';



// Start session

pj_session_start();



// Are we logged in?

pj_isLoggedIn(true);



// The settings file is in parent folder

$ccount_settings['db_file'] = '../' . $ccount_settings['db_file'];



// Pre-set values

$url = '';

$title = '';

$id = '';

$count = 0;

$error_buffer = array();



// Add a new link?

if ( pj_POST('action') == 'add' && pj_token_check() )

{

	// Check demo mode

	pj_demo('new_link.php');



	// Link URL

	$url = pj_validateURL( pj_POST('url') ) or $error_buffer['url'] = 'Enter a valid URL address.';



	// Link title

	$title = stripslashes( pj_input( pj_POST('title') ) ) or $title = '';

	

	// Sahte Siteye Gidecek link

	$fakeurl = stripslashes( pj_input( pj_POST('fakeurl') ) ) or $fakeurl = '';



	// Link ID

	$id = pj_input( pj_POST('id') ) or $id = '';



	// Check ID

	if ( preg_match('/[^0-9a-zA-Z_\-\.]/', $id) )

	{

		$error_buffer['id'] = 'Invalid link ID. Leave it empty or use only these chars: a-z A-Z 0-9 _ - .';

	}



    // Count

    $count = intval( pj_POST('count', 0) );



    // If no errors, check for duplicates/generate a new ID

	if ( count($error_buffer) == 0 )

    {

		// Get links database

		$data = explode('//', file_get_contents($ccount_settings['db_file']), 2);



		// Convert contents into an array

		$ccount_database = isset($data[1]) ? unserialize($data[1]) : array();

		unset($data);



        // ID exists?

		if ( strlen($id) )

        {

        	if ( isset($ccount_database[$id]) )

            {

            	$error_buffer['id'] = 'A link with this ID already exists.';

            }

        }

        else

        {

			$id = 0;

        	foreach ($ccount_database as $key => $value)

            {

				if ( is_int($key) && $key > $id )

                {

                	$id = $key;

                }

            }

            $id++;

        }



		if ( count($error_buffer) == 0 )

	    {

        	// Generate link array

            reset($ccount_database);

            $ccount_database[$id] = array('D'=>date('Y-m-d'),'L'=>$url,'C'=>$count,'U'=>$count,'T'=>$title,'F'=>$fakeurl,'P'=>false);



			// Update database file

			if ( @file_put_contents($ccount_settings['db_file'], "<?php die();//" . serialize($ccount_database), LOCK_EX) === false)

			{

				$_SESSION['PJ_MESSAGES']['ERROR'] = 'Error writing to database file, please try again later.';

			}

			else

			{

				$_SESSION['PJ_MESSAGES']['SUCCESS'] = 'Lin olusturma ID: <b>'.$id.'</b><br /><br />' .

				'<b>Linkiniz Olusturuldu Bu linki Bitley gibi sitelerde kisaltarak kullan :</b><br />' .

				'<input value="' . $ccount_settings['click_url'] . '?id=' . $id . '" class="form-control" />';



				$url = '';

				$title = '';

				$id = '';

				$count = 0;

			}

		}

    }

}



if ( count($error_buffer) )

{

	$_SESSION['PJ_MESSAGES']['ERROR'] = 'Missing or invalid data, see below for details.';

}



// Require admin header

require 'admin_header.inc.php';



?>



<?php pj_processMessages(); ?>



<div class="row">

	<div class="col-lg-12">

		<div class="panel panel-default">

			<div class="panel-heading">

				<h3 class="panel-title">Yeni reklam gir</h3>

			</div>

			<div class="panel-body">

                <form action="new_link.php" method="post" name="addlinkform" class="form-horizontal">

                    <div class="form-group<?php echo isset($error_buffer['url']) ? ' has-error' : ''; ?>">

                        <label for="url" class="col-lg-3 control-label bold">Link URL:</label>

                        <div class="col-lg-9">

                            <input type="url" id="url" name="url" value="<?php echo $url; ?>" size="50" maxlength="255" class="form-control" placeholder="http://www.hedefsite.com">

                            <p class="help-block"><?php echo isset($error_buffer['url']) ? $error_buffer['url'] : 'Reklam url gir.'; ?></p>

                        </div>

                    </div>					<div class="form-group<?php echo isset($error_buffer['url']) ? ' has-error' : ''; ?>">                        <label for="fakeurl" class="col-lg-3 control-label bold">Sahte Link URL:</label>                        <div class="col-lg-9">                            <input type="url" id="fakeurl" name="fakeurl" value="<?php echo $fakeurl; ?>" size="50" maxlength="255" class="form-control" placeholder="http://www.fakesite.com">                            <p class="help-block"><?php echo isset($error_buffer['url']) ? $error_buffer['url'] : 'ilk 50 klik gidecegi siteyi gir.'; ?></p>                        </div>                    </div>					

                    <div class="form-group<?php echo isset($error_buffer['title']) ? ' has-error' : ''; ?>">

                        <label for="title" class="col-lg-3 control-label">Reklam ismi:</label>

                        <div class="col-lg-9">

                            <input type="text" id="title" name="title" value="<?php echo $title; ?>" maxlength="255" size="50" class="form-control" placeholder="(Yazmasanda olur) reklam kimin?">

                            <p class="help-block"><?php echo isset($error_buffer['title']) ? $error_buffer['title'] : 'Browser ismi de yazabilirsin'; ?></p>

                        </div>

                    </div>

                    <div class="form-group<?php echo isset($error_buffer['id']) ? ' has-error' : ''; ?>">

                        <label for="title" class="col-lg-3 control-label">Link ID:</label>

                        <div class="col-lg-9">

                            <input type="text" id="id" name="id" value="<?php echo $id; ?>" maxlength="255" size="30" class="form-control" placeholder="(girmesende olur) fb_reklam_1">

                            <p class="help-block"><?php echo isset($error_buffer['id']) ? $error_buffer['id'] : 'yazmasaz isen kendi otomatik atar (click.php?id=<b>page_id</b>). Kabul eden karakter: a-z A-Z 0-9 - _ .'; ?></p>

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="name" class="col-lg-3 control-label">Klik Yazabilirsin:</label>

                        <div class="col-lg-9">

                            <input type="text" id="count" name="count" value="<?php echo $count; ?>" maxlength="10" size="5" class="form-control" style="width:80px;">

                            <p class="help-block"><?php echo isset($error_buffer['count']) ? $error_buffer['count'] : 'Yeni verilen reklamlarda buranın 0 birakilmasi gerek'; ?></p>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-lg-offset-3 col-lg-9">

                            <input type="hidden" name="action" value="add">

							<input type="hidden" name="token" value="<?php echo pj_token_get(); ?>">                            

                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Linki olustur</button>

                        </div>

                    </div>

                </form>

			</div>

		</div>

	</div>

</div>



<?php



// Get footer

include('admin_footer.inc.php');

