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

      <h3>Fill up the form</h3>
              <form method="post" action="<?php echo e(url('save-record')); ?>">
              <?php echo csrf_field(); ?>

                          <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                          <label>First Name </label>
                          <input type="text" name="first_name" required value="<?php echo e($data->first_name); ?>">
                            <br>
                          <label>Middle Name </label>
                          <input type="text" name="middle_name" value="<?php echo e($data->middle_name); ?>" required>
                            <br>

                          <label>Last Name </label>
                          <input type="text" name="last_name" value="<?php echo e($data->last_name); ?>" required>
                                                        <br>
       
                          <label>Birthdate </label>
                          <input type="date" name="birthdate" id="birthdate" value="<?php echo e($data->birthdate); ?>" required>
                            <br>

                          <label>gender </label><br>
                          <input type="radio" name="gender" value="Male" required> Male</input>
                          <input type="radio" name="gender" value="Female">Female</input><br>
                        
                            <br>

                          <label>Cellphone No </label>
                          <input type="number" name="cellphone_no" value="<?php echo e($data->cellphone_no); ?>"  required>
                            <br>

                          <label>Address </label>
                          <textarea name="address" id="address" placeholder="<?php echo e($data->address); ?>" required></textarea>
                            <br>

                          <button type="submit">Submit</button>
                    
                </form>
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\interview-exercise\resources\views/edit-record.blade.php ENDPATH**/ ?>