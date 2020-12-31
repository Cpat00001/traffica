<?php include 'variables.php'; ?>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3>Contact Us:</h3>
                <h4><?php  echo $mobile; ?></h4>
           </div>
           <div class="col-sm-4">
                <h3>Mobile</h3>
                <h4><?php echo $email; ?></h4>
           </div>
           
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>