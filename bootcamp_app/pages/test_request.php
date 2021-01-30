<?php include "../bootcamp_app/components/head.php"; ?>
<form id="test-request" action="<?php get_url("?page=request") ?>" method="post" >
    <input type="text" name="todos">
    <select name="action">
        <option value="get">Dabūt datus</option>
        <option value="update">Nosūtīt datus</option>
    </select>

    <button>Nosūtīt</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="functions.js"></script>

<script>
console.log('js start');
    document.getElementById('test-request').addEventListener('submit', function(e) {
        e.preventDefault();
        //console.log(this);
        let form = this;
        
        $.ajax({
            method: form.getAttribute('method'),
            url: form.getAttribute('action'),
            data: $(form).serialize()
        }).done(function (msg) {
            console.log(msg);
        });
    });

</script>