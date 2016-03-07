<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'Upload'; ?>

	<form id="upload_form" method="post" action="/images">
    	<ul>
        	<li><label>Path:<input id="path_input" type="text" /> </label></li>
            <li><button>Upload</button></li>
        </ul>
    </form>
    
<?php require VIEW_DIR . '/footer.php'; ?>
