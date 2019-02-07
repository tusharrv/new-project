
   <div class="header">
      <h2> Create new event</h2>
   </div>
   
<form method="post" action ="{{url('event')}}">
{{csrf_field()}}
   <div class="input-group">
   
       <label>Name of event</label>
	   <input type="text" name="event_name">
   </div>
   
   <div class="input-group">
       <label>Date</label>
	   <input type="date" name="date">
   </div> 
   
   <div class="input-group">   
       <label>Start of Event</label>
	   <input type="time" name ="time">
   </div >
   
   <div class ="input-group">
       <label>Venue</label>
   <select name="venue">
   <option value="classroom">Class Room</option>
  <option value="71aduitorium">71 Aduitorium</option>
  <option value="maincampus">Main Campus</option>
  
</select>
   </div>
   <div class="input-group">
       <label>Event details</label>
	   <input type="text" name="event_details">
   </div>
<div class="input-group">
       <label>need_registration</label>
	   <input type="text" name="need_registration">
   </div>    
   
   

<button type="submit" name="submit" class="btn">Submit</button > 
</form>