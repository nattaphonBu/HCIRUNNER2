<script>
$("#active").submit(function(){
    active();
    })

function active(){
    event.preventDefault();
    if (confirm("Press a button!")) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
}
</script>
