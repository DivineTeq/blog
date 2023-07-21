<div class="container-fluid">
    <div class="row">
        <!--mainbar-->
        <div class="col-8 mt-3">
            <div class="row">
                <?php
                for ($i=0; $i < 6; $i++) { 
                ?>
                <div class="col-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/isha.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <?php
                } 
                ?>
                
            </div>
        </div>
        <!--Sidebar-->
        <div class="col-4">
            <div class="border mt-3 p-3">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="text-dark" for="">Search</label>
                        <input type="text" name="search" class="form-control text-dark" placeholder="Enter search word" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <div class="border mt-3 p-3">
                <h3 class="text-dark">Category</h3>
                <ul>
                <?php
                for ($i=1; $i < 4; $i++) { 
                ?>
                <li>
                    <a href="#">Link <?php echo $i; ?></a>
                </li>
                <?php
                } 
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>