<!DOCTYPE html>
<html lang="en">
<head>

    @stack('title')
    @stack('meta_title')
    @stack('meta_description')
    @stack('meta_keyword')
    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    
</head>
<body>



<script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
</script>