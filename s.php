<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<form action="" method="get">
Enter Link:<input type="text" name="link" placeholder="https://www.link.com" autocomplete="off" required><br>
<input type="submit" value="ok">
</form>
<?php
error_reporting(0);
if (!empty($l = $_GET['link'])) {
    echo "<a href='https://www.facebook.com/sharer/sharer.php?u=".$l."' target='_blank'><img src='https://image.flaticon.com/icons/png/512/124/124010.png' width='50' height='50'></a>&nbsp;&nbsp;"; 
    echo "<a href='https://twitter.com/intent/tweet?url=".$l."' target='_blank'><img src='http://pngimg.com/uploads/twitter/twitter_PNG9.png' width='50' height='50'></a>&nbsp;&nbsp;";	
	echo "<a href='https://www.linkedin.com/sharing/share-offsite/?url=".$l."' target='_blank'><img src='https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png' width='50' height='50'></a>"; 
}
//&hashtag=%23AquiVaElHashtag, &quote=something   -> facebook
//&hashtags= something &text=something -> twitter
?>