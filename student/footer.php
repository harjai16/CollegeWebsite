
<!-- ========== COMMON JS FILES ========== -->

<script type="text/javascript" src="files/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files/bower_components/modernizr/modernizr.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="files/bower_components/chart.js/dist/Chart.js"></script>
    <!-- amchart js -->
    <script src="files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="files/assets/pages/widget/amchart/serial.js"></script>
    <script src="files/assets/pages/widget/amchart/light.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files/assets/js/SmoothScroll.js"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <!-- custom js -->
    <script src="files/assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="files/assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="files/assets/js/script.min.js"></script>
    <!-- notify js Fremwork -->
    <!-- toasatr javscript -->
    <script src="files/extra-pages/comming-soon/js/modernizr.custom.js"></script>
    <script src="files/extra-pages/comming-soon/js/jquery.countdown.js"></script>
    <script src="toastr/toastr.min.js"></script>
    <script src="toastr/jquery.counterup.min.js"></script>
    <script src="files/extra-pages/comming-soon/js/main-flat.js"></script>

    <!-- File upload -->
    
    <script src="files/assets/pages/jquery.filer/js/jquery.filer.min.js"></script>
    <script src="files/assets/pages/filer/custom-filer.js" type="text/javascript"></script>
    <script src="files/assets/pages/filer/jquery.fileuploads.init.js" type="text/javascript"></script>
    
    <!-- data-table js -->
    <script src="files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="files/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="files/assets/pages/data-table/js/dataTables.bootstrap4.min.js"></script>
    <script src="files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    
    <script src="files/assets/pages/data-table/js/data-table-custom.js"></script>

     <!-- Bootstrap date-time-picker js -->
     <script type="text/javascript" src="files/assets/pages/advance-elements/moment-with-locales.min.js"></script>
    <script type="text/javascript"
        src="files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript"
        src="files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript"
        src="files/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="files/bower_components/datedropper/datedropper.min.js"></script>
    <!-- Color picker js -->
    <script type="text/javascript" src="files/bower_components/spectrum/spectrum.js"></script>
    <script type="text/javascript" src="files/bower_components/jscolor/jscolor.js"></script>
    <!-- Mini-color js -->
    <script type="text/javascript" src="files/bower_components/jquery-minicolors/jquery.minicolors.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="files/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript"
        src="files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->

    <script type="text/javascript" src="files/assets/pages/advance-elements/custom-picker.js"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/vartical-layout.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files/assets/js/script.js"></script>

    
    
    <script>
            $(function(){
                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 3000
                });
                

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
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
                toastr["success"]( "Welcome to Student Admission System!");

            });
        </script>

        
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
    // dashboard
    function dashboard()
    {
        window.location = "dashboard.php";
    }


    // admissionForm
    function admissionForm()
    {
        window.location = "admission-form.php";
    } 

    // 
</script>

<script>
    
function fnFillAge() 
{
    var finalAge1 = (checkAge1()).split('/');
  //  var postName=$('#txtpost').val();
    if(finalAge1[0]>=17)
	{
        var date1 = finalAge1[0] + "Years  " + finalAge1[1] + "Months  " + finalAge1[2] + "Days"

        if (finalAge1[0] != 'NaN' && finalAge1[0] != '') {
            $('#ANCD').html(date1);
            $('#ANCD1').val(date1);
            document.getElementById('txtAyears').value = finalAge1[0];
            document.getElementById('txtAMonths').value = finalAge1[1];
            document.getElementById('txtADays').value = finalAge1[2];
        }
    }
	if(finalAge1[0]<17){
		alert('You are not eligible to fill the application form.');
		$('#appDob').val('');
	}

   /*  if((postName=="B.Sc. Nursing" || postName=="B.Sc. Medical Technology") ){
        if((finalAge1[0]>30) ||(finalAge1[0]==30 && finalAge1[1]>0) ||(finalAge1[0]==30 && finalAge1[1]==0 && finalAge1[2]>0 ) ){
            alert("You are not eligible to fill the application form.");
            $('#appDob').val('');
            $('#ANCD').html('');
        }
     
    } */

    

}


function checkAge1() {
    var dateString = document.getElementById("appDob").value;
    var now = new Date();
    var today = new Date(now.getYear(), now.getMonth(), now.getDate());
    var yearNow = 2021;
    var monthNow = 12;
    var dateNow = 31;
    var dob = dateString.split('/');
    var yearDob = dob[2];
    var monthDob = dob[1];
    var dateDob = dob[0];
    yearAge = yearNow - yearDob;
    if (monthNow >= monthDob)
        var monthAge = monthNow - monthDob;
    else {
        yearAge--;
        var monthAge = 12 + monthNow - monthDob;
    }
    if (dateNow >= dateDob)
        var dateAge = dateNow - dateDob;
    else {
        monthAge--;
        var dateAge = 31 + dateNow - dateDob;

        if (monthAge < 0) {
            monthAge = 11;
            yearAge--;
        }
    }
    if (yearAge < 0) {
        yearAge = 0;
    }
    var FinalAge = yearAge + '/' + monthAge + '/' + dateAge;
    return FinalAge;

}

function checkAge1old() {
    var dateString = document.getElementById("appDob").value;

    var date2 = "31/12/2019";
    var arrinp1 = dateString.split("/");
    var arrinp2 = date2.split("/");

    var a = moment([arrinp1[2], Number(arrinp1[1] - 1), (arrinp1[0])]);

    var b = moment([arrinp2[2], Number(arrinp2[1] - 1), (arrinp2[0])]);

    var years = b.diff(a, 'year');
    a.add(years, 'years');

    var months = b.diff(a, 'months');
    a.add(months, 'months');

    var days = b.diff(a, 'days');
    a.add(days, 'days');
    var age = new Array();
    age[0] = years;
    age[1] = months;
    age[2] = days;



    var FinalAge = years + '/' + months + '/' + days;
    return FinalAge;

}

</script>