<article>
    <form name="myForm" method="post" onsubmit="return validateForm()">
        <div> <label for="name"> Username </label>
            <input id="name" type="text" name="name"/>
        </div>
        <div> <label for="pass"> Password </label>
            <input id="pass" type="password" name="pass">
        </div>
        <div>
            <button type="submit" > Log In </button>
        </div>
    </form>
</article>
<script>

    function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        if (x == null || x == "") {
            alert("Username and Password must be filled out");
            return false;
        }
    }
</script>