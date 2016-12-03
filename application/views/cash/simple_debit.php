
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />


<form action='' method='post'>
    <p><label>Country:</label><input type='text' name='country' value='' class='auto'></p>
</form>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(function() {

        //autocomplete
        $(".auto").autocomplete({
            alert('hi')
            source: "search.php",
            minLength: 1
        });

    });
</script>
