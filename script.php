<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js">

</script>

<script type="text/javascript">

    function submitData()
    {
        var data={
            name: $('#name').val(),
            email:$('#email').val(),
            password:$('#password').val(),
            phone:$('#phone').val(),
            bday:$('#bday').val(),
        };

        $.ajax({
            url: 'fuction.php',
            type:'post',
            data: data,
            success:function(response)
            {
                alert(response);
                if(response == "Login Succesful")
                {
                    window.location.reload();
                }
            }
        })



    }
    </script>