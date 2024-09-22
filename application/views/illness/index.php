<div class="content-wrapper">
    <table class="table-list table table-striped table-bordered text-center" id="myTable">
        <thead style="background-color:black;" class="text-white">
        <tr>
                <th>
                    Sick Name
                </th>
                <th>
                    Contagious
                </th>
                <th>
                    Danger Level
                </th>
                <th>
                    Option
                </th>
               

            </tr>
        </thead>

        <?php foreach($illness as $illness) : ?>
        <tbody>
        <td>
         <?= $illness->ill_name ?>
    </td>

    <td>
         <?= $illness->contagious ?>
    </td>

    <td>
        <?= $illness->danger_level ?>
    </td>

    
    <td>
     <a href="<?= site_url('illness/show/'.$illness->ill_id) ?>"> <img src="<?=base_url('assets/images/edit.png')?>" style="width:15px;" alt="edit"> </a> 
    </td>
                
            </tr>
        </tbody>
        <?php endforeach ?>
    </table>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#BackdropAdd">
         Add New
     </button>

     <div class="modal fade" id="BackdropAdd" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header">
                     <div class="col-lg-4">

                     </div>
                     <div class="col-lg-4">
                         <h5 class="modal-title col-12 text-center" id="staticBackdropLabel">Add
                         </h5>
                     </div>
                     <div class="col-lg-4">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 </div>
                 <form action="<?=site_url('illness/add')?>" method="post">
                     <div class="modal-body">
                         <div class="row">
                             <div class="col">

                                 <label for="ill_name">Illness Name :</label>
                                 <input type="text" class="form-control" placeholder="Illness name" id="ill_name"
                                     name="ill_name" value="" required="">
                             </div>
                             <div class="col">

                                 <label for="contagious">Contagious :</label>
                                 <input type="text" class="form-control" placeholder="contagious" id="contagious"
                                     name="contagious" value="">
                             </div>
                             <div class="col">

                                 <label for="danger_level">Danger Level :</label>
                                 <input type="text" class="form-control" placeholder="Danger Level" id="danger_level" name="danger_level"
                                     value="" required="">
                             </div>
                         </div> 
                     </div>


                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Add</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
</div>