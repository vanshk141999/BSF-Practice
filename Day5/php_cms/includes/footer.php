<footer class="text-center p-2 text-[#D3D3D4]">
    <p class="text-sm">
    &copy;Copyright<?php echo date("Y")?>, Widget Corp.
    </p>
</footer>

<?php

    //Close Database connection
    if(isset($connection)){
        mysqli_close($connection);
    }

?>