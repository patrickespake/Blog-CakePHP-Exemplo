<h1>Posts do Blog</h1>

<?php echo $this->Html->link('Adicionar Post', array('controller' => 'posts', 'action' => 'add')); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Ações</th>
        <th>Criado em</th>
    </tr>
    
    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id'])); ?>
            <?php echo $this->Html->link('Excluir', array('action' => 'delete', $post['Post']['id']), null, 'Deseja realmente excluir?'); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    
</table>
