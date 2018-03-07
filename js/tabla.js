
$(document).ready(function() {

    function load_image_data()
    {
        $.ajax({
            url:"controllers/fetch.php",
            method:"POST",
            success:function(data)
            {
                $('#image_table').html(data);
            }
        })
    }

});