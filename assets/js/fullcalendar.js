(function () {
  "use strict";
  //_____Calendar Events Intialization

  // var curYear = moment().format('YYYY');
  // var curMonth = moment().format('MM');

  function getData() {
    $.ajax({
      type: "GET",
      url: "../Controller/CalendarController.php",
      dataType: 'json',
      success: function (res) {
        var containerEl = document.getElementById('external-events');
        new FullCalendar.Draggable(containerEl, {
          itemSelector: '.fc-event',
          eventData: function (eventEl) {
            console.log(eventEl);
            return {
              title: eventEl.innerText.trim(),
              title: eventEl.innerText,
              className: eventEl.className + ' overflow-hidden '
            }
          }
        });
        var calendarEl = document.getElementById('calendar2');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
          },
          defaultView: 'month',
          navLinks: true, // can click day/week names to navigate views
          businessHours: true, // display business hours
          editable: true,
          selectable: true,
          selectMirror: true,
          droppable: true, // this allows things to be dropped onto the calendar

          select: function (arg) {
            var title = prompt('Event Title:');
            console.log(arg.start);
            
            if (title) {
              var start = new Date(arg.start);
              var startformattedDate = new Date(start.getTime() - (start.getTimezoneOffset() * 60000)).toISOString().slice(0, 19).replace('T', ' ');

              var end = new Date(arg.end);
              var endformattedDate = new Date(end.getTime() - (end.getTimezoneOffset() * 60000)).toISOString().slice(0, 19).replace('T', ' ');
      
              var data = {"title": title, "start": startformattedDate, "end": endformattedDate, "add-calendar-event": true, "color": "rgb(185,78,237)"};

              // var data = { "title": title, "start": new Date(arg.start).toISOString(), "end": new Date(arg.end).toISOString(), "add-calendar-event": true, "color": "#ffffff" };

              $.ajax({
                type: "POST",
                url: "../Controller/CalendarController.php",
                data: data,
                success: function () {
                  calendar.addEvent({
                    title: title,
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay
                  })
                }
              });
            }

            calendar.unselect()
          },
          eventClick: function (arg) {
            if (confirm('Are you sure you want to delete this event?')) {
              var deleteId = arg.event._def.sourceId;
              console.log(deleteId);
              $.ajax({
                type: "POST",
                url: "../Controller/CalendarController.php",
                data: {'deleteId': deleteId, "delete-calendar-event": true},
                success: function () {
                  arg.event.remove();
                }
              });
            }
          },

          editable: true,
          dayMaxEvents: true, // allow "more" link when too many events
          eventSources: [res],

        });
        calendar.render();

        // for activity scroll
        var myElement1 = document.getElementById('full-calendar-activity');
        new SimpleBar(myElement1, { autoHide: true });
      }
    });
  }

  getData();


  // var sptCalendarEvents = {
  //   id: 1,
  //   events: [{
  //     id: '1',
  //     start: curYear + '-' + curMonth + '-02',
  //     end: curYear + '-' + curMonth + '-03',
  //     title: 'Spruko Meetup',
  //     className: "bg-secondary-transparent",
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }, {
  //     id: '2',
  //     start: curYear + '-' + curMonth + '-17',
  //     end: curYear + '-' + curMonth + '-17',
  //     title: 'Design Review',
  //     className: "bg-info-transparent",
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }, {
  //     id: '3',
  //     start: curYear + '-' + curMonth + '-13',
  //     end: curYear + '-' + curMonth + '-13',
  //     title: 'Lifestyle Conference',
  //     className: "bg-primary-transparent",
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }, {
  //     id: '4',
  //     start: curYear + '-' + curMonth + '-21',
  //     end: curYear + '-' + curMonth + '-21',
  //     title: 'Team Weekly Brownbag',
  //     className: "bg-warning-transparent",
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }, {
  //     id: '5',
  //     start: curYear + '-' + curMonth + '-04T10:00:00',
  //     end: curYear + '-' + curMonth + '-06T15:00:00',
  //     title: 'Music Festival',
  //     className: "bg-success-transparent",
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }, {
  //     id: '6',
  //     start: curYear + '-' + curMonth + '-23T13:00:00',
  //     end: curYear + '-' + curMonth + '-25T18:30:00',
  //     title: 'Attend Lea\'s Wedding',
  //     className: "bg-success-transparent",
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }]
  // };
  // // Birthday Events Source
  // var sptBirthdayEvents = {
  //   id: 2,
  //   className: "bg-info-transparent",
  //   textColor: '#fff',
  //   events: [{
  //     id: '7',
  //     start: curYear + '-' + curMonth + '-04',
  //     end: curYear + '-' + curMonth + '-04',
  //     title: 'Harcates Birthday',
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }, {
  //     id: '8',
  //     start: curYear + '-' + curMonth + '-28',
  //     end: curYear + '-' + curMonth + '-28',
  //     title: 'Bunnysin\'s Birthday',
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }, {
  //     id: '9',
  //     start: curYear + '-' + curMonth + '-31',
  //     end: curYear + '-' + curMonth + '-31',
  //     title: 'Lee shin\'s Birthday',
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   }, {
  //     id: '10',
  //     start: curYear + '-' + 11 + '-11',
  //     end: curYear + '-' + 11 + '-11',
  //     title: 'Shinchan\'s Birthday',
  //     description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
  //   },]
  // };
  // var sptHolidayEvents = {
  //   id: 3,
  //   className: "bg-danger-transparent",
  //   textColor: '#fff',
  //   events: [{
  //     id: '10',
  //     start: curYear + '-' + curMonth + '-05',
  //     end: curYear + '-' + curMonth + '-08',
  //     title: 'Festival Day'
  //   }, {
  //     id: '11',
  //     start: curYear + '-' + curMonth + '-18',
  //     end: curYear + '-' + curMonth + '-19',
  //     title: 'Memorial Day'
  //   }, {
  //     id: '12',
  //     start: curYear + '-' + curMonth + '-25',
  //     end: curYear + '-' + curMonth + '-26',
  //     title: 'Diwali'
  //   }]
  // };
  // var sptOtherEvents = {
  //   id: 4,
  //   className: "bg-info-transparent",
  //   textColor: '#fff',
  //   events: [{
  //     id: '13',
  //     start: curYear + '-' + curMonth + '-07',
  //     end: curYear + '-' + curMonth + '-09',
  //     title: 'My Rest Day'
  //   }, {
  //     id: '13',
  //     start: curYear + '-' + curMonth + '-29',
  //     end: curYear + '-' + curMonth + '-31',
  //     title: 'My Rest Day'
  //   }]
  // };


  // var containerEl = document.getElementById('external-events');
  // new FullCalendar.Draggable(containerEl, {
  //   itemSelector: '.fc-event',
  //   eventData: function (eventEl) {
  //     console.log(eventEl);
  //     return {
  //       title: eventEl.innerText.trim(),
  //       title: eventEl.innerText,
  //       className: eventEl.className + ' overflow-hidden '
  //     }
  //   }
  // });
  // var calendarEl = document.getElementById('calendar2');

  // var calendar = new FullCalendar.Calendar(calendarEl, {
  //   headerToolbar: {
  //     left: 'prev,next today',
  //     center: 'title',
  //     right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
  //   },
  //   defaultView: 'month',
  //   navLinks: true, // can click day/week names to navigate views
  //   businessHours: true, // display business hours
  //   editable: true,
  //   selectable: true,
  //   selectMirror: true,
  //   droppable: true, // this allows things to be dropped onto the calendar

  //   select: function (arg) {
  //     var title = prompt('Event Title:');
  //     if (title) {
  //       console.log(new Date(arg.end));
  //       var start = new Date(arg.start).toISOString();

  //       // Remove the Z character from the ISO string to remove the timezone.
  //       var startstr = start.substring(
  //         0,
  //         start.length - 1
  //       );

  //       var end = new Date(arg.end).toISOString();

  //       // Remove the Z character from the ISO string to remove the timezone.
  //       var endStr = end.substring(
  //         0,
  //         end.length - 1
  //       );



  //       var data = {"title": title, "start": new Date(startstr), "end": new Date(endStr), "add-calendar-event": true, "color": "#ffffff"};
  //       // calendar.addEvent({
  //       //   title: title,
  //       //   start: arg.start,
  //       //   end: arg.end,
  //       //   allDay: arg.allDay
  //       // })
  //       // console.log(new Date(arg.start).toISOString());
  //       $.ajax({
  //         type: "POST",
  //         url: "../Controller/CalendarController.php",
  //         data: data,
  //         success: function(res) {
  //           // console.log(res);
  //           console.log(123);
  //         }
  //       });
  //     }

  //     calendar.unselect()
  //   },
  //   eventClick: function (arg) {
  //     if (confirm('Are you sure you want to delete this event?')) {
  //       arg.event.remove()
  //     }
  //   },

  //   editable: true,
  //   dayMaxEvents: true, // allow "more" link when too many events
  //   eventSources: [sptCalendarEvents],

  // });
  // calendar.render();
  // console.log(sptCalendarEvents);
  // // for activity scroll
  // var myElement1 = document.getElementById('full-calendar-activity');
  // new SimpleBar(myElement1, { autoHide: true });


})();
