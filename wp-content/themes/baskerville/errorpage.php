<?php /* Template Name: errorpage */ ?>
<!DOCTYPE html>
<html>
<head>
<title>404 Page</title>
<style>
.container .btn {
    position: absolute;
    top: 85%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #2e3092;;
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container .btn:hover {
    background-color: #2e30924d;
}
</style>
</head>
<body> 
<div class="container">
<img src="<?php echo get_site_url();?>/wp-content/themes/baskerville/404error.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" style="width:100%;height:98vh">
<a href="http://localhost/wordpress"><button class="btn">Go To Home Page</button></a>
</div>

</body>
</html>


