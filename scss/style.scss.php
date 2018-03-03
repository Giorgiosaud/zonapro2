$background:"<?php echo rose_get_object_option('logo', get_template_directory_uri().'/assets/images/logo.png', true)?>";
header.transparent .logo, .logo{
	background-color: #49b2d8;
    background-position: center;
    background-image:url($background);
    background-size: 70%;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    margin-top: 5px;

}
div#status {
    background-image: url($background);
    background-size: 70%;
    background-position: center;
    background-repeat: no-repeat;
}
.portfolio-item-caption {
    transition: all 0.2s;
}
.portfolio-item-title a{
	color:#fff;
}

.portfolio-item:hover .portfolio-item-caption {
    opacity: 1;
    background-color:#49b2d8d9;
 	transition: all 0.2s;   
}