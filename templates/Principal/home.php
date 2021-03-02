
    <div class="container">

    <div class="row">
        <div class="col-4">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Welcome table</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"> <?=  $this->Html->link('Log in',['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'login']); ?></li>
              <li class="list-group-item"><?=  $this->Html->link('Register',['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'add']); ?></li>
            </ul>
        </div>


        <div class="col-8">
            <div class="row">
            <h3 style="color: hsl(30, 100%, 50%);" class="bg-info text-capitalize p-1">Reports index</h3>
               <div class="list-group ">
               <?php foreach($reports as $key => $report): ?>
                  <a href="#" class="list-group-item list-group-item-action flex-column mb-2">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= $report -> name ?></h5>
                    </div>
                  </a>
                 <?php endforeach; ?> 
                </div>
            </div>
        </div>
    </div>

    </div>
    
    </div>
