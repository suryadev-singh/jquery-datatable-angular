<!--/**
 * Copyright (c) 2014 .....
 * @author        suryadev <suryadev.singh08@gmail.com>
 * @license       ....
 * @Description   This is default page . When load this page then login screen of the instagram is appear.
 *                It have the required url to redirect the on the configure web page(in this case : img-lazy-loading.php)
 *
 *
 */-->
<script>
  var redirect_uri = "http://localhost/working/lazyloading/app/img-lazy-loading.php";
  window.location.href = "https://instagram.com/oauth/authorize/?client_id=4ba90363759549a0ba0f3a5c7d71519c&redirect_uri="+redirect_uri+"&response_type=token";
</script>
