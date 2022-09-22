<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
     
            <br><br>
            <center><h1>Applicant Records</h1></center>

      <a href="<?php echo e(url('/applicant/create')); ?>" ></a>
              
                            <table >
                            <thead>
                                <tr>
                                   <th>#</th>
                                   <th>Name</th>
                                   <th>Address</th>
                                   <th>Mobile</th>
                                   <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php dd('d'); ?>;
                                <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data->first_name); ?></td>
                                        <td><?php echo e($data->middle_name); ?></td>
                                        <td><?php echo e($data->last_name); ?></td>
                                        <td>

                             <a href="<?php echo e(url('/applicant/' . $data->id . '/edit')); ?>"><button> Edit</button></a>
                             <form method="POST" action="<?php echo e(url('/applicant' . '/' . $data->id)); ?>">
                                      <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                        <button type="submit"> Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
       
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\interview-exercise\resources\views/awww.blade.php ENDPATH**/ ?>