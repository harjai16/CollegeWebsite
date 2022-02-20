
    <script type="text/javascript" src="../files/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../files/bower_components/modernizr/modernizr.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="../files/bower_components/chart.js/dist/Chart.js"></script>
    <!-- amchart js -->
    <script src="../files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="../files/assets/pages/widget/amchart/serial.js"></script>
    <script src="../files/assets/pages/widget/amchart/light.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../files/assets/js/SmoothScroll.js"></script>
    <script src="../files/assets/js/pcoded.min.js"></script>
    <!-- custom js -->
    <script src="../files/assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="../files/assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="../files/assets/js/script.min.js"></script>
    <!-- notify js Fremwork -->
    <!-- toasatr javscript -->
    <script src="../files/extra-pages/comming-soon/js/modernizr.custom.js"></script>
    <script src="../files/extra-pages/comming-soon/js/jquery.countdown.js"></script>
    <script src="../toastr/toastr.min.js"></script>
    <script src="../toastr/jquery.counterup.min.js"></script>
    <script src="../files/extra-pages/comming-soon/js/main-flat.js"></script>

    
    <!-- data-table js -->
    <script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../files/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="../files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="../files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../files/assets/pages/data-table/js/dataTables.bootstrap4.min.js"></script>
    <script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    
    <script src="../files/assets/pages/data-table/js/data-table-custom.js"></script>

    <script src="../files/assets/js/ckeditor/ckeditor.js"></script>
    <script>
        //  add-notice
        function addnotice()
        {
            window.location = "add-notice.php";
        }
    function dashboard(){
        window.location = "dashboard.php";
    }
    // change password
    function chanegpasswd()
    {
        window.location = "change-password.php";
    }

    // review website 
    function review()
    {
        window.location = "review.php";
    }
    // add course
    function Addcource(){
        window.location = "add-course.php";
    }
    //Registerstudent
    function Registerstudent()
    {
        window.location = "Register-student.php";
    }

    // view course
    function viewcourse()
    {
        window.location = "view-course.php";
    }

    // add subjects
    function Addsubject()
    {
        window.location = "add-subject.php";
    }
    
    // edit subject
    function editsubject()
    {
        window.location = "edit-sub.php";
    }

// view subject
    function viewsubject()
    {
        window.location = "view-subject.php";
    }
</script>


<!-- create password change method -->
<div class="container">
<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

<script>
		$("#countdown")
			// Year/Month/Day Hour:Minute:Second
			.countdown("2022/10/24 00:30:30", function(event) {
				$(this).html(
					event.strftime('%D Days %Hh %Mm %Ss')
				);
		});
		</script>

<script>
                        $(document).ready(function () {
                            setTimeout(function () {
                                $('.succWrap').slideUp("slow");
                            }, 3000);
                        });
                    </script>

            <script>
            $(function(){
                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
                

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,
                  "positionClass": "toast-bottom-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to Admin Panel System!");

            });
        </script>


<script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });