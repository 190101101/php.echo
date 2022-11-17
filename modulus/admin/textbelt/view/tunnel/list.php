<div class="table_content">
    <table class="table-media">
        <thead>
            <tr>
                <th>id</th>
                <th>recipient</th>
                <th>text</th>
                <th>created</th>
                <th>user</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data->textbelt as $textbelt): ?>
            <tr>
                <td aria-label='id'># <?php echo $textbelt->tunnel_id; ?></td>
                <td aria-label='recipient'><?php echo $textbelt->tunnel_recipient; ?></td>
                <td aria-label='text'><?php echo $textbelt->tunnel_text; ?></td>
                <td aria-label='tunnel_created'><?php echo $textbelt->tunnel_created; ?></td>
                <td aria-label='user'><?php echo $textbelt->user_id; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   
    <!-- paginator -->
    <section id="paginator">
        <div class="paginator_box">
            <a href="/panel/textbelt/tunnel/list/page/1">НАЧАЛО</a>
            <?php \library\pagination::selector($data->page, 'panel/textbelt/tunnel/list/'); ?>
            <a href="/panel/textbelt/tunnel/list/page/<?php echo $data->page->length ? $data->page->length : 1; ?>">КОНЕЦ</a>
       </div>
    </section>
    <!-- paginator -->
</div>

