<!-- Clock template -->
{{-- <div class="clock">
{{ \Carbon\Carbon::now()->format('H:i:s') }}
</div> --}}

<div>

<div id="clock">
    <h1 id="time">00:00:00</h1>
</div>


<script>
     // Update clock every 1 second
 setInterval(function() {
    var now = new Date(); // Get current date and time
    var time = now.toLocaleTimeString(); // Format time as HH:mm:ss
    document.getElementById("time").innerHTML = time; // Update clock
}, 1000);


</script>

</div>
