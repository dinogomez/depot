<nav class="navbar navbar-expand-lg navbar">
  <a class="navbar-brand" href="index.php">
    <div class="box">
      <img class="img-logo mr-1"src="img/depot-favicon.png" alt="">
      <span class="font-logo">DEPOT</span>
    </div>
  </a>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon font"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">

    </ul>

    <form class="form-inline my-3 my-lg-0" action="../backend/redirect-search.php" method="POST">
      <input class="form-control" type="text" name="search" placeholder="Search" value="<?php

        if (isset($_GET['search'])){
          echo $_GET['search'];
        }

       ?>">
      <button class="btn btn-primary btn-45" type="submit">Search</button>
    </form>

    <?php
    require_once '../backend/process-check-login.php';
      navbarIsLogin();
    ?>

  </div>
</nav>

<hr>
<div class="d-flex justify-content-end">

  <div class="">
    <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModal3" style="width:110px">
    Filter <img class="white mb-1"src="img/icon/menu.svg" style="width:14px;">
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body ">
          <div class="text-center border-bottom">
            <img class="img-logo-3 my-3"src="img/depot-favicon.png" alt="">

          </div>
          <div class="m-3">
            <form class="" action="../backend/redirect-filter.php" method="POST">
              <div class="form-group">
                    <label class="font">Class</label>
                    <div class="form-group">
                         <select class="custom-select" name="class">
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=="") {echo 'selected="selected"';}} ?>value="" selected="">All</option>
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=='Demo') {echo 'selected="selected"';}}?>value="Demo">Demo</option>
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=='Heavy') {echo 'selected="selected"';}}?>value="Heavy">Heavy</option>
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=='Medic') {echo 'selected="selected"';}}?>value="Medic">Medic</option>
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=='Pyro') {echo 'selected="selected"';}}?>value="Pyro">Pyro</option>
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=='Scout') {echo 'selected="selected"';}}?>value="Scout">Scout</option>
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=='Sniper') {echo 'selected="selected"';}}?>value="Sniper">Sniper</option>
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=='Soldier') {echo 'selected="selected"';}}?>value="Soldier">Soldier</option>
                           <option <?php if (isset($_GET['class'])) {if ($_GET['class']=='Spy') {echo 'selected="selected"';}}  ?>value="Spy">Spy</option>
                         </select>
                       </div>
                  </div>
                  <div class="form-group">
                        <label class="font">Type</label>
                        <div class="form-group">
                             <select class="custom-select" name="type">
                               <option <?php if (isset($_GET['type'])) {if ($_GET['type']=="") {echo 'selected="selected"';}}?>value="" selected="">All</option>
                               <option <?php if (isset($_GET['type'])) {if ($_GET['type']=='Weapon') {echo 'selected="selected"';}}?>value="Weapon">Weapon</option>
                               <option <?php if (isset($_GET['type'])) {if ($_GET['type']=='Armor') {echo 'selected="selected"';}}?>value="Armor">Armor</option>
                               <option <?php if (isset($_GET['type'])) {if ($_GET['type']=='Hat') {echo 'selected="selected"';}}?>value="Hat">Hat</option>
                               <option <?php if (isset($_GET['type'])) {if ($_GET['type']=='Face') {echo 'selected="selected"';}}?>value="Face">Face</option>
                               <option <?php if (isset($_GET['type'])) {if ($_GET['type']=='Misc') {echo 'selected="selected"';}}?>value="Misc">Misc</option>

                             </select>
                           </div>
                      </div>
                      <div class="form-group">
                            <label class="font">SORT</label>
                            <div class="form-group">
                                 <select class="custom-select" name="sort">
                                   <option <?php if (isset($_GET['sort'])) {if ($_GET['sort']=="") {echo 'selected="selected"';}}?>value="" selected="">Any</option>
                                   <option <?php if (isset($_GET['sort'])) {if ($_GET['sort']=='price ASC') {echo 'selected="selected"';}}?>value="price ASC">PRICE ASC</option>
                                   <option <?php if (isset($_GET['sort'])) {if ($_GET['sort']=='price DESC') {echo 'selected="selected"';}}?>value="price DESC">PRICE DESC</option>
                                   <option <?php if (isset($_GET['sort'])) {if ($_GET['sort']=='stock ASC') {echo 'selected="selected"';}}?>value="stock ASC">STOCK ASC</option>
                                   <option <?php if (isset($_GET['sort'])) {if ($_GET['sort']=='stock DESC') {echo 'selected="selected"';}}?>value="stock DESC">STOCK DESC</option>

                                 </select>
                               </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="" value="Filter">
                          </div>
            </form>

          </div>


        </div>

      </div>
    </div>
  </div>
  </div>
</div>

<br>
