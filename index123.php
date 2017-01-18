<?php
	
?>
<script>
function dofilter() {
	var txt = '<?php echo urldecode($_REQUEST['searchtxt']);?>';
	if (txt != '') {
		document.getElementById('searchtxt').value = txt;
	}
}

function dosearch() {
	var txt = document.getElementById('searchtxt').value;
	if(txt != '') {
		window.location='?searchtxt=' + txt;
	}
}
</script>
<body onload="dofilter()">
<input type="text" id="searchtxt" name="searchtxt"/><input type="button" onclick="dosearch()" value="Search"/>
</body>