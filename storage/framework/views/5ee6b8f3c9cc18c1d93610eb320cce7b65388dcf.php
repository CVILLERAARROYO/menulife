
                    <table>
                        <thead>
                            <tr>
                                <th>Desayuno</th>
                                <th>Almuerzo</th>
                                <th>Cena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $renal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo $var->desayuno; ?> </td>
                                    <td><?php echo $var->almuerzo; ?></td>
                                    <td><?php echo $var->cena; ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>