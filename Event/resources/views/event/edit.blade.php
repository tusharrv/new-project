@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-heading">Update event</div>   
                        <form method="post" action ="{{action('CreateEventController@update', $id)}}">
                        {{csrf_field()}}
                           <div class="input-group">
                           <input name="_method" type="hidden" value="PATCH">
                              <label>Name of event</label>
                              <input type="text" name="event_name" value="{{$events->event_name}}">
                           </div>
                           
                           <div class="input-group">
                              <label>Date</label>
                              <input type="date" name="date" value="{{$events->date}}">
                           </div> 
                           
                           <div class="input-group">   
                              <label>Start of Event</label>
                              <input type="time" name="time" value="{{$events->time}}">
                           </div >
                           
                           <div class ="input-group" >
                              <label>Venue</label>
                           <select name="Venue" value="{{$events->Venue}}">
                        <option value="71aduitorium">71 Aduitorium</option>
                        <option value="maincampus">Main Campus</option>
                        <option value="classroom">Class Room</option>
                        </select>
                           </div>
                           <div class="input-group">
                              <label>Event details</label>
                              <input type="text" name="event_details" value="{{$events->event_details}}">
                           </div>
                        <div class="input-group">
                              <label>need_registration</label>
                              <input type="text" name="need_registration" value="{{$events->need_registration}}">
                           </div>    
                           

                        <button type="submit" name="submit" class="btn">Update</button > 
                        </form>
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection

   
   