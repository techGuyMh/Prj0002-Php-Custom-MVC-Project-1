<h1>Tasks</h1>
<div class="row col-md-12 centered pt-3">
    <div class="col">    
        <a href="<?PHP echo WEBROOT;?>posts/create" class="btn btn-primary btn-xs pull-right m-3"><b>+</b> Add new Post</a>
        <table class="table table-striped custab">
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Description</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <?php
            foreach ($posts as $post)
            {
                echo '<tr>';
                echo "<td>" . $post['id'] . "</td>";
                echo "<td>" . $post['title'] . "</td>";
                echo "<td>" . $post['description'] . "</td>";
                echo "<td class='text-center'><a class='btn btn-info btn-xs' href='".WEBROOT."posts/edit/".$post['id']."' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='".WEBROOT."posts/delete/".$post['id']."' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>