<center>
    <h3 style="color:white;">Erindale Transition Skills app</h3>
</center>

<div class="timeparent">
    <div class="timebox">
        <h4 id="date" style="color:white;"></h4>
    </div>
</div>

<script>
var months = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];
var n = new Date();
var y = n.getFullYear();
var m = n.getMonth();
var d = n.getDate();
document.getElementById("date").innerHTML = new Date().toDateString();
</script>

<hr>