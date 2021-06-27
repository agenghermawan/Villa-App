<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend.includes.head')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            @include('backend.includes.sidebar')
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                @include('backend.includes.navbar')

                @yield('content')
            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/vendor/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $.ajax({
                url: '/getJadwal/',
                type: 'get',
                dataType: 'json',
                success: function(r) {
                    console.log(r.data)
                    BuildCalendar(r.data);
                },
                error: function(e) {
                    sweetAlert("Load data gagal !!", "Error :" + e, "error");
                }
            })


        });

        function BuildCalendar(dataBirthDate) {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: '',
                    center: 'title',
                    right: 'prev,next today',

                },
                aspectRatio: 2,
                buttonText: {
                    today: 'Today',
                    month: 'Month',
                },
                themeSystem: 'default',
                events: dataBirthDate
            });
            calendar.render();
        }
    </script>
</body>

</html>
