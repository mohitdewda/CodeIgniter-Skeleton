<div class="row todo-item <?php ($completed) && print('completed'); ?>">
    <div class="col-xs-1">
        <a rel="async" href="#" ajaxify="<?php echo site_url('todo/todo_ajax/toggle'); ?>">
            <label><input class="todo-toggle" type="checkbox" <?php ($completed) && print('checked'); ?>></label>
        </a>
    </div>
    <div class="col-xs-11">
        <span class="todo-title <?php ($completed) && print('text-muted'); ?>">
            <?php echo $title; ?>
        </span>
    </div>
</div>