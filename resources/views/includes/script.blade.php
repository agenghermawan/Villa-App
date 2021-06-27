    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/combine/npm/fullcalendar-scheduler@5.8.0/main.min.js,npm/fullcalendar-scheduler@5.8.0">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.8.0/main.min.js"></script>


    <script>
        AOS.init();
    </script>

    @yield('script')

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
