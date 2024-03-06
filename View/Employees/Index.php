<!--
http://localhost/Sistema/?controller=Employees&accion=Index
-->
<a
    name=""
    id=""
    class="btn btn-primary"
    href="?controller=Employees&accion=Create"
    role="button"
    >Button</a
>


<table class="table table-bordered" style="text-align: center;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Accions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees as $employee) { ?>
            <td> <?php echo $employee->id ?> </td>
            <td> <?php echo $employee->name ?> </td>
            <td> <?php echo $employee->email ?> </td>
            <td>
                <div class="btn-group" role="group" aria-label="Button group name">
                    <a href="?controller=Employees&accion=edit&id=<?php echo $employee->id ?>" class="btn btn-info">Edit</a>
                    <a href="?controller=Employees&accion=delete&id=<?php echo $employee->id ?>" class="btn btn-danger">Delete</a>

                </div>
            </td>
            </tr>

        <?php } ?>
    </tbody>
</table>