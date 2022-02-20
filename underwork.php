<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under maintainance</title>
    <?php include ('header/link.php')?>


</head>
<body>

<style>

    .header {
      font-family:Raleway;
    background-color:#3665C2;
    color:white;
    text-align:center;
    padding:5px;	 
}
footer {
    background-color:DarkOrange;
    color:black;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
h1,p
{
  font-family: Raleway,sans-serif;
  color: #f68121;
}

</style>


<body class=header><br><br><br><br>
<h1>Important Message </h1>

<h1>The Page Requires a Client Certificate</h1>
<p>
The page you are attempting to access requires your browser to have a Secure Sockets Layer (SSL) client certificate 

that the Web server will recognize. The client certificate is used for identifying you as a valid user of the 

resource.

<br><br><br>

<a href="javascript:void()" onclick="goback()" href="javascript:void(0);" 
onclick="login()" role="button" class="btn btn-warning btn-lg" style="margin-left: 0px;">Go back</a>

<br><br><br><br><br><br>

</p>
<footer class=footer>
<h6 style="font-weight:bold; color:darkred; text-shadow:0px  1px  1px #000;">||THIS SITE IS UNDER CONSTRUCTION ||  SRI SUKHMANI INSTITUTE OF ENGINEERING & TECHNOLOGY ||</h6></footer>



<?php include('header/footer.php')?>
    
<script>
     function goback() {
               var retVal = confirm("Do you want to go back ?");
               if( retVal == true ) {
                  window.location = "index.php";
                  return true;
               } else {
                  document.write ("You don't go back");
                  return false;
               }
            }
</script>

<script>
    //  back to home page
function goback()
{
    swal({
        title: "Are you sure?",
        text: "You want to go back!",
        icon: "info",
        type: "info",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Redirect within few seconds!", {
            text: "Redirecting in 2 seconds.",
            icon: "success",
            href: "index.php",
          });
          window.location = "index.php";
        } else {            
          swal("You Don't Go Back!",{
            icon: 'error',
            title: 'Oops...',
          });
        }
      });     
}

</script>
<script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>


<script></script>
</body>
</html>