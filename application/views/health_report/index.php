<div class="content-wrapper">
    <table class="table-list table table-striped table-bordered text-center" id="myTable">
        <thead style="background-color:black;" class="text-white">
            <tr>
                <th>
                    Health ID
                </th>
                <th>
                    Illness
                </th>
                <th>
                    Employee ID
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    Address
                </th>
                <th>
                    Contact
                </th>
                <th>
                    Date Declared
                </th>
                <th>
                    Date Cured
                </th>
                <th>
                    Is sick
                </th>
            </tr>
        </thead>

        <?php foreach($health as $health) : ?>
        <tbody>
            <tr>
                <td>
                    <?= $health->health_id ?>
                </td>
                <td>
                    <?= $health->ill_name ?>
                </td>
                <td>
                    <?= $health->emp_id ?>
                </td>

                <td>
                    <?= $health->lname ?>
                </td>
                <td>
                    <?= $health->address ?>
                </td>
                <td>
                    <?= $health->contact ?>
                </td>
                <td>
                    <?= $health->date_declared ?>
                </td>
                <td>
                    <?= $health->date_cured ?>
                </td>
                <td>
                    <?= $health->is_sick ?>
                </td>
                
            </tr>
        </tbody>
        <?php endforeach ?>
    </table>
</div>