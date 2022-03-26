<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php echo $__env->make('inc.topNavUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <div>
                <?php echo $__env->yieldContent('contentUser'); ?>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\AdWt\APWT_TASK_3\resources\views/layouts/appUser.blade.php ENDPATH**/ ?>