<style>
    #calendar-container {
        display: grid;
        grid-template-columns: 200px 1fr;
        padding: 20px;
        background-color: rgb(255, 255, 255);

    }
    #events {
        grid-column: 1;
    }
    #calendar {
        grid-column: 2;
        height: 700px;
        background-color: rgb(237, 247, 248);

    }
    .dropEvent {
        background-color: rgb(29, 227, 237);
        color: white;
        padding: 5px 16px;
        margin-bottom: 10px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        cursor:pointer;
    }
</style>

<!------------------ Form modal---------------- -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    form
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="forms-sample" action="{{url('/meeting/save')}}" method="post" enctype="multipart/form-data">
                @csrf  
                <div class="mb-3">
                    <label for="" class="form-label">id</label>
                    <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{old('id')}}">
                    @error('id')
                     <p class="text-danger"> {{$message}}</p>
                    @enderror
                  </div>
                <div class="mb-3">
                  <label for="" class="form-label">title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                  @error('title')
                   <p class="text-danger"> {{$message}}</p>
                  @enderror
                </div>
  
                <div class="mb-3">
                  <label for="" class="form-label ">description</label>
                  <input type="description" class="form-control @error('name') is-invalid @enderror" name="description" value="{{old('description')}}" >
                  @error('description')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">start</label>
                    <input type="date" class="form-control @error('start') is-invalid @enderror" name="start" value="{{old('start')}}" >
                    @error('start')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label ">end</label>
                    <input type="date" class="form-control @error('end') is-invalid @enderror" name="end" value="{{old('end')}}" >
                    @error('end')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label ">nb_guest</label>
                    <input type="text" class="form-control @error('nb_guest') is-invalid @enderror" name="nb_guest" value="{{old('nb_guest')}}" >
                    @error('nb_guest')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label ">type_event</label>
                    <input type="text" class="form-control @error('type_event') is-invalid @enderror" name="type_event" value="{{old('type_event')}}" >
                    @error('type_event')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label ">rooms_id</label>
                    <input type="text" class="form-control @error('rooms_id') is-invalid @enderror" name="rooms_id" value="{{old('rooms_id')}}" >
                    @error('rooms_id')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label ">users_id</label>
                    <input type="text" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{old('users_id')}}" >
                    @error('users_id')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                    <div class="mb-3">
                        <label for="" class="form-label ">need_itsupport</label>
                        <input type="text" class="form-control @error('need_itsupport') is-invalid @enderror" name="need_itsupport" value="{{old('need_itsupport')}}" >
                        @error('need_itsupport')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label ">need_media</label>
                        <input type="text" class="form-control @error('need_media') is-invalid @enderror" name="need_media" value="{{old('need_media')}}" >
                        @error('need_media')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                 <input type="submit" value="Save" class="btn btn-success">
                </div>
               </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>



<div>
    <div id="calendar-container" wire:ignore>
        <div id="events">
            <div data-event='{"title":"Evénement A"}' class="dropEvent">Evénement A</div>
            <div data-event='{"title":"Evénement B"}' class="dropEvent">Evénement B</div>
        </div>
        <div id="calendar"></div>
    </div>
</div>

@push('scripts')

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>

<script>
create_UUID = () => {
    let dt = new Date().getTime();
    const uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
        let r = (dt + Math.random() * 16) % 16 | 0;
        dt = Math.floor(dt / 16);
        return (c == 'x' ? r :(r&0x3|0x8)).toString(16);
    });
    return uuid;
}

document.addEventListener('livewire:load', function () {
    const Draggable = FullCalendar.Draggable;
    new Draggable(document.getElementById('events'), {
        itemSelector: '.dropEvent'
    });
    const Calendar = FullCalendar.Calendar;
    const calendarEl = document.getElementById('calendar');
    const calendar = new Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        locale: '{{ config('app.locale') }}',
        events: JSON.parse(@this.events),
        editable: true,  
        eventClick: info => {
            if (confirm("Voulez-vous vraiment supprimer cet événement ?")) {
               // window.location.href = '/room';
                info.event.remove();
                @this.eventRemove(info.event.id);
            }
        },   
        eventReceive: info => {
            const id = create_UUID();
            info.event.setProp('id', id);
            @this.eventAdd(info.event);
        },           
        eventResize: info => @this.eventChange(info.event),
        eventDrop: info => @this.eventChange(info.event),
        selectable: true,
        select: arg => {

//window.location.href = '/meeting/new';
           //     /*     */

            const title = prompt('Titre :');

            const id = create_UUID();
            if (title) {
                calendar.addEvent({
                    id: id,
                    title: title,   
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay
                });
                @this.eventAdd(calendar.getEventById(id));
            };
            calendar.unselect();
        },
    });    
        
    calendar.render();
});
</script>

<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.min.js"></script>



@endpush