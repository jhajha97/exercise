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

     <a href="<?php echo e(url('add-record')); ?>" >Add New Record</a>
              
                            <table>
                            <thead>
                                <tr>
                                   <th>#</th>
                                   <th>First Name</th>
                                   <th>Middle Name</th>
                                   <th>Last Name</th>
                                   <th>Birthdate</th>
                                   <th>Gender</th>
                                   <th>Last Name</th>
                                   <th>Cellphone #</th>
                                   <th>Address</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($data->first_name); ?></td>
                                        <td><?php echo e($data->middle_name); ?></td>
                                        <td><?php echo e($data->last_name); ?></td>
                                        <td><?php echo e($data->birthdate); ?></td>
                                        <td><?php echo e($data->gender); ?></td>
                                        <td><?php echo e($data->cellphone_no); ?></td>
                                        <td><?php echo e($data->address); ?></td>

                                        <td>

                             <a href="<?php echo e(url('edit-record/'. $data->id)); ?>"> Edit</a>
                            <a href="<?php echo e(url('delete-record/'. $data->id)); ?>"> Delete</a>

                                        </form>
                                        </td>
                                    </tr>
                             
                                </tbody>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h2> No Applicant Record </h2>
                                <?php endif; ?>
                            </table>
       
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\interview-exercise\resources\views/applicant.blade.php ENDPATH**/ ?>