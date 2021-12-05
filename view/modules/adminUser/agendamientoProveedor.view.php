<head>
    <meta charset='utf-8' />
    <link href='assests/lib/main.css' rel='stylesheet' />
    <link rel="icon" type="image/png" href="assests/img/header-logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src='assests/lib/main.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'

                },
                initialDate: '2020-09-12',
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                events: [{
                        title: 'Business Lunch',
                        start: '2020-09-03T13:00:00',
                        constraint: 'businessHours'
                    }, {
                        title: 'Meeting',
                        start: '2020-09-13T11:00:00',
                        constraint: 'availableForMeeting', // defined below
                        color: '#257e4a'
                    }, {
                        title: 'Conference',
                        start: '2020-09-18',
                        end: '2020-09-20'
                    }, {
                        title: 'Party',
                        start: '2020-09-29T20:00:00'
                    },

                    // areas where "Meeting" must be dropped
                    {
                        groupId: 'availableForMeeting',
                        start: '2020-09-11T10:00:00',
                        end: '2020-09-11T16:00:00',
                        display: 'background'
                    }, {
                        groupId: 'availableForMeeting',
                        start: '2020-09-13T10:00:00',
                        end: '2020-09-13T16:00:00',
                        display: 'background'
                    },

                    // red areas where no events can be dropped
                    {
                        start: '2020-09-24',
                        end: '2020-09-28',
                        overlap: false,
                        display: 'background',
                        color: '#ff9f89'
                    }, {
                        start: '2020-09-06',
                        end: '2020-09-08',
                        overlap: false,
                        display: 'background',
                        color: '#ff9f89'
                    }
                ]
            });

            calendar.render();
        });
    </script>
    <style>
        body {
            margin: 40px;
            padding: 2px;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
            background-color: #629598;
            width: 90%;
        }
        
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .tabButton {
            background-color: #06070ed7;
            color: white;
            margin-bottom: 15px;
            width: auto;
            padding: 15px;
            height: auto;
            font-size: 15px;
            font-weight: 600;
            box-shadow: rgba(93, 173, 226, 0.7) 3px 3px 2px, rgba(133, 193, 233, 0.7) 4px 4px 3px, rgba(93, 173, 226, 0.7) 5px 5px 4px, rgba(23, 32, 42, 1) 13px 13px 15px;
        }
    </style>
</head>

<body>

    <button type="button" class="tabButton rounded-circle col-3" onclick="location.href='?c=InitAdmin'" target="_self">Volver</button>

    <div id='calendar'></div>

</body>

