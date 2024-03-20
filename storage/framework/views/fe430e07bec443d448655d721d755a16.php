
<!-- resources/views/components/primary-button.blade.php -->
<button <?php echo e($attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition'])); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH /var/www/html/sapoa.webally.co.za/resources/views/components/primary-button.blade.php ENDPATH**/ ?>