<textarea class="form-control" name="<?php echo e($row->field); ?>"><?php if(isset($dataTypeContent->{$row->field})): ?><?php echo e(old($row->field, $dataTypeContent->{$row->field})); ?><?php elseif(isset($options->default)): ?><?php echo e(old($row->field, $options->default)); ?><?php else: ?><?php echo e(old($row->field)); ?><?php endif; ?></textarea>