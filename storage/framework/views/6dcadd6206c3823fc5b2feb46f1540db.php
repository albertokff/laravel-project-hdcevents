<?php $__env->startSection('title', 'HDC Events'); ?>

<?php $__env->startSection('content'); ?>

        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="Banner">
        <?php if(10 > 15): ?>
            <p>A condição é true</p>
        <?php endif; ?>

        <p><?php echo e($nome); ?></p>

        <?php if($nome == "Pedro"): ?>
            <p>O nome é Pedro</p>
        <?php elseif($nome == "Diogo"): ?>
            <p>O nome é <?php echo e($nome); ?> e ele tem <?php echo e($idade); ?> anos, e é um <?php echo e($profissao); ?>.</p>
        <?php else: ?>
            <p>O nome não é Pedro</p>
        <?php endif; ?>

        <?php for($i = 0; $i < count($arr); $i++): ?>
            <p><?php echo e($arr[$i]); ?> - <?php echo e($i); ?></p>
            <?php if($i == 2): ?>
                <p>O i é 2</p>
            <?php endif; ?>
        <?php endfor; ?>

        <?php $__currentLoopData = $nomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($loop->index); ?></p>
            <p><?php echo e($nome); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php
            $name = "João";
            echo $name;
        ?>

        <!-- Comentário do HTML -->
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diogoalberto/Documentos/Programacao/projetos/Laravel/hdcevents/resources/views/welcome.blade.php ENDPATH**/ ?>