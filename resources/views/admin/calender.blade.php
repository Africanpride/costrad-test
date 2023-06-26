<x-app-layout>


    <div class="dark:prose" id="calendar"></div>
    <div class="dark:prose" id="calendar2"></div>


</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            dateClick: function(info) {
                alert('Date: ' + info.allDay);
                alert('Resource ID: ' + info.resource.id);
            },
            initialView: 'dayGridMonth',
            initialDate: @json(now()),
            selectable: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,list'
            },
            events: [{
                    title: 'All Day Event',
                    start: '2023-02-14'
                },
                {
                    title: 'Long Event',
                    start: '2023-02-07',
                    end: '2023-02-10'
                },
                {
                    groupId: '999',
                    title: 'Repeating Event',
                    start: '2023-02-09T16:00:00'
                },
                {
                    groupId: '999',
                    title: 'Repeating Event',
                    start: '2023-02-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2023-02-11',
                    end: '2023-02-13'
                },
                {
                    title: 'Meeting',
                    start: '2023-02-12T10:30:00',
                    end: '2023-02-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2023-02-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2023-02-12T14:30:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2023-02-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2023-02-28'
                }
            ]
        });

        calendar.render();
    });
</script>
