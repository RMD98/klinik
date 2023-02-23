@extends('template/admin/app')
@section('content')

  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<!-- ./wrapper -->
@stop
@push('script')
<!-- jQuery -->
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/

    function tanggal(tgl,jam){
      var date = tgl.split('-')
      var time = jam.split(':')
      var tgl = (new Date(date[0],date[1]-1,date[2],time[0],time[1],time[2]))

      return tgl
    }



    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;


    var calendarEl = document.getElementById('calendar');


    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        @foreach($data as $key=>$value)
          
        {
          title          : '{{$value->pelayanan}},{{$value->user_id}}',
          start          : tanggal('{{$value->tanggal}}','{{$value->jam}}'),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
        },
        @endforeach
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()
  })
</script>

@endpush
