                        <?php echo
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('Content-Type: text/html');?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UNP-GCRMS Admin</title>

    <!-- Bootstrap Core CSS -->
    <script type="text/javascript" src="{{ asset('test/js/libs/jquery.js') }}"></script>
    <link href="{{ asset('test/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="{{ asset('test/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <link href="{{ asset('test/plugins/datatable/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('test/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="{{ asset('test/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('test/plugins/bs-dtp/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('test/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">




    <link href="{{ asset('test/css/animate.css') }}"rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('test/plugins/pnotify/pnotify.custom.min.js') }}"></script>

    <link href="{{ asset('test/plugins/pnotify/pnotify.custom.min.css') }}" media="all" rel="stylesheet" type="text/css">

    <style type = "text/css">
        .capitalize{
            text-transform: capitalize;
        }
        .bar-legend >li > span{

            display: list-item;
            width: 40px !important;
            height: 20px !important;

        }
        .bar-legend {
            list-style: none;
        }

        .pie-legend >li > span{

            display: block;
            width: 40px !important;
            height: 10px !important;

        }
        .pie-legend {
            list-style: none;
        }
    </style>


</head>
    @if(isset($bg))
    <body style="background-color: {{ $bg }}">
    @else
    <body>
    @endif
    <div id="wrapper">
         
        @yield('content')
        @include('partials.admin.modals')
    </div>

    <script src="{{ asset('test/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('test/plugins/chartjs/Chart.js') }}"></script>
    <script src="{{ asset('test/js/libs/validate.js') }}"></script>
    <script src="{{ asset('test/js/libs/moment.js') }}"></script>
    <script src="{{ asset('test/js/libs/jquery.maskedinput.js') }}"></script>
    
    <script src="{{ asset('test/plugins/bs-dtp/js/dtp.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('test/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
    
    <script src="{{ asset('test/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('test/plugins/datatable/dataTables.bootstrap.min.js') }}"></script>

    <script src="{{ asset('test/dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('test/js/libs/knockout.js') }}"></script>
    <script src="{{ asset('test/js/view-models/custom-bindings/datetimepickerBinding.js') }}"></script>
    <script src="{{ asset('test/js/view-models/xhr.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/studentInfoVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/educationalBackgroundVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/familyBackgroundVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/academicPerformanceVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/organizationalAffiliationVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/psychologicalTestVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/activitiesParticipatedVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/counsellingRecordVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/absencesRecordVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/collegeVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/courseVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/scholarshipVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/studentRecordsVM.js') }}"></script>

    <script src="{{ asset('test/js/view-models/admin/statisticsVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/userVM.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/allDataObjects.js') }}"></script>
    <script src="{{ asset('test/js/view-models/admin/masterViewModel.js') }}"></script>
    <script type="text/javascript">
        $(document).ready( function(){
            $("#school_id").mask("99-99999");
            $(".phone").mask("9999-9999-999");
            $(".date-input").mask("9999-99-99");

            $('#studentRecordsTable tfoot th').each( function () {
                if($(this).index() < 5){
                    var title = $('#studentRecordsTable thead th').eq( $(this).index() ).text();
                    // console.log()
                    $(this).html( '<input type="text" class = "form-control input-sm" placeholder="Filter '+title+'" />' );    
                }

            } );
            var table = $("#studentRecordsTable").DataTable({
               
            });

            table.columns().every( function () {
                var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        });
    </script>
    </body>
</html>